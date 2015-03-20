<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;

use Common\Authentication\FileBased;
use Common\Authentication\InMemory;
use Common\Authentication\InMySQL;
use Common\Authentication\InSqLite;

/**
 * Class AuthController
 */
class AuthController extends Controller
{
    /**
     * Function execute
     *
     * @access public
     */
    public function action()
    {
        $postData = $this->request->getPost();

        //echo 'Authenticate the above two different ways' . var_dump($postData);

        $authCheck='';
        if($postData->authenticationType ==="InMemory")
        {
            $authCheck = new InMemory();
        }
        if($postData->authenticationType ==="InFile")
        {
            $authCheck = new FileBased();
        }
        if($postData->authenticationType ==="InMySQL")
        {
            $authCheck = new InMySQL();
        }
        if($postData->authenticationType ==="InSqLite")
        {
            $authCheck = new InSqLite();
        }
        echo'Authentication by: '.$postData->authenticationType.'<br>';

        $authCheck ->authenticate($postData->username, $postData->password);


        // example code: $auth = new Authentication($postData['username'], $postData['password']);
    }


}
