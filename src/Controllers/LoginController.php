<?php

namespace Controllers;
require ("AbstractController.php");
require ("src/Services/Login.php");

use Services\Login;

class LoginController extends AbstractController
{
    public function checkLogin()
    {
        if (!isset($_POST['user'])) {
            $this->view = "login.html";
            return;
        }

        $userInput = $_POST['user'];
        $passwordInput = $_POST['parola'];

        $service = new Login();
        $ret = $service->checkLogin($userInput, $passwordInput);

        if ($ret) {
            echo "Login successful";
            $_SESSION['username'] = 'alex';
            header("Location: http://localhost/login_form/home", true, 301);

        } else {
            echo "Incorrect username or password!";
        }

        $this->view = "login.html";
    }

}

