<?php
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
    

<!----------------------------------  Sign up staff -------------------------------->


<div style="margin-right :25rem;"><span id="created" style=" position: absolute;width: max-content;height: inherit;font-size: 50px;top:110px;color: #ec9405;">Created sucessfuly</span></div>
    <br><br>
<img src="image/truee.png"alt="true" id="true" style="margin-top: -100px; width: 25%;">
    <form action="" method="post">
        <input id="b" type="submit" name="add" value="Add-New-Staf" style="margin-right: 3.2rem;margin-top: -10px;" >
</form>
  

<div id="myNav" class="overlay3">

    <a href="javascript:void(0)" class="closebtn" id="close" onclick="closeNav()" style="margin-left: 2rem;">&times;</a>
      <div class="overlay3-content">
       <img src="image/admin.png" alt="staff" id="im-staff" style="font-size: 90px;">
       
       <a href="http://localhost/Project%20Hotel/Admin.php" class="active"><i class="fa fa-fw fa-home" style="margin: 25px;font-size: 45px;margin-left: -0.1rem;"></i></a>
       <a href="http://localhost/Project%20Hotel/Admin%20-%20info.php"> <i class="fa fa-drivers-license-o" style="margin: 15px;font-size: 35px; margin-left: 0.4rem;"></i></a>
      <a href="http://localhost/Project%20Hotel/sign%20up-staff.php"><i class="fa fa-fw fa-envelope" style="margin: 15px;margin-left: 0.2rem;"></i></a>
      <a href="http://localhost/Project%20Hotel/Home.php"><i class="fa fa-power-off" style="margin: 15px;margin-left: 0.6rem;"></i></a>
    </div>
  </div>
  
  

<!---------------sign up staff --------------->
<script src="js/create staff.js"> </script>

 
 
</body>



</html>

<?php

if(isset($_POST['add']))
{
?>
<script type="text/javascript">
window.location="sign up-staff.php"
</script>
<?php
}


?>
