<?php
// database.php
class Connection
{
    private static $instance = null;
    private $connect;

    private function __construct()
    {
        $dsn = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";" . DB_CHARSET;
        $this->connect = new PDO($dsn, DB_USER, DB_PASSWORD);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connect()
    {
        return $this->connect;
    }
}
