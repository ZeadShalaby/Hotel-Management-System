<?php
header("HTTP/1.0 404 Not Found");
session_start();
if(isset($_POST['login'])){
$_SESSION['pass']=$_POST['pass'];
$_SESSION['email']=$_POST['email'];
$gender=$_POST['radio1'];
}

include "conection0.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="login00.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" https://icons8.com/icon/ejub91zEY6Sl/chrome">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <title>Login_Hotel_Fox</title>
</head>
<body>

    <nav>
    <div class="topnav" id="navbar">
     <img src="image/f4.jpg" id="logo" alt="logo">
     <p id="fox">Fox Hotel</p>
      <a href="http://localhost/Project%20Hotel/login.php"><i class="fa fa-sign-in" aria-hidden="true" style="margin-right:0.4rem"></i>Login/Sign-up</a> 
      <a href="http://localhost/Project%20Hotel/Checkout.php"><i class='fa fa-money' style="color:green;margin:5px"></i>Checkout</a>  
      <a href="http://localhost/Project%20Hotel/reservations.php"><i class="fa fa-hourglass-start" style="margin-right: 0.4rem;"></i>reservations</a>
      <a href="http://localhost/Project%20Hotel/ShowRoom.php"><i class="fa fa-bed"style="margin:5px"></i>Show Rooms</a>
      <a href="http://localhost/Project%20Hotel/Home.php"><i class="fa fa-fw fa-home" ></i> Home</a>
    </div>
    </nav>    

        <form action="" method="post">

    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup">Sign up</h2>
            <div class="form-holder">
                <input type="text" class="inp" name = "fname" placeholder="FName" required pattern="[A-Z]{1}[A-Za-z]+" />
                <input type="text" class="inp" name = "lname"  placeholder="LName"required pattern="[A-Z]{1}[A-Za-z]+" /><br><br><br>
                <input type="email" class="inp1" name = "email"  placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@fox\.com$"/>
                <input type="text" class="inp1" name = "phone"  placeholder="Phone" required pattern="01[0-2]{1,}[0-9]{8,}||01[5]{1,}[0-9]{8,}" /><br><br><br>
                <input type="password"class="inp2" name = "pass"  placeholder="Password"required pattern="[0-9]+" />
                <input type="password" class="inp2" name = "pass2"  placeholder="Retern-Password" required pattern="[0-9]+"/><br>
                <br>
               <div class="ll" >
                <label><input name="radio" type="Checkbox" class="radio color-primary" value="customer" checked/> customer</label>
     
               </div>
              </div>
          <input type="submit" name="Signup" class="submit-btn" value="Sign up">

        </div>
      </form>
        <form action="" method="post">
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">Log in</h2>
                <div class="form-holderr">
                    <input name = "email" type="email" class="input" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@fox\.com$"required 
                    value="<?php if(isset($_POST['login'])&&($gender=='')){  echo $_SESSION['email'];}?>" />
                    <input name = "pass" type="password" class="inputt"  placeholder="Password" required pattern="[0-9]+" 
                    value="<?php if(isset($_POST['login'])&&($gender=='')){  echo $_SESSION['pass'];}else{echo "";}?>"/>
                </div>
                <br>
                <div class="ll">
                  <label><input name="radio1" type="radio" class="radio color-primary" value="Admin" /> Admin</label>
                  <label><input name="radio1" type="radio" class="radio color-secondary" value="Staf" /> Staf</label>
                  <label><input name="radio1" type="radio" class="radio color-info" value="customer" /> customer</label>
                 </div>
                 <br>
                 <div class="pass-txt"><a href="http://localhost/Project%20Hotel/forget.php">Forgot password?</a></div>
                 <input type="submit" name="login" class="submit-btn" value="login">
            </div>
        </div>
    </div>
</form>
  

</body>

<!--java script-->

<script src="js/login.js">

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
      <div class="fox2"><span style="color: rgb(255, 153, 0);">Reser</span><span style="color: rgb(0, 191, 255);">vations</span>
       <span style="color: orange;">In</span> <span style="color: rgb(0, 191, 255);"> Hotel</span>
       <ul>
        <br>
        <li><img src="image/wester.jpg" alt="wester"id="image0" style="width: 20.5%;"><img src="image/visa.jpg" alt="visa"id="image0" style="width:18% ;"><img src="image/skril2.jpg" alt="skril" id="image0"style="width: 21.5%;"><img src="image/pay0.jpg" alt="paypal"id="image0">
        </li>
       </ul>
      </div>
      <div class="fox3"><span style="color: rgb(255, 153, 0);">Call</span><span style="color: rgb(0, 191, 255);"> Us</span>
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


 if(isset($_POST['Signup']))
      {
        $count=0;
        $sql="SELECT lname from `account`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['lname']==$_POST['lname'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
 mysqli_query($db,"INSERT INTO `account`(`fname`, `lname`, `email`, `phone`, `pass`, `pass2`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[pass]','$_POST[pass2]');")      

   ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }}

   /*login*/   

     $gender=$_POST['radio1'];

     
   
        


      if(isset($_POST['login'])&&($gender=='Admin'))
      {


        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `admin`WHERE email='$_POST[email]'&& pass='$_POST[pass]';");
        $count=mysqli_num_rows($res);
        if(($count!=0))
        {

     ?>
           <script type="text/javascript">
             window.location="Admin.php"

           </script>
        <?php
        }
else{
         ?>
           <script type="text/javascript">
           alert("Wrong username or password");
           </script>
        <?php
}
      }

         elseif(isset($_POST['login'])&&($gender=='Staf'))
      {
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `staff`WHERE email='$_POST[email]'&& pass='$_POST[pass]';");
        $count=mysqli_num_rows($res);
        if(($count!=0))
        {
        ?>
           <script type="text/javascript">
             window.location="Staff.php"
           </script>
        <?php
        }
else{
         ?>
           <script type="text/javascript">
           alert("Wrong username or password");
           </script>
        <?php
}
      }

         elseif(isset($_POST['login'])&&($gender=='customer'))
      {
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `account`WHERE email='$_POST[email]'&& pass='$_POST[pass]';");
        $count=mysqli_num_rows($res);
        if(($count!=0))
        {
        ?>
           <script type="text/javascript">
             window.location="customer.php"
           </script>
        <?php
        }
else{
         ?>
           <script type="text/javascript">
           alert("Wrong username or password");
           </script>
        <?php
}
      }
        elseif(isset($_POST['login'])&&$gender=='')
        {

          ?>
           <script type="text/javascript">
           alert("Wrong choise gender");

                </script>
          <?php

        
        }
        



       

      
      






  /**if(isset($_POST['Signup']))
      {
        $var=$_POST['radio1'];
      
mysqli_query($db,"INSERT INTO `gen`(`gender`) VALUES ('$_POST[radio1]');");

 mysqli_query($db,"INSERT INTO `account`(`fname`, `lname`, `email`, `phone`, `pass`, `pass2`) VALUES ('$_POST[radio1]','$_POST[radio1]','$_POST[radio1]','$_POST[radio1]','$_POST[radio1]','$_POST[radio1]');")
          ?>
          <script type="text/javascript">
           alert(" work its good");
          </script>
        <?php
        }


----------------------------------------------------
     $gender=$_POST['radio1'];


      if(isset($_POST['login'])&&($gender=='Admin'))
      {
      

         
          ?>
          <script type="text/javascript">
           alert("successful work");
          </script>

        <?php
        }
        else{
            ?>
          <script type="text/javascript">
           alert("not good work");
          </script>

        <?php
        }*/
       
        
        ?>