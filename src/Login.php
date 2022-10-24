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
    }