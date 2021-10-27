<?php


class database {

    public $database;

    function __construct() {
        try {
            $this->database = new PDO("mysql:host=mysqlaurora;port=3306;dbname=auroramysql", "aurorauser", "aurorapassword", [PDO::ATTR_EMULATE_PREPARES => false]);
        }
        catch(PDOException $error) {
             echo $error->getMessage();
        }
    }
    public function query($sql)
    {
        return $this->database->query($sql);
    }

    public function exec($sqle) {
        return $this->database->exec($sqle);
    }

    public function prepare($slq) {
        return $this->database->prepare($slq);
    }
}
