<?php
include "conection0.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="Admin000.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" https://icons8.com/icon/ejub91zEY6Sl/chrome">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">

    <title>Admin_Hotel_Fox</title>
</head>
<body>
    <nav>
    <div class="topnav" id="navbar">
      <span id="fox" >Admin </span>

      <img src="image/z.png" style="width:69px" id="logo" alt="logo">
      <span id="ffox"> Pagee</span>

      <form  action="" method="post">
      <button name="search" id="b1"><i class="fa fa-search" style="font-size: 25px;"></i></button>
      <button name="delete" id="b"><i class="fa fa-trash" style="font-size: 25px;"></i></button>
      <input name="nstaf" type="text" class="inp" placeholder="name -Staff" />
    </form>
    <span id="p" style="font-size:30px; cursor:pointer" onclick="openNav()"><i class="fa fa-gears" style="font-size: 40px;"></i></span>
    </div>
    </nav>
  </div>



  <div id="myNav" class="overlay3">

   <a href="javascript:void(0)" class="closebtn" id="close" onclick="closeNav()" style="margin-left: 2rem;">&times;</a>
     <div class="overlay3-content">
      <img src="image/admin.png" alt="staff" id="im-staff" style="font-size: 90px;">
      
   <a href="http://localhost/Project%20Hotel/Admin.php" class="active"><i class="fa fa-fw fa-home" style="font-size: 45px;margin-left: -0.1rem;"></i></a>
   <a href="http://localhost/Project%20Hotel/Admin%20-%20info.php"> <i class="fa fa-drivers-license-o" style="font-size: 35px;margin: 13px; margin-left: 0.4rem;"></i></a>
     <form action="" method="post">
      <button name="reserve" id="bb"><i class="fa fa-fw fa-envelope" style="margin: 10px;margin-left: 4.3rem; font-size: 35px; "></i></button>
      <button name = "staf" id="bb"><i class="fa fa-cart-arrow-down" style="margin: 5px;margin-left: 4.5rem; font-size: 35px; "></i></button>
    </form>
      <a href="http://localhost/Project%20Hotel/sign%20up-staff.php"><i class="fa fa-user-plus" style="margin: 2px;margin-left: 0.5rem;font-size: 32px;"></i></a>
     <a href="http://localhost/Project%20Hotel/Home.php"><i class="fa fa-power-off" style="margin-left: 0.5rem;"></i></a>
   </div>
 </div>
 
 
 <span id="p" style="font-size:20px; cursor:pointer" onclick="openNav()">&#9776;</span>
 

 
</body>

<!--java script-->

<script src="js/admin0.js"> </script>

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
          <li><i class=""></i> abc@gmail.com</li>
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
          <li><i class="fa-light fa-phone"></i> 01xxxxxxxx</li>
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
if(!isset($_POST['delete'])&&!isset($_POST['search'])&&!isset($_POST['reserve'])&&!isset($_POST['staf'])){
  echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';
}

/*Delete*/

if(isset($_POST['delete'])&&$_POST['nstaf']=="")
{
  ?>
  <script>
    alert("Write Something first.")
  </script>
  <?php
    echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';

}

            if(isset($_POST['delete']))
           {
      $count=0;     
      $sql="SELECT name from `staff`";
      $res=mysqli_query($db,$sql);

       while($row=mysqli_fetch_assoc($res))
        {
          if($row['name']==$_POST['nstaf'])
        {
            $count=$count+1;
           mysqli_query($db,"DELETE FROM`staff` where name='$_POST[nstaf]';");
         
            }
  }

 if($count==0)
        {

      $con=0;
      $sql1="SELECT numroom from `info`";
      $res1=mysqli_query($db,$sql1);

      while($row=mysqli_fetch_assoc($res1))
      {
     if($row['numroom']==$_POST['nstaf'])
    {
       $con=$con+1;
       mysqli_query($db,"DELETE FROM`info` where numroom='$_POST[nstaf]';");

 ?>
          <script type="text/javascript">
          alert("Deleted Sucsesfuly")
          </script>
          <?php
            echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';

     
      }}
if($con==0&&$_POST['nstaf']!=""){
         ?>
            <script type="text/javascript">
              alert("Not Found Please Try Again");
            </script>
          <?php
            echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';

       
  }  } 
      

        else{
          ?>
          <script type="text/javascript">
          alert("Deleted Sucsesfuly")
          </script>
          <?php
            echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';

        }
}

/*search*/


  if(isset($_POST['search'])&&$_POST['nstaf']!="")
      {
        $count=0;
        $num=$_POST['nstaf'];
        $re=mysqli_query($db,"SELECT * FROM `info` WHERE numroom='$_POST[nstaf]';");
        $count=mysqli_num_rows($re);
        if($count==0)
        { 
        $con=0;
        $re=mysqli_query($db,"SELECT * FROM `staff` WHERE name ='$_POST[nstaf]';");
  
               

            while($row=mysqli_fetch_assoc($re))
            {
               if($row['name']==$_POST['nstaf']){
                $con=$con+1;
              echo "<table id='customer' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "Staf Name"; echo "</th>";
                echo "<th>"; echo "Staf Email";  echo "</th>";
                echo "<th>"; echo "Staf password";  echo "</th>";
                echo "<th>"; echo "by Admin";  echo "</th>";
                echo "<th>"; echo "Admin contact";  echo "</th>";
            echo "</tr>";


                echo "<tr>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['email']; echo "</td>";
                echo "<td>"; echo $row['pass']; echo "</td>";
                echo "<td>"; echo 'Zead Shalaby'; echo "</td>";
                echo "<td>"; echo '01*530*****'; echo "</td>";

                echo "</tr>";
            }


          }
        echo "</table>";

        if($con==0&&$_POST['nstaf']!=""){
  ?>
  <script>
  alert("Not Found Checked your Writen.")
  </script>
  <?php
    echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';

}
        }

      
       else
        {
          
                  echo "<table id='customer' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "First Name"; echo "</th>";
                echo "<th>"; echo "Last Name";  echo "</th>";
                echo "<th>"; echo "Card_Number";  echo "</th>";
                echo "<th>"; echo "Floor";  echo "</th>";
                echo "<th>"; echo "Data";  echo "</th>";
                echo "<th>"; echo "Age";  echo "</th>";
                echo "<th>"; echo "numroom";  echo "</th>";
           
            echo "</tr>";   

    while($row=mysqli_fetch_assoc($re))
            {
                echo "<tr>";
                echo "<td>"; echo $row['fname']; echo "</td>";
                echo "<td>"; echo $row['lname']; echo "</td>";
                echo "<td>"; echo $row['card_number']; echo "</td>";
                echo "<td>"; echo $row['room']; echo "</td>";
                echo "<td>"; echo $row['date']; echo "</td>";
                echo "<td>"; echo $row['age']; echo "</td>";
                echo "<td>"; echo $row['numroom']; echo "</td>";
               
                echo "</tr>";
            }
        echo "</table>";
         

        }}

      

      if(isset($_POST['search'])&&$_POST['nstaf']=="")
      {
     ?>
<script>
  alert("Write Something First.")
</script>
     <?php
       echo '<div id="boma"><img src="image/boma.jpg" alt="boma" id="boma0"></div>';

      }



  
   
/*Staff*/

if(isset($_POST['staf'])){




  
        $res=mysqli_query($db,"SELECT * FROM `staff`");


            echo "<table id='customer' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "Staf Name"; echo "</th>";
                echo "<th>"; echo "Staf Email";  echo "</th>";
                echo "<th>"; echo "Staf password";  echo "</th>";
                echo "<th>"; echo "by Admin";  echo "</th>";
                echo "<th>"; echo "Admin contact";  echo "</th>";
            echo "</tr>";   

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['email']; echo "</td>";
                echo "<td>"; echo $row['pass']; echo "</td>";
                echo "<td>"; echo 'Zead Shalaby'; echo "</td>";
                echo "<td>"; echo '01*530*****'; echo "</td>";

                echo "</tr>";
            }
        echo "</table>";

/*reseve*/
           
            }


 if(isset($_POST['reserve'])){
  
        $res=mysqli_query($db,"SELECT * FROM `info`");


            echo "<table id='customer' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "First Name"; echo "</th>";
                echo "<th>"; echo "Last Name";  echo "</th>";
                echo "<th>"; echo "Card_Number";  echo "</th>";
                echo "<th>"; echo "Floor";  echo "</th>";
                echo "<th>"; echo "Data";  echo "</th>";
                echo "<th>"; echo "Age";  echo "</th>";
                echo "<th>"; echo "numroom";  echo "</th>";
                
            echo "</tr>";   

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['fname']; echo "</td>";
                echo "<td>"; echo $row['lname']; echo "</td>";
                echo "<td>"; echo $row['card_number']; echo "</td>";
                echo "<td>"; echo $row['room']; echo "</td>";
                echo "<td>"; echo $row['date']; echo "</td>";
                echo "<td>"; echo $row['age']; echo "</td>";
                echo "<td>"; echo $row['numroom']; echo "</td>";


                echo "</tr>";
            }
        echo "</table>";


           
            }


       

           ?>




