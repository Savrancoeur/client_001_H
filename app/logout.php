<?php

 // call sessionconfig file to use its methods
include_once "sessionconfig.php"; 

// delete email and password sessions
unsetsession('email');
unsetsession('password');
 
if(authfailed()){
    redirectto('home.php'); 
}



?>