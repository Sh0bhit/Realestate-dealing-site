<?php

session_start();
session_destroy();
echo"Logout";
setcookie("login", $user, time() - 1);
header("location: http://127.0.0.1:5500/index.html");

?>