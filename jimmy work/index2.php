<!DOCTYPE html>
<html>
<head>
<title>Job website</title>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <header>
  <nav>

       <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="#">SHORTCODE</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">CONTACT US</a></li>
       </ul>


  </nav>
  </header>
  

<div class="container">
	<img src="images/account logo.jpg">

     <form action="logchecker.php" method="POST">

           <div class="form-input">
            <input type="text" id="user" name="user" placeholder="Enter Username" required="">
           </div>

           <div class="form-input">
            <input type="Password" id="pass" name="pass" placeholder="Enter Password" required>
           </div>
           <input type="submit" name="submit" value="LOGIN" class="btn-login">
       
     </form>
     <a href="#"> Forgot Password?</a >
</body>
</html>
