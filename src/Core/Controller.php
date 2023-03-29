<?php

namespace MVC\Core;

class Controller{
    function model($model) {
        return new $model;
    }
}