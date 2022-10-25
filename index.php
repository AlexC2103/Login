<?php
    require("src/Login.php");
    session_start();

    $path = $_SERVER['DOCUMENT_ROOT'] . "/login_form/index.php";
    $login = new Login();

    echo $path;

    include("login.html");


    //https://phpdelusions.net/articles/paths