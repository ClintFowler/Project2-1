<?php

    class InMemory implements CommonAuthInterface
    {
        protected $user;
        protected $userpassword;
        protected $status;

        public function __construct(PostObject $pst)
        {
            $this->user = $pst->getUsername();
            $this->userpassword = $pst->getPassword();
            $this->status = 1;
        }

        public function authenticate()
        {
            if($this->user !== "Clint" || $this->userpassword !== "LetMeIn123")
            {
                return false;
            }
            return true;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function getProfile()
        {
            /* TODO: Implement getProfile() method.
            * Nothing to implement at this time for
            * In Memory Profiles.
            */
        }
    }
