<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <!-- <script type="javascript" src="main.js"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <title>Login</title>
</head>
<body>
<div class="login-reg-panel">
    <!-- <div class="login-info-box">
        <h2>Have an account?</h2>
        <p>Lorem ipsum dolor sit amet</p>
        <label id="label-register" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
         </div> -->
                        
      <div class="register-info-box">
        <div class="reg1">
        <h2 style="color:white ">Don't have an account? </h2>
        <a class="button1" href="http://localhost/MCA/newuser.php">Register</a>
        </div>
       </div> 
    
       <div class="white-panel">
        <div class="container">
        <form method=post action="logininfo.php"> 
     
     <h2>Login</h2> 
        
           <!-- User name -->
            <!-- <label  class="label1" >User Name</label> -->
            <input  type="text" name="Userid" placeholder="Userid">
       <br> 
       
           <!-- Password  -->
            <!-- <label   class="label1" >Password</label> -->
            <input  type="password" name="Password" placeholder="password">

        <div>
        <button  name="sbm"  class="buttons" type="sbm" value="Submit"> Submit</button>
        </div>

        <div>
        <a href="">Forgot password?</a>
        </div>
        
        </form>
        </div>
       
        <!-- <div class="register-show">
			 <h2>Don't have Account </h2>	
	    </div> -->
    </div>
</div>
<?php
     session_start();
     $cn=mysqli_connect("localhost","root","","artstudio");

     if(isset($_POST['sbm']))
     {
    $sql="select * from user where user_id='$_POST[Userid]' && user_pass='$_POST[Password]'";
    $result=mysqli_query($cn,$sql);
    $row=mysqli_fetch_array($result);
     
    if(is_array($row))
    {
      $user_id= $_POST['Userid'];
      $pass=$_POST['password'];
     header("location:http://localhost/MCA/home.php");
    }
     else
     echo "Invalid username and or password";
}
?>
</body>
</html>