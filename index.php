<?php

    use Controllers\LoginController;
    processEnv();

    $routes = [
        '/login_form/login' => ['LoginController', 'checkLogin'],
        '/login_form/home' => ['Home', 'welcome'],
        '/login_form/logout' => ['Home', 'logout']
    ];

    $path = $_SERVER['REQUEST_URI'];

    foreach ($routes as $key => $value) {
        if ($key == $path) {

            require("src/Controllers/{$value[0]}.php");
            echo "src/Controllers/{$value[0]}.php";
            $obj = new $value[0]();

            $method = $value[1];
            $view = $obj->$method();

            include("src/View/$view");
        }
    }

    function processEnv() {
        $env = fopen(".env.txt", "r") or die("Unable to open the file!");
        //echo fread($env, filesize(".env.txt"));

        foreach (file('.env.txt') as $key => $value) {
            $pozEgal = strpos($value, '=');
            $_ENV[substr($value, 0, $pozEgal)] = substr($value, $pozEgal + 1);
            //echo substr($value, $pozEgal + 1);
        }

        fclose($env);
    }

    //https://phpdelusions.net/articles/paths