<?php

namespace Core;

class Controller
{
    protected function view($viewName, $data = [])
    {
        extract($data);
        require_once '../app/views/' . $viewName . '.php';
    }

    protected function redirect($url)
    {
        header("location: $url");
        exit();
    }
}