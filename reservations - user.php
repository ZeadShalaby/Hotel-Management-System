<?php
session_start();
$email=$_SESSION['email'];
if(isset($_POST['Reserve'])){
$_SESSION['numroom']=$_POST['numroom'];
}
include "conection0.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="reservations -user00.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" https://icons8.com/icon/ejub91zEY6Sl/chrome">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <title>reservations_Hotel_Fox</title>
</head>
<body>
    <?php
if($email)
{
$sql = "SELECT fname,lname FROM `account` WHERE email='".$_SESSION['email']."';";
$res=mysqli_query($db,$sql);
   while ($row=mysqli_fetch_assoc($res)) {           
$name= $row["fname"]; 
$lname=$row["lname"];
}}
?>
    <nav>
      <div class="topnav" id="navbar">
        <span id="fox">Customer </span>
       <img src="image/f4.jpg" id="logo" alt="logo">
       <span id="ffox">Reservations</span>
      <span id="p" style="font-size:30px; cursor:pointer" onclick="openNav()"><i class="fa fa-gears" style="font-size: 35px;"></i></span>
    <form  action="" method="post">
     
      <img src="image/user1.png"style="border-radius: 100px ;width: 60px;margin-left: 83rem;margin-top: -100px;">
      <span id="ff" style="color:red; margin-left: 0.4rem;"><?php echo $name." ".$lname;?></span>

    </form>

      </div>
      </nav>
    </div>
  
    <div id="myNav" class="overlay3">
  
      <a href="javascript:void(0)" class="closebtn" id="close" onclick="closeNav()">&times;</a>
      <div class="overlay3-content">
        <img src="image/user.png" alt="staff" id="im-staff"  style="font-size: 0px;">
        
        <a href="http://localhost/Project%20Hotel/customer.php" class="active"><i class="fa fa-fw fa-home" style="font-size: 45px;margin-left: 2rem;"></i></a>
        <a href="http://localhost/Project%20Hotel/customer%20-info.php"> <i class="fa fa-drivers-license-o" style="font-size: 35px; margin-left: 2.5rem;"></i></a>
       <a href="http://localhost/Project%20Hotel/checkout%20-user.php"><i class="fa fa-fw fa-envelope"style="font-size: 40px; margin-left: 2.1rem;"></i></a>
       <a href="http://localhost/Project%20Hotel/reservations%20-%20user.php"><i class="fa fa-cart-arrow-down" style=" font-size: 35px;margin-left: 2.5rem;"></i></a>
       <a href="http://localhost/Project%20Hotel/Home.php"><i class="fa fa-power-off"style="font-size: 35px; margin-left: 2.7rem;"></i></a>
     </div>
    
   </div>
   
  
      <div class="modal clearfix">
        <div class="modal-product">
          <div class="product">
    
            <!-- Slideshow container -->
            <div class="product-slideshow">
    
              <!-- Full-width images with number and caption text -->
              <div class="productSlides fade">
                <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-1.png?raw=true" style="width:100%">
              </div>
    
              <div class="productSlides fade">
                <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-2.png?raw=true" style="width:100%">
              </div>
    
              <div class="productSlides fade">
                <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-3.png?raw=true" style="width:100%">
              </div>
    
              <div class="productSlides fade">
                <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-4.png?raw=true" style="width:100%">
              </div>
    
              <div class="productSlides fade">
                <img src="https://github.com/EricGFigueroa/002-DailyUI-Gucci-Checkout/blob/master/img/gucci-bag-5.png?raw=true" style="width:100%">
              </div>
    
              <br>
    
              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
              </div>
    
            </div>
    
            <h1 class="product-name">
              Gucci Tian GG<br>Supreme Backpack
            </h1>
            <p class="product-code-name">
              Style ‎428027 K0LCN 8685
            </p>
            <p class="product-price">
              $1,590
            </p>
    
          </div>
    
          <div class="round-shape"></div>
        </div>
        <div class="modal-info">
          <div class="info">
            <h2>Payment Information</h2>
          
          <form action=" " method="post">

            <ul class="form-list">
              <li class="form-list-row">
                <div class="user">
                <label for="#">Name</label> <label id="l0">LName</label><br>
                <input name ="fname" type="text"placeholder="sscsc" required> 

                <input name="lname" class="user1"type="text"placeholder="sscsc"  required>
                </div>
               
              </li>
              <br>
              <li class="form-list-row">
                <div class="number">
                  <label for="#">Card Number  </label><label id="l1"for="#">Floor</label><br>
                 <input  name ="card number" type="text" placeholder=" 123" required>
                
                  <input name="room" class="number1"type="text"placeholder="1" required >
                 
                </div>
              </li>
              <br>
               <li class="form-list-row clearfix">
                <div class="date">
                  <label for="#" style="top:10px">NumRoom</label><br><label id="l2" style="margin-left:18rem">AGE</label><br>
                  <input name="numroom" type="text" required placeholder="123">
                  
                  <input name="age" class="year" type="text" required placeholder="+20">
                </div>
              
                <div class="cvc">
                  <br>
                  <label for="#" style="margin-left:1.2rem"> Date</label> 
                  <br>
                 <input name="date" class="month" type="date" required style="margin-left:2rem;color: red;">
                </div>
              </li>
              <li class="form-list-row">
                <div class="checkbox">
                  <label for="checkbox">
                    <input id="checkbox" type="checkbox">
                    <span>Remember My Information</span>
                  </label>
                </div>
              </li>
            </ul>
          
           <input id="button" type="submit" name="Reserve" value="Reserve" style="margin-left: 14rem;">

          </form>
          </div>
        </div>
      </div>
  
      
  </body>
  
  <!--java script-->
  
  <script src="js/reservations -user.js">
 
  
  </script>
  
  <footer>
  <br><br><br>
      <p id="Fox">Fox Hotel</p>
  
     <div class="footimg">
      <img src="image/back.png" alt="Avatar" class="image">
     <div class="overlay0" style=" top: 114%;"></div>
  
     <div class="overlay"style=" top: 114%;">
  
      <br><br>
      <div class="footer">
        <div class="contain">
        <div class="col">
          <h2>Company</h2>
          <ul>
            <li>About us</li>
            <li> Our Mission</li>
            <li>Services</li>
          </ul>
        </div>
        <div class="col">
          <h2>Products</h2>
          <ul>
            <li>SEO</li>
            <li>Content Development</li>
            <li>Digital Marketing</li>
          </ul>
        </div>
        <div class="col">
          <h2>Team</h2>
          <ul>
            <li>HR Team</li>
            <li>Finance Team</li>
            <li>Content Team</li>
          </ul>
        </div>
        <div class="col">
          <h2>Resources</h2>
          <ul>
            <li>Webmail</li>
            <li>Web templates</li>
            <li>Email templates</li>
          </ul>
        </div>
        <div class="col">
          <h2>Contact</h2>
          <ul>
            <li><i class="fa-solid fa-phone-volume" style="color: deepskyblue;"></i> +91 9051 XXXXXX</li>
            <li>033 2464 XXXX</li>
            <li><i class="fa fa-comment-dots"></i> abc@gmail.com</li>
          </ul>
        </div>
        <div class="col address">
          <h2>Address </h2>
          <ul>
            <li>Sky Towers, Service Road, Kolkata</li>
            <li>Service Room in Time</li>
        </ul>
        </div>
      <div class="clearfix"></div>
      </div>
      
      </div>
  
  <!--icon in overlay social-->
      
  <div class="footerr">
  
    <div class="foxx"><a href="#"> <BUTTon id="B1">FOLLOW US</BUTTon> </a>></div>
    <div class="foxx1"></span><span style="color: orange;"> Zead</span><span style="color: rgb(49, 191, 248);"> Shalaby</span>></div>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <div class="foxx2"></span><span style="color: rgb(255, 153, 0);">Reser</span><span style="color: rgb(0, 191, 255);">vations</span>
         <span style="color: orange;">In</span> <span style="color: rgb(0, 191, 255);"> Hotel</span>
         <ul>
          <br>
          <li><img src="image/wester.jpg" alt="wester"id="image0" style="width: 20.5%;"><img src="image/visa.jpg" alt="visa"id="image0" style="width:18% ;"><img src="image/skril2.jpg" alt="skril" id="image0"style="width: 21.5%;"><img src="image/pay0.jpg" alt="paypal"id="image0">
          </li>
         </ul>
        </div>
        <div class="foxx3"></span><span style="color: rgb(255, 153, 0);">Call</span><span style="color: rgb(0, 191, 255);"> Us</span>
          <span style="color: orange;">In Hotel</span> <span style="color: rgb(0, 191, 255);"> Today</span>
          <ul>
          <li><i class="fa fa-phone" style="width:20px;font-size: 16px;"></i> 01xxxxxxxx</li>
            <li><i class='fa fa-fw fa-envelope' style="color: rgb(0, 229, 255);"></i> abcd@hotel.com</li>
            <li><i class='fa fa-fw fa-envelope' style="color: brown;"></i>Fox Hotel@hotel.fox</li>
          </ul>
         </div>
        <div class="footer-copyright">
        <!-- <p>copyright &copy;2022 </p>--> 
        </div>
    </div>
  </div>
  <!--icons social-->>
  <div id="line"></div>
  <br> <br>
     <div id="icon" style="color: rgb(0, 0, 0);">
      <a href="https://www.facebook.com/" target="_blank" style="color: rgb(2, 17, 188);">
          <ion-icon name="logo-facebook"></ion-icon>
      </a>
      <a href="https://www.instagram.com/" target="-blank" style="color: rgb(212, 35, 29)">
          <ion-icon name="logo-instagram"></ion-icon>
      </a>
      <a href="https://talk.brave.com/widget" target="_blank">
        <img src="icon/icons8-brave-web-browser-48.png" alt="brave" id="icons0">
  
      <a href="https://twitter.com/" target="_blank" style="color: rgb(53, 154, 172);">
          <ion-icon name="logo-twitter"></ion-icon>
      </a>
  
      <a href="https://www.google.com/" target="_blank" style="color: rgb(233, 200, 10);">
          <ion-icon name="logo-google"></ion-icon>
      </a>
      <a href="https://https://www.meta.com/help/quest/articles/headsets-and-accessories/oculus-link/meta-quest-link-compatibility/" target="_blank">
        <img src="icon/meta.png" alt="brave" id="icons0">
    
    </a>
     
      <img src="image/f0.jpg" alt="logo down" id="logodownL">
      <img src="image/ff0.jpg" alt="logo down" id="logodownR">
    
    </div>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </footer>
  
  </html>

  <?php

      if(isset($_POST['Reserve']))
      {
        $count=0;
        $sql="SELECT numroom from `info`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['numroom']==$_POST['numroom'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `info` VALUES('$_POST[fname]', '$_POST[lname]','$_POST[card_number]', '$_POST[room]', '$_POST[date]','$_POST[age]','$_POST[numroom]');");
        ?>
          <script type="text/javascript">
           alert("reserve successful");
          </script>
        <?php
       
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("reserve alredy done");
            </script>
          <?php

        }

      }

    ?>
