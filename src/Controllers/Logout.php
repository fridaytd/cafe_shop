<?php

namespace MVC\Controllers;

class Logout extends \MVC\Core\Controller
{
    function Show()
    {
        if (isset($_SESSION['islogin'])) {
            unset($_SESSION['islogin']);
            \MVC\Core\Router::redirect('/Home');
        }
    }
}