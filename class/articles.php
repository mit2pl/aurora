<?php

namespace class;


class articles {

    public $database;

    public function __construct()
    {
        $this->database = new \database();
        $this->smart =  new \Smarty();
    }

    public function articletable() {
        $articletab = "CREATE TABLE IF NOT EXISTS article (
                    `id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `title` varchar(255) NOT NULL,
                    `body` varchar(255) NOT NULL,
                    `status` varchar(255) DEFAULT NULL,
                    `iduser` varchar(255) DEFAULT NULL,
                    `datecreate` timestamp NULL DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $articletab;
    }

    public function showallarticle() {
        $getallarticle = $this->database->prepare("SELECT * FROM article WHERE status = '1' ORDER BY datecreate DESC ");
        $getallarticle->execute();
        $allarticles = $getallarticle->fetchAll();
        $this->smart->assign("showart", $allarticles);
        $this->smart->display("showallarticle.tpl");

    }

    public function addarticle() {
        $this->smart->display("addarticle.tpl");
    }

    public function createnewarticle(array $varible) {
        $something = $this->database->prepare("INSERT INTO article (title, body, status, datecreate) VALUES (:title, :body, :status, :datecreate)");
        $something->execute(['title' => $varible['articletitle'], 'body' => $varible['articlebody'], 'status' => $varible['articlestatus'], 'datecreate' => date('Y-m-d H:i:s')]);
        $this->smart->assign("articlewasadd", "yes");
    }
    public function deletearticle($art) {
        $checkifissetarticle = $this->database->query("SELECT * FROM article WHERE id = '$art'");
        if($checkifissetarticle->fetchColumn() > 0) {
            $this->smart->assign("articleisset", "yes");
            $this->database->query("DELETE FROM article WHERE id = $art");
        }else {
            $this->smart->assign("articleisset", "no");
        }
    }

    public function checkeditarticle($idarticle) {
        $checkifissetarticle = $this->database->query("SELECT * FROM article WHERE id = '$idarticle'");
        if($checkifissetarticle->fetchColumn() > 0) {
            $checkifissetarticle->execute();
            $showart = $checkifissetarticle->fetchAll();
            $this->smart->assign("actualearticle", $showart);
            $this->smart->assign("articleisset", "yes");
        }else {
            $this->smart->assign("articleisset", "no");
        }
        $this->smart->display("editarticle.tpl");
    }
    public function editarticle($value) {
        $editarticle = $this->database->prepare("UPDATE article SET title = :title, body = :body, status = :status WHERE id=:id");
        $editarticle->execute(['title' => $value['articletitle'], 'body' => $value['articlebody'], 'status' => $value['articlestatus'], 'id' => $value['idarticle']]);
        $this->smart->assign("articlewasedited", "yes");
    }
}