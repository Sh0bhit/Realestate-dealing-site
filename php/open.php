<?php

$con = mysqli_connect('localhost','root','','');
mysqli_select_db($con,'list');   
if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}

$sel = "SELECT * FROM main WHERE id = '$pageid' ";
$result = mysqli_query($con,$sel) or die(mysqli_error($con)); 
$rowd = mysqli_fetch_array($result);



 echo "
 <div class='shoeBackground'>
 <div class='openimage'>             
 <img src=".$rowd['image']." alt='' class='logo'>
</div>
</div>
 <div class='info'>
 <div class='shoeName'>
     <div>
         <h1 class='big'>".$rowd['city']."</h1>
         
     </div>
     <h3 class='small'>".$rowd['address']."</h3>
 </div>
 <div class='description'>
     <h3 class='title'></h3>
     <p class='text'>".$rowd['description']."</p>
 </div>
 <div class='color-container'>
     <h3 class='title'>Price</h3>
     <div class='buy-price'>
     <div class='price'>
         <h1>".$rowd['price']."</h1>
     </div>
 </div>
 <div class='size-container'>
     <h3 class='title'>Area</h3>
     <div class='buy-price'>
     <div class='price'>
         <h1>".$rowd['area']."</h1>
     </div>
 </div>
 <div class='size-container'>
     <h3 class='title'>Contact</h3>
     <div class='buy-price'>
     <div class='price'>
         <p>".$rowd['contact']."<p>
     </div>
 </div>
   ";





?>
 