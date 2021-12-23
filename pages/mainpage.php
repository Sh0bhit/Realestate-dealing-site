<?php include '../php/session.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/upload.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/main-footer.css">
    <link rel="stylesheet" href="../css/abutmodal.css">
    <script src="../js/switch.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Explore-Properties</title>
</head>
<body>
<nav> 
  <div class="sidefixed">
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="./img/logo.png" class="logo" alt="">
      <h3 class="hide">Sort</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#"  class="active" data-active="0">
            <div class="icon">
            <i class='bx bxs-city'></i>
            <i class='bx bxs-city'></i>
            </div>
            <span class="link hide">All</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="1">
            <div class="icon">
            <i class='bx bxs-business' ></i>
            <i class='bx bxs-business' ></i>
            </div>
            <span class="link hide">Buy</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="2">
            <div class="icon">
            <i class='bx bx-money'></i>
            <i class='bx bx-money'></i>
            </div>
            <span class="link hide">Rent</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="#open-modal" data-active="3">
            <div class="icon">
            <i class='bx bx-dollar' ></i>
            <i class='bx bx-dollar' ></i>
            </div>
            <span class="link hide">Upload</span>
          </a>
        </li>
        

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/face-1.png" alt="">
          <div class="admin-info">
            <h3>Logged In as</h3>
            <h5><?php include '../php/logmsg.php';?></h5>
          </div>
        </div>
        <a href="http://localhost/Realestate/php/logout.php" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show">Open</span>
        <span></span>
      </div>
    </div>
</div>
  </nav>


  <main>
    <h1 class="tophead">Explore-Real Estates</h1>
    <p class="textmain">
    </p>
     
      <div id="open-modal" class="modal-window">
        <div class="opencard">
        <a href="#" title="Close" class="modal-close">Close</a>
        <div id="content">
          <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-body">
            <div class="text">
            <label for="name">Enter Your name:</label><br>
            <input type="text" name="name" required maxlength="15"><br>
            </div>
            <div class="text">
            <label for="add">Enter Property Address:</label><br>
            <input type="text" name="add" required maxlength="100"><br>
            </div>
            <div class="text">
            <label for="City">Enter City:</label><br>
            <input type="text" name="city" required maxlength="30"><br>
            </div>
            <div class="text">
            <label for="State">Enter State:</label><br>
            <input type="text" name="state" required maxlength="20"><br>
            </div>
            <div class="text">
            <label for="contact">Enter Your Contact Details Phone No./Email:</label><br>
            <input type="text" name="contact" required maxlength="30"><br>
            </div>
            <div class="text">
            <label for="area">Enter Area:</label><br>
            <input type="text" name="area" required maxlength="10"><br>
            </div>
            <div class="text">
            <label for="price">Enter Your Selling Price:</label><br>
            <input type="text" name="price" required maxlength="10"><br>
            </div class="button-upload">
            <div class="text">
            <label for="images">Upload-Property-Image:</label><br>
            <input type="file" name="image" required><br>
            </div>
            <div class="text">
            <label for="desc">Desc:</label><br>
            <textarea name="desc" cols="40" rows="4" placeholder="Write a desc...." required maxlength="250"></textarea>
            </div>
            </div class="button-upload">
            <input type="submit" name="submit" value="Upload">
             </div>
          </div>
           </div>
        </form>
           </div>
          </div>
      </div>
      <div class="container" onclick="myFunction(this),myclick('toggle')">
      <div class="headtext">
     <div class="bar1"></div>
       <div class="bar2"></div>
        <div class="bar3"></div>
        </div>
        <div class="headtext"><p>Real Estate Explorer</p></div>
</div>
      <div href="#" class="btn btn-primary" id='toggle' style='display:none;'>
        <div class="navtop">
          <ul>
          <h3>Logged In as</h3>
          <h5><?php include '../php/logmsg.php';?></h5>
          <li>
          
          <a class="toptext"  href=""><i class='bx bxs-city'></i><p>All</p></a>
          </li>
          <li>
          <a class="toptext" href=""><i class='bx bxs-business' ></i><p>Buy</p></a>
           </li>
           <li>
             
          <a class="toptext" href=""><i class='bx bx-money'></i>Rent</a>
            </li>
            <li>
          <a class="toptext" href="#open-modal"><i class='bx bx-dollar' ></i><p>Upload</p></a>
             </li>

             <li>
          <a class="toptext" href="http://localhost/Realestate/php/logout.php"><i class='bx bx-log-out'></i><p>Logout</p></a>
             </li>

          </ul>
           <script>
            function myclick(id) {
                var x = document.getElementById(id);
                x.className = x.className !== 'show' ? 'show' : 'hide';
                if (x.style.display === "none"){
                     x.style.display = "block";
                           } 
                    else {
                      x.style.display = "none";
                             }
                                 }

                     //e.style.display = ((e.style.display!='none') ? 'none' : 'block'); 
            
                          function myFunction(x) {
                          x.classList.toggle("change"); 
                        }

          
       </script>
         
          </div>
          <div class="navside">
          <a href="#">Explore</a>
          </div>
      </div>
      

<div class="projcard-container">


<?php include '../php/main.php';?>
<?php include '../php/upload.php';?>

    </div>
    
    <script src="../js/sidebar.js"></script>




    <footer class="footer">
      <div class="containerf">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#open-modal2">about me</a></li>
              <li><a href="#serv">our services</a></li>
              <li><a href="#">Apply For <br>Broker account</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>pages</h4>
            <ul>
              <li><a href="admin.php">Admin</a></li>
              <li><a href="#">Contact us</a></li>
             
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-twitter'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-github'></i></a>
            </div>
          </div>
        </div>
      </div>
   </footer>

   <div id="open-modal2" class="modal-window">
    <div class="opencard">
    <a href="#" title="Close" class="modal-close">Close</a>
      <h class="hmodal">About Me</h>
      <div id="contentabut">
        <i class='bx bx-user-circle'></i>
      <p><br><br>Hello All!<br> Myself Shobhit Gupta a computer science Engineering 2nd year student made this website to make dealings of Real estates easy via internet </p> 
      </div>
  </div>
  </div>
   
</body>
</html>

