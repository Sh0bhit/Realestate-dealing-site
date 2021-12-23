<?php

include '../php/session.php';

$con = mysqli_connect('localhost','root','','');
mysqli_select_db($con,'list');   
if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}

$sel = "SELECT * FROM main WHERE id = '$pageid' ";
$result = mysqli_query($con,$sel) or die(mysqli_error($con)); 
$rowd = mysqli_fetch_array($result);

$city = $rowd['city'];
$state = $rowd['state'];
$contact = $rowd['contact'];
$area = $rowd['area'];
$price = $rowd['price'];
$image = $rowd['image'];
$desc = $rowd['description'];
$add = $rowd['address'];

?>
 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/open.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  </head>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
          <div class = "img-showcase">
              <img src = "<?php echo "$image";?>" alt = "image">
        
            </div>
          </div>
         
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo "$city";?></h2>
          <a href = "#" class = "product-link"><?php echo "$state";?></a>
          <div class = "product-price">
            <p class = "new-price">Area: <span><?php echo "$area";?></span></p>
            <p class = "new-price">Price: <span><?php echo "$price";?></span></p>
          </div>

          <div class = "product-detail">
          <h3>Address</h3>
          <p><?php echo "$add";?></p>
            <h3>Description</h3>
            <p><?php echo "$desc";?></p>
            <ul>
              <li>Contact: <span><?php echo "$contact";?></span></li>
              <!--<li class="sc-hide">Scroll Down For More <span></span></li> -->
            </ul>
          </div>

          <div class = "img-showcase1">
              <img src = "<?php echo "$image";?>" alt = "image">
        
            </div>

          <div class = "purchase-info">
            <a href="http://localhost/Realestate/pages/mainpage.php"><button type = "button"  class = "btn">
              Go back <!--<i class = "fas fa-shopping-cart"></i>-->
            </button></a>
           <!-- <button type = "button" class = "btn">Compare</button> -->
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>