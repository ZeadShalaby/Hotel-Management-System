<?php
session_start();
$email=$_SESSION['email'];
include "conection0.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="customer000.css" rel="stylesheet">
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
$email0=$email;
}}
?>
    <nav>
    <div class="topnav" id="navbar">
      <span id="fox">Customer </span>
     <img src="image/f4.jpg" id="logo" alt="logo">
     <span id="ffox">Page</span>
   <form  action="" method="post">
     
      
      <img src="image/user1.png"style="border-radius: 100px ;width: 60px;margin-left: 4.7rem;margin-top: -50px;margin-left: 82rem;">
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
 <button name = "delete" id="b1"><i class="fa fa-trash" style="font-size: 25px;"></i></button>
   <a href="http://localhost/Project%20Hotel/Home.php"><i class="fa fa-power-off"style="font-size: 35px; margin-left: 2.7rem;"></i></a>


 </div>
 </div>
 
 
 <span id="p" style="font-size:20px; cursor:pointer" onclick="openNav()">&#9776;</span>
 
<form action="" method="post">

<div class="user">
<div class="wrapper">
  <div class="outer">
    <div class="card" style="--dealy:-1;">
      <div class="content">
        <div class="img"><img src="image/gr.jpg"></div>
        <div class="details">
          <span class="name">mostafa soliman</span>
          <p>Zoompaa class 1 oclock</p>
        </div>
      </div>
     <?php 

      $count1=0;
      $coun1=0;
      $res=mysqli_query($db,"SELECT email,class FROM `clases` WHERE email='".$_SESSION['email']."';");
      while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='Zoompaa'){
      $count1=$count1+1;}
      else{$count1=0;}
      if($row['email']==$_SESSION['email']){
        $coun1=0;
      }
      else{$coun1=$coun1+1;}
 }

    if((isset($_POST['Zoompaa'])&&$coun1!=0)||($count1 !=0)){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Zoompaa"  id="zo" onclick="myFunction()">registrar</button>';
}
  
    ?>


    </div>

    <div class="card" style="--dealy:0;">
      <div class="content">
        <div class="img"><img src="image/gr.jpg"></div>
        <div class="details">
          <span class="name">Shivam Androw</span>
          <p>Judo class morning </p>
        </div>
      </div>
       <?php 
      $count2=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
       while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='Judo'){
      $count2=$count2+1;}
      else{$count2=0;}
 }
    if((isset($_POST['Judo'])&&$coun1!=0)||$count2!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Judo"  id="zo1" onclick="myFunction1()">registrar</button>';
}
  
  

    ?>


    </div>

    <div class="card" style="--dealy:1;">
      <div class="content">
        <div class="img"><img src="image/gr.jpg"></div>
        <div class="details">
          <span class="name">monaka tokail</span>
          <p>Dancer master </p>
        </div>
      </div>
      <?php 
      $count3=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
       while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='Dancer master'){
      $count3=$count3+1;}
      else{$count3=0;}
 }

    if((isset($_POST['Dancer'])&&$coun1!=0)||$count3!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Dancer"  id="zo2" onclick="myFunction2()">registrar</button>';
}
  
  

    ?>


    </div>

    <div class="card" style="--dealy:2;">
      <div class="content">
        <div class="img"><img src="image/gr.jpg"></div>
        <div class="details">
          <span class="name">Anaa lores</span>
          <p>coock for us. </p>
        </div>
      </div>
          
     <?php 
      $count4=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
        while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='coock'){
      $count4=$count4+1;}
      else{$count4=0;}
 }

    if((isset($_POST['coock'])&&$coun1!=0)||$count4!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="coock"  id="zo3" onclick="myFunction3()">registrar</button>';
}
  
  

    ?>


    </div>

    <div class="card" style="--dealy:2;">
      <div class="content">
        <div class="img"><img src="image/gr.jpg"></div>
        <div class="details">
          <span class="name">Jasmine Joosef</span>
          <p>Gaming & Story</p>
        </div>
      </div>
          
    <?php 
      $count5=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
          while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='Gaming & Story'){
      $count5=$count5+1;}
      else{$count5=0;}
 }

    if((isset($_POST['Gaming'])&&$coun1!=0)||$count5!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Gaming"  id="zo4" onclick="myFunction4()">registrar</button>';
}
  
  

    ?>


    </div>
  </div>
</div>

</div>




<div class="user2">
<div class="wrapper0">
  <div class="outer0">
    <div class="card0" style="--dealy:-1;">
      <div class="content0">
        <div class="img0"><img src="image/Ggr.jpg"></div>
        <div class="details0">
          <span class="name0">manar salama</span>
          <p>physical therapy /w </p>
        </div>
      </div>
    <?php 
      $count6=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
           while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='physical therapy /w'){
      $count6=$count6+1;}
      else{$count6=0;}
 }


    if((isset($_POST['therapy'])&&$coun1!=0)||$count6!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="therapy"  id="zo5" onclick="myFunction5()">registrar</button>';
}
  
  

    ?>
    </div>

    <div class="card0" style="--dealy:0;">
      <div class="content0">
        <div class="img0"><img src="image/Ggr.jpg"></div>
        <div class="details0">
          <span class="name">lobna yaser </span>
          <p>Jacuzzi All</p>
          
        </div>
      </div>
    <?php 
      $count7=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
      while($row=mysqli_fetch_assoc($res)){
      if($row['class']=='Jacuzzi All'){
      $count7=$count7+1;}
      else{$count7=0;}
 }

    if((isset($_POST['Jacuzzi'])&&$coun1!=0)||$count7!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Jacuzzi"  id="zo6" onclick="myFunction6()">registrar</button>';
}
  
  

    ?>
    </div>

    <div class="card0" style="--dealy:1;">
      <div class="content0">
        <div class="img0"><img src="image/Ggr.jpg"></div>
        <div class="details0">
          <span class="name0">nour Showkey</span>
          <p>All Futsal games</p>
        </div>
      </div>
    <?php 
      $count8=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
      while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='All Futsal games'){
      $count8=$count8+1;}
      else{$count8=0;}
 }

    if((isset($_POST['Futsal'])&&$coun1!=0)||$count8!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Futsal"  id="zo7" onclick="myFunction7()">registrar</button>';
}
  
  

    ?>
    </div>

    <div class="card0" style="--dealy:2;">
      <div class="content0">
        <div class="img0"><img src="image/Ggr.jpg"></div>
        <div class="details0">
          <span class="name">Anav Bisht</span>
          <p> Hotel Stars</p>
        </div>
      </div>
    <?php 
      $count9=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
      while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='Hotel Stars'){
      $count9=$count9+1;}
      else{$count9=0;}
 }

    if((isset($_POST['Hotel'])&&$coun1!=0)||$count9!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="Hotel"  id="zo8" onclick="myFunction8()">registrar</button>';
}
  
  

    ?>
    </div>

    <div class="card0" style="--dealy:2;">
      <div class="content0">
        <div class="img0"><img src="image/Ggr.jpg"></div>
        <div class="details0">
          <span class="name">marcello Bisht</span>
          <p>physical therapy men </p>
        </div>
      </div>
      <?php 
      $count10=0;
      $res=mysqli_query($db,"SELECT * FROM `clases` WHERE email='".$_SESSION['email']."';");
      while($row=mysqli_fetch_assoc($res)){
        if($row['class']=='physical for men'){
      $count10=$count10+1;}
      else{$count10=0;}
 }

    if((isset($_POST['physical'])&&$coun1=!0)||$count10!=0){
     echo '<img src="image/tr.png" id="imgg">';
     echo '<input type="submit" name="close" value="&times;">';
   }

    else{
  
 echo'<button name="physical"  id="zo9" onclick="myFunction9()">registrar</button>';
}
  
  

    ?>
    </div>
  </div>
</div>

</div>




</form>


</body>

<!--java script-->

<script src="js/customer.js">
  
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



            if(isset($_POST['delete']))
           {
              ?>
<script>
  alert("Your Deleted Your Account Are You Sure.")
</script>
              <?php
                mysqli_query($db,"DELETE FROM `account` where email='".$_SESSION['email']."';");
                ?>
                <script type="text/javascript">
                  window.location="login.php";
                </script>
                <?php

}

if(isset($_POST['Zoompaa']))
{
  $clases='Zoompaa';
  $name1=$name." ".$lname;
  $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
     mysqli_query($db,$sql);

 
}
elseif (isset($_POST['Judo'])) {
 $clases='Judo';
 $name1=$name." ".$lname;
 $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);
}
elseif (isset($_POST['Dancer'])) {
 $clases='Dancer master';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['coock'])) {
 $clases='coock';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['Gaming'])) {
 $clases='Gaming & Story';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['therapy'])) {
  echo "'kdkdkdk";
  $path='image/tr.png';
 $clases='physical therapy /w';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['Jacuzzi'])) {
 $clases='Jacuzzi All';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['Futsal'])) {
 $clases='All Futsal games';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['Hotel'])) {
 $clases='Hotel Stars';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}
elseif (isset($_POST['physical'])) {
 $clases='physical for men';
  $name1=$name." ".$lname;
    $sql = " INSERT INTO `clases`( `name`, `email`, `class`) VALUES ('$name1','$email','$clases')";
  mysqli_query($db,$sql);

}

if(isset($_POST['close']))
{
mysqli_query($db,"DELETE FROM `clases` where email='".$_SESSION['email']."';");
?>
<script>
  window.location="customer.php"
</script>
<?php

}

?>


