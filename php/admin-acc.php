<?php

$con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"login");

if (isset($_POST['logbutton'])) {
$user = $_POST['user'];
$passcheck = $_POST['passcheck'];
$reg = " SELECT * FROM admin WHERE username = '$user' AND  pass = '$passcheck' ";
$result = mysqli_query($con,$reg) or die(mysqli_error($con)); 
if(mysqli_num_rows($result)==1){
    echo "Logged In";
   
    if (isset($_POST['check']))
    {
    setcookie("login", $user, time() + 3600);   
    }
    session_start();
    $_SESSION['admin'] = $user;
    header("Location: ../pages/admin.php");
}
else{
    echo "username or password Do not match";
    ?>
    <script>
    setTimeout(() => {  window.location ="../pages/admin-login.php"; }, 2500);
   
    
    </script>

<?php

exit();

}
}




?>
