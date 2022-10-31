<?php

    session_start();

    processEnv();

    $routes = [
        '/login_form/login' => ['Login', 'checkLogin'],
        '/login_form/home' => ['Home', 'welcome'],
        '/login_form/logout' => ['Home', 'logout']
    ];

    $path = $_SERVER['REQUEST_URI'];

    foreach ($routes as $key => $value) {
        if ($key == $path) {

            $dir = strtolower($value[0]);
            require("src/{$dir}/{$value[0]}.php");

            $obj = new $value[0]();
            //$login->processEnv();

            $method = $value[1];
            $obj->$method();


            include("src/{$dir}/{$value[0]}.html");
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