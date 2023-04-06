<?php
namespace MVC\Controllers;

class Login extends \MVC\Core\Controller
{
    function Show()
    {
        $this->view('template', [
            'page' => 'Login'
        ]);
    }
}