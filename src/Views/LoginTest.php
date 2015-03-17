<?php

$userID = new PostObject($_POST);
$authType;


if($userID->getAuthType() == "InMemory")
{
    $authType = new InMemory($userID);
}
if($userID->getAuthType() == "InFile")
{
    $authType = new FileBased($userID);
}
if($userID->getAuthType() == "InMySQL")
{
    $authType = new InMySQL($userID);
}
if($userID->getAuthType() == "InSqLite")
{
    $authType = new InSqLite($userID);
}

echo <<< textblock
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../../public/Style1.css">
            <title>Test Login</title>
        </head>
        <body>
textblock;

if(!$authType->authenticate())
{
    echo 'Chuck Norris Denies you!';
}
else
{
    echo 'Chuck Norris Approves you '.$userID->getUsername();
}

if($userID->getAuthType() == "InMySQL" || $userID->getAuthType() == "InSqLite")
{
    $authType->closeConnection();
}

echo '<br><br>';
echo 'He Authenticated you with: '.$userID->getAuthType().' Authentication';
echo "</body>
</html>";


