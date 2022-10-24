<?php
    require("src/Login.php");
    session_start();

    $login = new Login();
    $login->processEnv();
    $login->checkLogin();

    include("login.html");