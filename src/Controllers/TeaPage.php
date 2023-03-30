<?php

namespace MVC\Controllers;

class TeaPage extends \MVC\Core\Controller
{
    function Show()
    {
        $this->view('template', [
            'page' => 'TeaPage'
        ]);
    }
}