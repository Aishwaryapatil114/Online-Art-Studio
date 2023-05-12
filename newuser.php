<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
<div class="login-reg-panel1">
<div class="reg2">
  <h2>Sign in with</h2>
</div>
<div class="reg3">
<div class="container">
  <div class="card"> 
  
  
<div class="main active">
    <div class="social_buttons">
        <button><i class="fa fa-google"></i>Continue with Google</button>
        <button><i class="fa fa-instagram"></i>Continue with Instagram</button>
        <button><i class="fa fa-facebook"></i>Continue with Facebook</button>
        <button><i class="fa fa-twitter"></i>Continue with Twitter </button>
    </div>
   
</div>

<div class="white-panel1">  
<form method=post action="newuser.php"  >   

        <center>
      
        <input type="text"   name="userid" placeholder="Userid">
      
          <input type="text"  name="first" placeholder="First Name">
          <input type="text"  name="last" placeholder="Last Name">
        
          <input type="date" name="birth" placeholder="Birthdate"  >
        
          <input type="text"  name="useraddr" placeholder="Address plot number">
        
          <input type="text" name="usercity" placeholder="City">
      
          <input type="text" name="usercont" placeholder="Contact number">
        
          <br>
              <!-- <label for="Gender">Gender</label>   -->
              
              <select name="empgender" >
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
        
          <input type="password" name="Password"  placeholder="Password">
     
          <div>
          <button  class="button1" name="sbm" type="sbm" value="Submit" >Register</button>
          </div>
          

          </center>
         
  </div>
</form>


<div class="white-panel2">
</div>

</div>
</body>
<?php
session_start();
$conn = mysqli_connect("localhost","root","","artstudio");

if (isset($_POST['sbm'])) {
    $user_id = $_POST['userid'];
    $user_first = $_POST['first'];
    $user_last = $_POST['last'];
    $user_birth = $_POST['birth'];
    $user_addr = $_POST['useraddr'];
    $user_city= $_POST['usercity'];
    $user_cont= $_POST['usercont'];
    $user_gender= $_POST['empgender'];
    $user_pass= $_POST['Password'];

    $query = "insert into user(user_id,user_first,user_last,user_birth,user_addr,user_city,user_cont,user_gender,user_pass)values('$user_id','$user_first','$user_last' ,'$user_birth','$user_addr','$user_city','$user_cont','$user_gender','$user_pass')";
    $run = mysqli_query($conn, $query);
    
    if($run)
    { // echo"<center>";
       //  echo"<h2  style="color : White">"  "User Added Successfully...." "</h2>";
       // echo"</center>";
    
    }
}
?>
</html>