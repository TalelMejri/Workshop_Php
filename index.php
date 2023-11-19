<?php 

    require_once "./db_connected/index.php";

    $res=$db->prepare("select * from todos");
    $res->execute();
    $todos=$res->fetchAll();

    $page_titel="List Todo";
    $template="index";
    include "./layout.phtml";

?>