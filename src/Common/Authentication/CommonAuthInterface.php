<?php

interface CommonAuthInterface
{
    public function authenticate();

    public function getStatus();

    public function getProfile();
}