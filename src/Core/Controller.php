<?php
/**
 * Created by PhpStorm.
 * User: Clinton
 * Date: 3/8/2015
 * Time: 3:39 PM
 */

class Controller
{
    protected function model($model)
    {
        require_once '../src/models/' .$model .'.php';
        return new $model();
    }

    protected function view($view, $data = [])
    {
        require_once '../src/views/'. $view .'.php';
    }
}