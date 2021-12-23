<?php

$delcon = mysqli_connect("localhost","root","","");
mysqli_select_db($delcon,"login"); 



if (isset($_POST['delete_btn'])){
    
    $delid = $_POST['delete_id'];
    
    $del = "DELETE FROM user WHERE id = '$delid'";
    mysqli_query($delcon,$del) or die(mysqli_error($delcon));



}

?>