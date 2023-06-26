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
    <link href="sign-up-staff00.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" https://icons8.com/icon/ejub91zEY6Sl/chrome">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <title>Admin_Hotel_Fox</title>
</head>
<span id="p" style="font-size:30px; cursor:pointer" onclick="openNav()"><i class="fa fa-gears" style="font-size: 40px;"></i></span>

<body style="background-color: #070707;">
        <?php
if($email)
{
$sql = "SELECT name FROM `Admin` WHERE email='".$_SESSION['email']."';";
$res=mysqli_query($db,$sql);
   while ($row=mysqli_fetch_assoc($res)) {           
$name= $row["name"]; 
$lname="shalaby";
}}
?>
 <img src="image/z.png"style="border-radius: 150px ;width: 70px;margin-left: 75rem;margin-top: -70px;">
 <span style="color:red;font-weight: bold; margin-left: 87rem; margin-top: -366px"> <?php echo $name." ".$lname ;?></span>


<!----------------------------------  Sign up staff -------------------------------->

<input class="c-checkbox" type="checkbox" id="start">
<input class="c-checkbox" type="checkbox" id="progress2">
<input class="c-checkbox" type="checkbox" id="progress3">
<input class="c-checkbox" type="checkbox" id="finish">
<div class="c-form__progress"></div>

<div class="c-formContainer">

  <form class="c-form" action="" method="post">
    <div class="c-form__group">
      <label class="c-form__label" for="username">
                    <input type="text" name ="name" id="username"class="c-form__input"placeholder=" "required>

                    <label class="c-form__next" for="progress2" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>
             <!--   <label><input name="submit" type="submit"  value="staff"  style="margin-left:0.3rem" /></label>-->

      <span class="c-form__groupLabel">Name Admin.</span>
      <b class="c-form__border"></b>
      </label>
    </div>

    <div class="c-form__group">
      <label class="c-form__label" for="femail">
                    <input type="email" name ="email" id="femail"class="c-form__input"placeholder=" "required>

                    <label class="c-form__next" for="progress3" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>
             <!--   <label><input name="submit" type="submit"  value="staff"  style="margin-left:0.3rem" /></label>-->

      <span class="c-form__groupLabel">What's your email?</span>
      <b class="c-form__border"></b>
      </label>
    </div>


    <div class="c-form__group">
      <label class="c-form__label" for="fpass">
                    <input type="password" name ="pass" id="fpass"class="c-form__input"placeholder=" " required>

                  

      <span class="c-form__groupLabel">Enter your password.</span>
      <b class="c-form__border"></b>
      </label>
      <br><br>
           <input id="b" type="submit" name="Add" value="Add-Staf">

    </div>

    <label class="c-form__toggle" for="start">Register<span class="c-form__toggleIcon"></span></label>
  </form>
</div>

<div id="myNav" class="overlay3">

    <a href="javascript:void(0)" class="closebtn" id="close" onclick="closeNav()" style="margin-left: 2rem;">&times;</a>
      <div class="overlay3-content">
       <img src="image/admin.png" alt="staff" id="im-staff" style="font-size: 90px;">
       
       <a href="http://localhost/Project%20Hotel/Admin.php" class="active"><i class="fa fa-fw fa-home" style="margin: 25px;font-size: 45px;margin-left: -0.1rem;"></i></a>
       <a href="http://localhost/Project%20Hotel/Admin%20-%20info.php"> <i class="fa fa-drivers-license-o" style="margin: 15px;font-size: 35px; margin-left: 0.4rem;"></i></a>
      <a href="http://localhost/Project%20Hotel/sign%20up-staff.php"><i class="fa fa-user-plus" style="margin: 15px;margin-left: 0.2rem;"></i></a>
      <a href="http://localhost/Project%20Hotel/Home.php"><i class="fa fa-power-off" style="margin: 15px;margin-left: 0.6rem;"></i></a>
    </div>
  </div>
  
  

<!---------------sign up staff --------------->
<script src="js/create staff.js"> </script>

 
 
</body>



</html>




<?php



   
       


if(isset($_POST['Add']))
      {
        $count=0;
        $sql="SELECT name from `staff`";
        $res=mysqli_query($db,$sql);
        
        while($row=mysqli_fetch_assoc($res))
        {
          if($row['name']==$_POST['name'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
 mysqli_query($db,"INSERT INTO `staff`(`name`, `email`, `pass`) VALUES ('$_POST[name]','$_POST[email]','$_POST[pass]');") ;    

     ?>
            <script type="text/javascript">
            window.location="created-staff.php"
            </script>
          <?php
        
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The staff already exist.");
            </script>
          <?php

        }}





/**








 if(isset($_POST['Add'])&&$checkbox==)
      {
        $count=0;
        $sql="SELECT name from `staff`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['name']==$_POST['name'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `staff` (`name`, `email`, `pass`) VALUES('$name', '$email','$pass');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        ?>
         <script type="text/javascript">
                window.location="http://localhost/Project%20Hotel/sign%20up-staff.php"
                </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The staff already exist.");
            </script>
          <?php

        }

      }

*/

    ?>















































<!--
 <form class="c-form" action="" method="post">
    <div class="c-form__group">
      <label class="c-form__label" for="username">
                    <input type="text" name = "name" id="username"class="c-form__input"placeholder=" "pattern="[^\s]+"required>

                    <label class="c-form__next" for="progress2" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

      <span class="c-form__groupLabel">Create your username.</span>
      <b class="c-form__border"></b>
      </label>
    </div>

    <div class="c-form__group">
      <label class="c-form__label" for="femail">
                    <input type="email" name = "email" id="femail"class="c-form__input"placeholder=" "pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"required>

                    <label class="c-form__next" for="progress3" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

      <span class="c-form__groupLabel">What's your email?</span>
      <b class="c-form__border"></b>
      </label>
    </div>

    <div class="c-form__group">
      <label class="c-form__label" for="fpass">
                    <input type="password" name ="pass" id="fpass"class="c-form__input"placeholder=" "required>

                    <label name="add" class="c-form__next" for="finish" role="button">
                       <span class="c-form__nextIcon" ></span>

                    </label>

      <span class="c-form__groupLabel">Create your password.</span>
      <b class="c-form__border"></b>
      </label>
    </div>

    <label class="c-form__toggle" for="start">Register<span class="c-form__toggleIcon"></span></label>
  </form>



/




-->



