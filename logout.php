<?php

session_start();
//include '../login_val.php';
// remove all session variables
session_unset(); 
session_reset();
// destroy the session 
session_destroy(); 

header('location: /sis2/landing.php');
?>