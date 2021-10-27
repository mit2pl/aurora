<?php
session_start();
require_once ("class/database.php");
include ("smarty/Smarty.class.php");
require_once ("class/users.php");
require_once ("class/articles.php");
include("config.php");
$config = new configuration();
$config->addconfiguration();
$article = new class\articles();
//i think is one wrong idea i did in this code is route
if((empty($_GET['action'])) || ($_GET['action'] == '')) {
    if(isset($_POST['deletearticle'])) {
        $article->deletearticle($_POST['idarticle']);
    }
    $article->showallarticle();
} else if($_GET['action'] == 'addarticle') {
    if ((!empty($_POST['articletitle'])) && (!empty($_POST['articlebody'])) && (!empty($_POST['articlestatus']))) {
        $article->createnewarticle($_POST);
    }
    $article->addarticle();
}else if($_GET['action'] == 'editarticle') {
    if( (!empty($_POST['articletitle'])) && (!empty($_POST['articlebody'])) ) {
        $article->editarticle($_POST);
    }
    $article->checkeditarticle($_GET['articleid']);
} else {
    http_response_code(404);
}
