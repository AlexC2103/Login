<?php
    class Home {
        public function welcome() {
            echo 'welcome';
        }

        public function logout() {
            header("Location: http://localhost/login_form/login", true, 301);
        }
    }