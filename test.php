<?php
echo "clean";
session_start();
setcookie("TestCookie", $value, time()+100*3600);  /* срок действия 1 час */