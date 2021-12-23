<?php

session_start();

if (isset($_SESSION['user'])){

   echo"";
}

else{
    header("location: http://localhost/Realestate/pages/loginpage.php");
    exit();
}


?>