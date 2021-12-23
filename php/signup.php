<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
   function alert(){
    sweetAlert("Registered Sucessfully");
    
    }

    
    function userexist() {
      swal({
    title: "Username already Exist",
    text: "Choose Different Username and press ok to Continue"
    }, function() {
     window.location = '../pages/loginpage.php';
        });
}


function emailexist() {
      swal({
    title: "Email already Exist",
    text: "Choose Other Email and press ok to Continue"
    }, function() {
     window.location = '../pages/loginpage.php';
        });
}


function success() {
      swal({
    title: "Registered Sucessfully"
    }, function() {
     window.location = '../pages/loginpage.php';
        });
}


    function error(){
        swal({
         title: "Error!",
         text: "There was an error processing your request Try again!",
         icon: "warning",
         button: "Try again!",
        });
    
    }
</script>


<?php
  error_reporting(0);
  ini_set('display_errors', 0);

  $con = mysqli_connect("localhost","root","","");
  mysqli_select_db($con,"login");
  
  $name = "";
  $email = "";
  $pass = "";
  $pass2 = "";
  $username = "";
  $reg ="";
  
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['names'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
   $reg = " INSERT INTO  user (username,names,email,pass) VALUES ('$username','$name','$email','$pass')";
    
    $log = " SELECT * FROM user WHERE username = '$username'";

    $emaillog = " SELECT * FROM user WHERE email = '$email'";

    $logcheck = mysqli_query($con,$log) or die(mysqli_error($con)); 
    
    $emailcheck = mysqli_query($con,$emaillog) or die(mysqli_error($con)); 

    if(mysqli_num_rows($logcheck)>0){

      ?>
      <script>
     //window.location ="../pages/loginpage.php";
     
     userexist()
      
  </script>
  <?php
   }
   elseif(mysqli_num_rows($emailcheck)>0){

      ?>
      <script>
     //window.location ="../pages/loginpage.php";
     
     emailexist()
      
  </script>
  <?php
   }
   else{
     mysqli_query($con,$reg) or die(mysql_error($con)); 
     ?>
     <script>
      //window.location ="../pages/loginpage.php";
    success()
     
  </script>
  <?php
  }
  
  }

 


?>


