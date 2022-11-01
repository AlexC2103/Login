<?php
    namespace Services;

    class Login {

        public $array = [];

        function __construct() {

        }

        public function checkLogin($userInput, $passwordInput) {

            $user = $_ENV["USER"];
            $parola = $_ENV["PAROLA"];

            return (trim($user) == $userInput && $parola == $passwordInput);
        }
    }