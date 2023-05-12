<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dummy.css">
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
</head>
<body>
<div class="contact-container">
  <div class="left-col">
    <img class="logo" src="images/logo.png"/>
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
    <!-- <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label> -->
  <!-- <div class="description">Dark Mode</div> -->
</div>
    
    <h1>Contact us</h1>
    <p>Planning to join us if you have any queries contact us and leave your questions here. We will report you soon on your email.</p>
    
    <form id="contact-form" method="post">
      <label for="name">Full name</label>
  <input type="text" id="name" name="name" placeholder="Your Full Name" required>
      <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
      <label for="message">Message</label>
  <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
      <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit">Send</button><!--</a>-->
  
</form>
<div id="error"></div>
<div id="success-msg"></div>
  </div>
</div>

    
</body>
</html>