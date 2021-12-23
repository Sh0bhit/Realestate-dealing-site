<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
   function alert(){
    sweetAlert("Sucessfully Uploaded");
    
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
  $con = mysqli_connect("localhost","root","","");
  mysqli_select_db($con,"list");
  
  $name ="";
  $add ='';
  $city='';
  $state='';
  $contact='';
  $area='';
  $price='';
  $img = "";
  $desc = "";
  $in ="";
  
  if (isset($_POST['submit'])) {
    $name = $_SESSION['user'];
    $add =$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $contact=$_POST['contact'];
    $area=$_POST['area'];
    $price=$_POST['price'];
    $img = $_FILES['image'];
    $desc = $_POST['desc'];
    $fname = $img['name'];
    $fpath = $img['tmp_name'];
    $ferror= $img['error'];
   
   if($ferror == 0){
     $dest = '../uploaded-images/'.$fname;
     echo $dest;
     move_uploaded_file($fpath,$dest);
     $in = " INSERT INTO  main (name,address,city,state,contact,area,price,image,description) VALUES ('$name','$add','$city','$state','$contact','$area','$price','$dest','$desc')";
     mysqli_query($con,$in) or die(mysql_error($con)); 
   }


  }
  
   
  if($in){

    ?>
    <script>
   alert()

   setTimeout(() => {  window.location ="../pages/mainpage.php"; }, 2500);
   
    
</script>
 
<?php
     
 }

 

?>