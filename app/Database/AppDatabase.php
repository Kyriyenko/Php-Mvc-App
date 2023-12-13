<?php

namespace app\Database;


class AppDatabase
{
    private $conntection;

    private static ?self $instance = null;

    private function __construct()
    {
        $host = $_ENV['DB_HOST'] ?? 'root';
        $dbName = $_ENV['DB_NAME'] ?? 'carsharing';

        $this->username = $_ENV['dbusername'] ?? 'root';
        $this->password = $_ENV['dbpassword'] ?? 'password';
        $this->dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;

        $this->createConnection();
    }

    public static function getAppDatabase(): ?AppDatabase
    {
        if (gettype(self::$instance) === "NULL") {
            return new self();
        }

        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getConnection(): \PDO
    {
        return $this->conntection;
    }

    /**
     * @return void
     */
    private function createConnection(): void
    {
        $this->conntection = new \PDO($this->dsn, $this->username, $this->password);
    }

    public function __clone(): void {}

    public function __wakeup(): void {}
}