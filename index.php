<?php
echo "IndexBilling!";
session_start();
$_SESSION["sessionTest"] = "Parker";
// setcookie("TestCookie", $value, time()+1000*3600);  /* срок действия 1 час */
setcookie('aaa', '111', strtotime('+30 days'));
var_dump($_COOKIE);