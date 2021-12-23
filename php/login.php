
<?php

$con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"login");

if (isset($_POST['logbutton'])) {
$user = $_POST['user'];
$passcheck = $_POST['passcheck'];
$reg = " SELECT * FROM user WHERE username = '$user' AND  pass = '$passcheck' ";
$result = mysqli_query($con,$reg) or die(mysqli_error($con)); 
if(mysqli_num_rows($result)==1){
    echo "Logged In";
   
    if (isset($_POST['check']))
    {
    setcookie("login", $user, time() + 3600);   
    }
    session_start();
    $_SESSION['user'] = $user;
    header("Location: http://localhost/Realestate/pages/mainpage.php");
}
else{
    echo "username or password Do not match";
    ?>
    <script>
    setTimeout(() => {  window.location ="../pages/loginpage.php"; }, 2500);
   
    
    </script>

<?php

exit();

}
}




?>