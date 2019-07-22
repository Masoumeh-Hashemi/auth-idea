<?php

// ========================
// Webpage which requires auth
// ========================

// token generated based on login (from database)
$token = 'abc';

// login mode (client 2 server)
if (isset($_GET['username']))
{
    if ($_GET['username'] == "admin" && $_GET['password'] == "123")
    {
        echo "login:valid,token:$token";
    }
    else
    {
        echo "login:invalid";
    }
    exit;
}
// token validation mode (server 2 server)
else if (isset($_GET['token']))
{
    echo "token valid:";
    if ($_GET['token'] == $token)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
    exit;
}

?>

<!-- login form -->
<!--
<form method="get" action="auth.php">
    username:
    <input name="username" type="text" />
    password:
    <input name="password" type="password" />

    <input type="submit" value="login" />
</form>
-->