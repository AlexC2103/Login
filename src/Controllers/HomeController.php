<?php

namespace Controllers;
require ("AbstractController.php");
class HomeController extends AbstractController
{

    public function welcome()
    {
        echo 'Welcome to home page!';

        $this->view = "home.html";
        return;
    }

    public function logout()
    {
        header("Location: http://localhost/login_form/login", true, 301);
    }

}