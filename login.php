<?php
    session_start();
    $user = 'alex';
    $parola = '123';

    $userInput = $_POST['user'];
    $passwordInput = $_POST['parola'];

    if ($user == $userInput && $parola == $passwordInput) {
        session_destroy();

        echo "Login successful";
        session_start();
        $_SESSION['username'] = 'alex';
        header("Location: http://localhost/login_form/home.php", true, 301);
    } else {
        echo "Incorrect username or password!";
    }

    include("login.html");