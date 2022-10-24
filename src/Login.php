<?php
    class Login {

        public $array = [];

        function __construct() {

        }

        public function processEnv() {
            $env = fopen(".env.txt", "r") or die("Unable to open the file!");
            //echo fread($env, filesize(".env.txt"));

            foreach (file('.env.txt') as $key => $value) {
                $pozEgal = strpos($value, '=');
                $this->array[substr($value, 0, $pozEgal)] = substr($value, $pozEgal + 1);
                //echo substr($value, $pozEgal + 1);
            }

            fclose($env);
        }

        public function checkLogin() {

            $userInput = $_POST['user'];
            $passwordInput = $_POST['parola'];

            $user = $this->array["USER"];
            $parola = $this->array["PAROLA"];

            if (trim($user) == $userInput && $parola == $passwordInput) {
                session_destroy();

                session_start();
                echo "Login successful";
                $_SESSION['username'] = 'alex';
                header("Location: http://localhost/login_form/home.php", true, 301);

            } else {
                echo "Incorrect username or password!";
            }
        }
    }