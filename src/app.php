<?php

// Load server specific configuration data.  Should
// check an environment variable load the appropriate
// server configuration file.
//require 'Config'.DIRECTORY_SEPARATOR.'dev.php';

// Load dependencies here, if needed now.
require 'Common'.DIRECTORY_SEPARATOR.'Authentication'.DIRECTORY_SEPARATOR.'CommonAuthInterface.php';
require 'Common'.DIRECTORY_SEPARATOR.'Authentication'.DIRECTORY_SEPARATOR.'FileBased.php';
require 'Common'.DIRECTORY_SEPARATOR.'Authentication'.DIRECTORY_SEPARATOR.'InMemory.php';
require 'Common'.DIRECTORY_SEPARATOR.'Authentication'.DIRECTORY_SEPARATOR.'PostObject.php';

// Display the login form.
require 'Views'.DIRECTORY_SEPARATOR.'login.php';
