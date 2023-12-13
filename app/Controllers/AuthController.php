<?php


namespace app\Controllers;


use App\Database\AppDatabase;
use App\Library\AuthHelper;

class AuthController
{

    public function signUp(): void
    {
        $connection = AppDatabase::getAppDatabase()->getConnection();

        $command = $connection->prepare('INSERT INTO user (email, password, first_name, last_name) values (:email, :password, :first_name, :last_name)');
        $command->execute([
           'email' => $_REQUEST['email'],
           'password' => md5($_REQUEST['password']),
           'first_name' => $_REQUEST['first_name'],
           'last_name' => $_REQUEST['last_name']
        ]);

        $userId = $connection->lastInsertId();

        if ($_REQUEST['role'] === 'worker') {
            $command = $connection->prepare('INSERT INTO worker (user_id, rating, work_experience) values (:user_id, :rating, :work_experience)');
            $command->execute([
                'user_id' => $userId,
                'rating' => 0,
                'work_experience' => '1 day'
            ]);
        } else {
            $command = $connection->prepare('INSERT INTO customer (user_id, passport, driving_license) values (:user_id, :passport, :driving_license)');
            $command->execute([
                'user_id' => $userId,
                'passport' => '0000000000000',
                'driving_license' => null,
            ]);
        }

        AuthHelper::addUser(['user_id' => $userId, 'user_role' => $_REQUEST['role']]);

        header('Location: /');
    }


    public function signIn(): void
    {
        $connection = AppDatabase::getAppDatabase()->getConnection();

        $command = $connection->prepare('SELECT * FROM user WHERE email = :email');
        $command->execute(['email' => $_REQUEST['email']]);

        $row = $command->fetch();

        if (!empty($row) && $row['password'] === md5($_REQUEST['password'])) {
            $queryWorker = "SELECT 'worker' AS table_name FROM worker WHERE user_id = :user_id";
            $queryCustomer = "SELECT 'customer' AS table_name FROM customer WHERE user_id = :user_id";

            $query = $queryWorker . " UNION " . $queryCustomer;
            $command = $connection->prepare($query);
            $command->bindParam(':user_id', $row['id']);
            $command->execute();

            $tableName = $command->fetchColumn();

            AuthHelper::addUser(['user_id' => $row['id'], 'user_role' => $tableName]);

            header('Location: /');
        } else {
            header('Location: /login');
        }
    }


    public function logOut()
    {
        AuthHelper::removeUser();

        header('Location: /');
    }
}

