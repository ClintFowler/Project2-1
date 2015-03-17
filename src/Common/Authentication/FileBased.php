<?php

    class FileBased implements CommonAuthInterface
    {
        protected $user;
        protected $userpassword;
        protected $status;

        public function __construct(PostObject $pst)
        {
            $this->user = $pst->getUsername();
            $this->userpassword = $pst->getPassword();
            $this->status = 0;
        }

        public function authenticate()
        {
            $loginfile = fopen("../src/Common/Authentication/testLogin.txt","r") or die("File not Found");
            while(!feof($loginfile))
            {
                $test = explode(",",fgets($loginfile));
                foreach($test as $check)
                {
                    if (!strcmp($check, $this->getformattedcreds())) {
                        fclose($loginfile);
                        return true;
                        break;
                    }
                }
            }
            fclose($loginfile);
            return false;
        }

        public function getStatus()
        {
            return $this->status;
        }

        private function getformattedcreds()
        {
            return $this->user.':'.$this->userpassword;
        }

        public function getProfile()
        {
            /* TODO: Implement getProfile() method.
            * Nothing to implement at this time for
            * In File Profiles.
            */
        }


}
