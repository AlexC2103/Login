<?php
    class Home {
        public function welcome() {
            echo 'Welcome to home page!';
        }

        public function logout() {
            header("Location: http://localhost/login_form/login", true, 301);
        }
    }