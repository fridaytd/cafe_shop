<?php

namespace MVC\Core;

class App{
    private $db;

    protected $controller = 'Home';
    protected $action = 'Show';
    protected $params;

    function __construct($pdo) {
       $arr = $this->UrlProcess();
       $this->db = $pdo;
       // Xu li controller      
        if (isset($arr[0]))  {
            if (class_exists('MVC\\Controllers\\' . $arr[0])) {
                $this->controller = $arr[0];
            }
            unset($arr[0]);
        }
        $this->controller = new ('MVC\\Controllers\\' . $this->controller);

        // Xu li action
        if (isset($arr[1])) {
            if(method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Xu ly params
        $this->params = $arr?array_values($arr):[];

        // echo $this->controller . '<br>';
        // echo $this->action . '<br>';
        // print_r($this->params);

        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    function UrlProcess() {
        if (isset($_GET['url'])){
            return explode('/', filter_var(trim($_GET['url'], "/")));
        }
    }
}