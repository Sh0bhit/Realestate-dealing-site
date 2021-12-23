<?php

session_start();

if (isset($_SESSION['admin'])){

   echo"";
}

else{
    header("location: http://localhost/Realestate/pages/admin-login.php");
    exit();
}


?>