<?php

class PostObject
{
    protected $user = " ";
    protected $userpass = " ";
    protected $status = 0;
    protected $authenticateby = " ";

    public function __construct($postArray)
    {
        if(isset($postArray['usernameField']))
        {
            $this->user = htmlentities($postArray['usernameField']);
        }
        if(isset($postArray['passwordField']))
        {
            $this->userpass = htmlentities($postArray['passwordField']);
        }
        $this->authenticateby = $postArray['authenticationType'];
        unset($_POST);
    }

    public function getUsername()
    {
        return $this->user;
    }

    public function getPassword()
    {
        return $this->userpass;
    }

    public function getAuthType()
    {
        return $this->authenticateby;
    }

    public function updateStatus($userstatus)
    {
        $this->status = $userstatus;
    }
}