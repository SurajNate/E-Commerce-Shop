<?php

session_start();
$_SESSION = array();
unset($_SESSION["usernames"]);
header("location: login.php");

?>