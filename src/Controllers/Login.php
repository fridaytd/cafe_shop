<?php
namespace MVC\Controllers;

class Login extends \MVC\Core\Controller
{
    function Show()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view('template', [
                'page' => 'Login'
            ]);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new \MVC\Core\Validator([
                'username' => 'isRequired',
                'password' => 'isRequired'
            ]);
            $errors = $validator->getErrors();
            if (!empty($errors)) {
                $this->view('template', [
                    'page' => 'Login',
                    'errors' => $errors
                ]);
            } else {
                $user = new \MVC\Models\User();
                $value = $validator->getValidatedValue();
                if ($user->authenticate($value['username'], $value['password'])) {
                    $_SESSION['islogin'] = [
                        'user_id' => $user->getId(),
                        'user_fullname' => $user->getFullName()
                    ];
                    echo '<script>alert("Đăng nhập thành công");setTimeout(function(){window.location.href="/Home";}, 1000);</script>';
                } else {
                    $this->view('template', [
                        'page' => 'Login',
                        'authenticate' => false
                    ]);
                }
            }
        }



    }
}