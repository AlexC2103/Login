<?php

namespace Controllers;

abstract class AbstractController
{
    public $view;

    public function __destruct()
    {
        include(__DIR__ . "/../View/$this->view");
        // TODO: Implement __destruct() method.
    }
}