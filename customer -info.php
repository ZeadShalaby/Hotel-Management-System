<?php
session_start();
$pass=$_SESSION['pass'];
$email=$_SESSION['email'];
include "conection0.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="customer -info000.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" https://icons8.com/icon/ejub91zEY6Sl/chrome">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <title>Home_Hotel_Fox</title>
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
     <span id="ffox">Information</span>
<form  action="" method="post">
     
      <img src="image/user1.png"style="border-radius: 100px ;width: 60px;margin-left: 83rem;margin-top: -100px;">
      <span id="ff" style="color:red; margin-left: 0.4rem;"><?php echo $name." ".$lname;?></span>

    </form>


    <span id="p" style="font-size:30px; cursor:pointer" onclick="openNav()"><i class="fa fa-gears" style="font-size: 35px;"></i></span>
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
 
 
 <span id="p" style="font-size:20px; cursor:pointer" onclick="openNav()">&#9776;</span>

 <?php
if($email){
$count=0;
$sql = "SELECT * FROM `account` WHERE email='".$_SESSION['email']."';";
$res=mysqli_query($db,$sql);
   while ($row=mysqli_fetch_assoc($res)) {           
$name= $row["fname"]; 
$lname=$row["lname"];
$email0=$row["email"];   
$phone=$row["phone"]; 
$pass0=$row["pass"];  
$pass2=$row["pass2"];                 
                       
           }}
           ?>
 
   <form action="" method="post">

    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup">Secrec Information</h2>
            <div class="form-holder">
               
                <input type="text" class="inp" name = "fname" placeholder="FName" required pattern="[A-Z]{1}[A-Za-z]+" value="<?php echo $name; ?>" />
                <input type="text" class="inp" name = "lname"  placeholder="LName"required pattern="[A-Z]{1}[A-Za-z]+" value="<?php echo $lname; ?>"/><br><br><br>
                <input type="email" class="inp1" name = "email"  placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@fox\.com$" value="<?php echo $email0;?>"/>
                <input type="text" class="inp1" name = "phone"  placeholder="Phone" required pattern="01[0-2]{1,}[0-9]{8,}||01[5]{1,}[0-9]{8,}" value="0<?php echo $phone; ?>"/><br><br><br>
                <input type="password"class="inp2" name = "pass"  placeholder="Password"required pattern="[0-9]+" value="<?php echo $pass0;?>" />
                <input type="password" class="inp2" name = "pass2"  placeholder="Retern-Password" required pattern="[0-9]+"value="<?php echo $pass2; ?>"/><br>
                <br>
               <div class="ll" >
                <label><input name="radio" type="Checkbox" class="radio color-primary" value="customer" checked/> customer</label>
     
               </div>
              </div>
          <input type="submit" name="save" class="submit-btn" value="Save">

        </div>
                </div>

      </form>

</body>

<!--java script-->

<script src="js/customer -info.js">
  
  </script>

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

if(isset($_POST['save']))
{
 mysqli_query($db,"UPDATE `account`SET fname='$_POST[fname]',lname='$_POST[lname]',phone='$_POST[phone]',pass='$_POST[pass]',pass2='$_POST[pass2]' WHERE email='".$_SESSION['email']."';");

 ?>
<script type="text/javascript">
             window.location="customer -info.php"
</script>
 <?php
}



/*
echo '<form action="" method="post">';

 echo  '<div class="form-structor">';
       echo '<div class="signup">';
           echo '<h2 class="form-title" id="signup">'; echo 'Sign up'; echo '</h2>';
           echo '<div class="form-holder">';
              echo "<input type='text' class='inp' name = 'fname' placeholder='FName' required pattern='[A-Z]{1}[A-Za-z]+' / value='<?php ?>'>";
              echo '<input type="text" class="inp" name = "lname"  placeholder="LName"required pattern="[A-Z]{1}[A-Za-z]+" />';
              echo '<br>';echo '<br>';echo '<br>';
              echo '<input type="email" class="inp1" name = "email"  placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@fox\.com$"/>';
              echo '<input type="text" class="inp1" name = "phone"  placeholder="Phone" required pattern="01[0-2]{1,}[0-9]{8,}||01[5]{1,}[0-9]{8,}"/>';
                echo '<br>';echo '<br>';echo '<br>';
                echo '<input type="password"class="inp2" name = "pass"  placeholder="Password"required pattern="[0-9]+" />';
                echo '<input type="password" class="inp2" name = "pass2"  placeholder="Retern-Password" required pattern="[0-9]+"/>';
                echo '<br>';
                echo '<br>';
                echo '<div class="ll">';
                echo '<label>';echo'<input name="radio" type="Checkbox" class="radio color-primary" value="customer" checked/>';
                echo 'customer';echo'</label>';
     
               echo '</div>';
              echo '</div>';
          echo '<input type="submit" name="Signup" class="submit-btn" value="save">';

        echo '</div>';
      echo '</form>';

    $_POST['fname']='Ass';*/

?>