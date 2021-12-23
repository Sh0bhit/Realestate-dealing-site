        
        <?php


       $con = mysqli_connect("localhost","root","","");
       mysqli_select_db($con,"list");   

    $sel = "SELECT * FROM main";
    $result = mysqli_query($con,$sel) or die(mysqli_error($con)); 
    while($row = mysqli_fetch_array($result)){

        echo "

          <div class='p-layout'>
         <div class='projcard projcard-blue'>
         <div class='projcard-innerbox'>
         <a name='detlink' href='http://localhost/Realestate/pages/openpage.php?id=".$row['id']."' method='post'>
         <img class='projcard-img' src='../uploaded_images/".$row['image']."'>
         <div class='projcard-textbox'>
         <div class='projcard-bar'></div>
         <p class='projcard-description'>".$row['address']."<br>".$row['description']."</p>
         <div class='projcard-tagbox'>
         <span class='projcard-tag'>Price:-".$row['price']."</span>
         <span class='projcard-tag'>Area:-".$row['area']."</span>
         <span class='projcard-tag'>Contact:-".$row['contact']."</span>
         </a>
         </div>
         </div>
         </div>
         </div>
         </div>

         <div class='s-layout'>
         <div class='card card-one'>
         <a name='detlink' href='http://localhost/Realestate/pages/openpage.php?id=".$row['id']."' method='post'>
         <div class='profileImg-first'><img src='../uploaded_images/".$row['image']."'>
         <div class='s-cont'>
         <h1>".$row['city']."</h1>
         <h2>".$row['state']."</h2>
         <p>".$row['address']."</p>
         </div>
        
         <div class='s-other'>
         <p>Price:-".$row['price']."</p>
         <p>Area:-".$row['area']."</p>
         <p>Contact:-".$row['contact']."</p>
         </div>
         </a>
         </div>
        
         <ul>
        
         </ul>
       </div>
     </div>
         
         ";

      
     
       
    }
       
    
 
    
  
     
    
    ?>
        