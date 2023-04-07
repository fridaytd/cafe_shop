<?php
namespace MVC\Controllers;

use MVC\Core\Validator;

class Register extends \MVC\Core\Controller
{
    function Show()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view('template', [
                'page' => 'Register'
            ]);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new Validator([
                'username' => 'isRequired | unique: User, username',
                'fullname' => 'isRequired',
                'phone' => 'isRequired | isPhone',
                'password' => 'isRequired | minLength: 8',
                'password_confirmation' => 'isRequired | isSame: password'
            ]);
            $validator->validate();
            $errors = $validator->getErrors();
            \MVC\Core\Router::redirect('/Login');

        }
    }
}