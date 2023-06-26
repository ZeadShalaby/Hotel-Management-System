<?php
include "conection0.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="forget00.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" https://icons8.com/icon/ejub91zEY6Sl/chrome">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <title>Home_Hotel_Fox</title>
</head>
<body>
    <nav>
    <div class="topnav" id="navbar">
     <img src="image/f4.jpg" id="logo" alt="logo">
     <p id="fox">Fox Hotel</p>
      <a href="http://localhost/Project%20Hotel/login.php"><i class="fa fa-sign-in" aria-hidden="true" style="margin-right:0.4rem"></i>Login/Sign-up</a> 
      <a href="http://localhost/Project%20Hotel/Checkout.php"><i class='fa fa-money' style="color:green;margin:5px"></i>Checkout</a>  
      <a href="http://localhost/Project%20Hotel/reservations.php"><i class="fa fa-hourglass-start" style="margin-right: 0.4rem;"></i>reservations</a>
      <a href="http://localhost/Project%20Hotel/ShowRoom.php"><i class="fa fa-bed" style="margin:5px";></i>Show Rooms</a>
      <a href="http://localhost/Project%20Hotel/Home.php" class="active"><i class="fa fa-fw fa-home" ></i> Home</a>
    </div>
    </nav>
    <div class="main">
      <div class="container">
        <div class="wrapper">
          <header>Forgot password</header>
          <form action=" " method="post">
            <div class="field email">
              <div class="input-area">
                <input  name ="emaill" type="text" placeholder="Email Address">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input name ="pass1" type="password" placeholder="Last Password">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Password can't be blank</div>
            </div>

            <input name="submitt" type="submit" value="forget">
</form>
          
          <div class="sign-txt">Not yet member? <a href="http://localhost/Project%20Hotel/login.php">Signup now</a></div>
        </div>             
      </div>
    </div>
    
</body>

<!-----java script----->
<script src="js/forget0.js"></script>
<!--finaly javascript-->
  
<footer>
<br><br><br>

    <p id="Fox">Fox Hotel</p>

   <div class="footimg">
    <img src="image/back.png" alt="Avatar" class="image">
   <div class="overlay0"></div>

   <div class="overlay">

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
$pass=$_POST['pass1'];
$email=$_POST['emaill'];
echo $email." ".$pass;
/*
 if(isset($_POST['submitt']))
{

        

    
        $count=0;
        $passold=0;
        $res=mysqli_query($db,"SELECT * FROM `account`WHERE email='$_POST[email]';");
        $res2=mysqli_query($dp,"SELECT * FROM `` where pass='$_POST[pass]'&& email='$_POST[email]';"); trigger*/
       /* $name=mysqli_query($db,"SELECT fname FROM `account`WHERE email='$_POST[email]';");
        $count=mysqli_num_rows($res);
     /*   $passold=mysqli_num_rows($res2);*/
        /*if(($count!=0)/*&&($passold!=0))*/
        /*{
          ?>
           <script type="text/javascript">
           alert('<?php 
            echo 'dd';
            

          ?>');
           </script>
         <?php
      mysqli_query($db,"UPDATE `account` SET pass='$_POST[pass]' WHERE email='$_POST[email]' ;");
         
     /*  ?>
           <script type="text/javascript">
             window.location="customer.php"
           </script>
        <?php  
        */
        /*}*/
/*else{
         ?>
           <script type="text/javascript">
           alert("Wrong username or password not found");
           </script>
        <?php
} 
      }
*/

  ?>
