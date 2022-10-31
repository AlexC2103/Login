<?php
    class Login {

        public $array = [];

        function __construct() {

        }

        public function checkLogin() {

            if(!isset($_POST['user'])) {
                return;
            }

            $userInput = $_POST['user'];
            $passwordInput = $_POST['parola'];

            $user = $_ENV["USER"];
            $parola = $_ENV["PAROLA"];

            if (trim($user) == $userInput && $parola == $passwordInput) {
                session_destroy();

                session_start();
                echo "Login successful";
                $_SESSION['username'] = 'alex';
                header("Location: http://localhost/login_form/home", true, 301);

            } else {
                echo "Incorrect username or password!";
            }
        }
    }