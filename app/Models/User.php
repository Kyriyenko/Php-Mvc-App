<?php

namespace app\Models;

use App\Database\AppDatabase;

class User
{

    public static function get(int $id): array
    {
        $connection = AppDatabase::getAppDatabase()->getConnection();

        $command = $connection->prepare('SELECT * FROM user WHERE id = :id');
        $command->bindParam(':id', $id);
        $command->execute();


        return $command->fetch(\PDO::FETCH_ASSOC);
    }
}