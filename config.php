<?php
// insert table
use class\users as Usersclass;
use class\articles as Articleclass;

class configuration {

    public database $database;

    function __construct()
    {
        $this->database = new database;
    }

    public function addconfiguration() {
        $userinterface = new Usersclass();
        $this->database->exec($userinterface->usertable());
        $articleinterface = new Articleclass();
        $this->database->exec($articleinterface->articletable());
    }

}