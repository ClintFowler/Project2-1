<?php
/**
 * Created by PhpStorm.
 * User: Clinton
 * Date: 3/8/2015
 * Time: 3:43 PM
 */

class Home extends Controller
{
    public function index()
    {
        $this->view('login');
    }
}