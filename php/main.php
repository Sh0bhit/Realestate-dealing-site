        
    <?php


       $con = mysqli_connect("localhost","root","","");
       mysqli_select_db($con,"list");   

    $sel = "SELECT * FROM main";
    $result = mysqli_query($con,$sel) or die(mysqli_error($con)); 
    while($row = mysqli_fetch_array($result)){
          
          $id = $row['id'];
          $image = $row['image'];
          $city = $row['city'];
          $state = $row['state'];
          $address = $row['address'];
          $desc = $row['description'];
          $price = $row['price'];
          $area = $row['area'];
          $contact = $row['contact'];

        ?>

<div class="blog-item">
    <a href="../pages/openpage.php?id=<?php echo "$id";?>">
        <div class="icon">
            <img src="../uploaded-images/<?php echo "$image";?>" alt="">
        </div>
        <div class="content">
            <div class="title"><?php echo "$city";?><br><?php echo "$state";?><span class="blog-date"></span></div>
            <div class="rounded"></div>

            <p>
            <?php echo "$address";?>
            </p>
            <div class='projcard-tagbox'>
         <span class='projcard-tag'>Price:-<?php echo "$price";?></span>
         <span class='projcard-tag'>Area:-<?php echo "$area";?></span>
         <span class='projcard-tag'>Contact:-<?php echo "$contact";?></span>
         
         </div>
        </div>

        <div class="item-arrow">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </div>
        
    </a>

</div>








     

     <?php
      
     
       
    }
       
    
 
    
  
     
    
    ?>
        