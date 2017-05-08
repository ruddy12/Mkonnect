<?php
require 'logchecker.php'

?>
<!DOCTYPE html>
<html>
<head>
<title>Job website</title>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
  <nav>

       <ul>
          <li class="home"><a href="#">HOME</a></li>
          <li><a href="#">SHORTCODE</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">CONTACT US</a></li>
       </ul>


  </nav>
  </header>
  <?php echo $username; ?>

<div class="container">
	<img src="images/account logo.jpg">

     <form action="login.php" method="POST">

           <div class="form-input">
            <input type="text"  name="user" placeholder="Enter Username" required="">
           </div>

           <div class="form-input">
          <input type="Password"  name="pass" placeholder="Enter Password" required ="">
           </div>
           <input type="submit" name="submit" value="LOGIN" class="btn-login">
       
     </form>
     <a href="#"> Forgot Password?</a >

</div>

<footer>

<p> Visit Our social media platform:</p>
   <div class="images">
        <a href="http://www.facebook.com"><img src="images/Facebook1.png" style="width:40px;height:40px;" alt="facebook"/ </a>
        <a href="http://www.instangram.com"><img src="images/instagram1.png" style="width:40px;height:40px;" alt="instagram"/ </a>
        <a href="http://www.twitter.com"><img src="images/Twitter bird1.jpg" style="width:40px;height:40px;" alt="twitter"/ </a>
   </div>
</footer>

</body>
</html>

