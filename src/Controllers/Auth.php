<?php
/**
 * Created by PhpStorm.
 * User: Clinton
 * Date: 3/8/2015
 * Time: 3:51 PM
 */

require_once '..\src\common\Authentication\CommonAuthInterface.php';
require_once '..\src\common\Authentication\FileBased.php';
require_once '..\src\common\Authentication\InMemory.php';
require_once '..\src\common\Authentication\InMySQL.php';
require_once '..\src\common\Authentication\InSqLite.php';
require_once '..\src\common\Authentication\PostObject.php';

class Auth extends Controller
{

    public function index()
    {
        //$pstobject = new PostObject($_POST);
        //echo 'hitting controller';
        $this->view('LoginTest');
    }
}