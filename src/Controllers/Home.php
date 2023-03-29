<?php

namespace MVC\Controllers;


class Home extends \MVC\Core\Controller {
    function Show(){
        echo $this->model('MVC\\Models\\UserModel')->getUserName();
    }

    function huhu() {

    }
}