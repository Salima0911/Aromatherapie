<?php

namespace App\Config;

use App\Config\View;

abstract class Controller
{
    protected function view(String $view, array $datas, String $layout)
    {
        $view = new View($view, $datas, $layout);
        $view->render();
    }
    protected function redirect(String $path) {}
};
