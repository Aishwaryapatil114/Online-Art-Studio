<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="style1.css">
    <script src="main.js"></script>
    <title>Login</title>
</head>
<body >
 
    <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
      <!-- <form method=post action="login2.php"> 
      <table>
     
     <h2><font color='black' size='40px'>Login</font></h2> 
        <tr>
           User name
            <td><label  id="label-register" for="log-reg-show">User Name</label></td>
            <td><input type="text" name="Userid" placeholder="aish114"></td>
        </tr>
        <tr>
           Password 
            <td><label   id="label-register" for="log-reg-show">Password</label></td>
            <td><input type="text" name="Password"></td>
        </tr>
    </table>
        <div class="buttons">
        <td><input name=sbm  type="sbm" value="Submit"></td>
        </div>
    </form> -->
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="sbm" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
      <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
      <form method=post action="login2.php"> 
      <table>
     
    <!-- <h2><font color='black' size='40px'>Login</font></h2> -->
        <tr>
          <!-- User name -->
            <td><label  id="label-register" for="log-reg-show">User Name</label></td>
            <td><input type="text" name="Userid" placeholder="aish114"></td>
        </tr>
        <tr>
            <!-- Password -->
            <td><label   id="label-register" for="log-reg-show">Password</label></td>
            <td><input type="text" name="Password"></td>
        </tr>
    </table>
        <div class="buttons">
        <td><input name=sbm  type="sbm" value="Submit"></td>
        </div>
    </form>
		</div>
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
				<input type="button" value="Register">
			</div>
		</div>
	</div>
 

    

    <?php
     session_start();
     $cn=mysqli_connect("localhost","root","","artstudio");

     if(isset($_POST['sbm']))
     {
    $sql="select * from login where user_id='$_POST[Userid]' && pass='$_POST[Password]'";
    $result=mysqli_query($cn,$sql);
    $row=mysqli_fetch_array($result);
     
    if(is_array($row))
    {
      $user_id= $_POST['Userid'];
      $pass=$_POST['password'];
     header("location:http://localhost/bcaproject/home.php");
    }
     else
     echo "Invalid username and or password";
}
?>

    
</body>
</html>