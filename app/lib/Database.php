<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db = DB_NAME;

    private $dbh;
    private $stmt;
    public function __construct()
    {
        //set dsn
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            echo 'connection failed' . $e->getMessage();
        }
    }
    //prepare stmt with qury
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }
    //binding values
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    //execute the prepared stmt
    public function execute()
    {
        return $this->stmt->execute();
    }
    //getting resultset as array of objects
    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //getting single result as object
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
