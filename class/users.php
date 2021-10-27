<?php

namespace class;

class users {

    public $data;

    public function __construct()
    {
        $this->data = new \database();
    }

    public function usertable() {
        $articletab = "CREATE TABLE IF NOT EXISTS users (
                    `id` int(11) UNSIGNED NOT NULL,
                    `login` varchar(255) NOT NULL,
                    `password` varchar(255) NOT NULL,
                    `mail` varchar(255) DEFAULT NULL,
                    `datecreate` timestamp NULL DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $articletab;
    }
}