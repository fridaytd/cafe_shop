<?php
namespace MVC\Controllers;

class Register extends \MVC\Core\Controller
{
    function Show()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view('template', [
                'page' => 'Register'
            ]);
        }
    }
}