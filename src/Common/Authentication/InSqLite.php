<?php
/**
 * Created by PhpStorm.
 * User: Clinton
 * Date: 3/9/2015
 * Time: 5:48 PM
 */

class InSqLite implements CommonAuthInterface
{
    protected $user;
    protected $userpass;
    protected $status;
    protected $dbh;

    function __construct(PostObject $pst)
    {
        $this->user = $pst->getUsername();
        $this->userpass = $pst->getPassword();
        $this->status = 1;
        try
        {
            $this->dbh = new PDO("sqlite:../src/Common/Authentication/sqliteDB");
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function authenticate()
    {
        $query ="Select username, password from users";
        $results = $this->dbh->query($query);
        while($row = $results->fetch(PDO::FETCH_ASSOC))
        {
            if($row["username"]=== $this->user && $row["password"] === $this->userpass)
            {
                $results->closeCursor();
                return true;
            }
        }
        $results->closeCursor();
        return false;
    }

    public function closeConnection()
    {
        $this->dbh = null;
    }

        public function getStatus()
    {
        return $this->status;
    }

    public function getProfile()
    {
        /* TODO: Implement getProfile() method.
            * Nothing to implement at this time for
            * In File Profiles.
            */
    }



}