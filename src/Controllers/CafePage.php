<?php

namespace MVC\Controllers;

class CafePage extends \MVC\Core\Controller
{
    function Show()
    {
        $this->view('template', [
            'page' => 'CafePage'
        ]);
    }
}