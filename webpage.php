<!--

// ========================
// Webpage which requires auth
// ========================

-->

<pre>
<code>
<?php

// Get request headers
foreach (getallheaders() as $name => $value) { 
    echo "$name: $value <br>";
    if ($name == "Auth-Token")
        $token = $value;
} 

exit;

// consts
$auth_server_address = "http://192.168.1.7/auth-idea";
$token = '';


?> 
</code>
</pre>


<?php
// check token with auth server
$get_file_content = file_get_contents("$auth_server_address/auth.php?token=$token");
if ($get_file_content == "token valid:false")
{
    // invalid token
    echo "Login expired...!";
    exit;
}
?>


<!-- page private content -->
<img src="tenor.gif">
