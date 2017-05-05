<?php
require 'db.php';

// code to search on mysql to be used later
$category = $_POST['category'];
$location = $_POST['location'];
$run_qry = "SELECT * FROM employer_jobs WHERE job_category= rtrim('$category')  AND location =rtrim('$location') ";
$getjobs = mysqli_query($con , $run_qry);

// check if querry returned any matches


if ($getjobs) {
$row = mysqli_fetch_array($getjobs);
echo "Matche Found";
$job_category = $row[3];
$job_location = $row[10];
echo $job_category;
echo $job_location;

}else {
	echo "No matches Found.";
	die();
	# code...
}
// $bdd= my

// select data from table routes in postgreSQL
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs Found</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css"> 
    <link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
  <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
  <link rel="stylesheet" type="text/css" href="js/carousel.js">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/mkonnect.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
  background-image: url("https://americanlibrariesmagazine.org/wp-content/uploads/2012/12/background_jobs4web.jpg");

}

#about .well{
  height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
}
#job_types{
  background-image: url(""); height: auto;
  width: 100%; padding: 40px 0; overflow: hidden;
}

.jobbs {
  background-image: url("https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTwpFj66a4NwG0kr9hDqkNBJFbTF3ISpIPKe-Mvr8w4KEy3AYqV");
  width: 100%;
  height: auto;
  width: auto;
  padding: 40px 0;
  overflow: hidden;
}
.thumbnail{
 
  width: 100%;
  height: auto;
  width: auto;
  padding: 40px 0;
  overflow: hidden;
}
 .wow:first-child {
      visibility: hidden;
    }
}
</style>

</head>
<!--have an account login if not register-->
<body>
<body data-spy="scroll" data-target="#uxt" data-offset="70" class="">
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="WOWSlider" />
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="HandheldFriendly" content="true">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="canonical" href="https://www.mkonnect.co.ke" />
    <!--w3 css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css"> 
    <link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
   <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<script type="text/javascript" src="js/jquerymkon.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>

  
    <!--img src="img/logo.jpg" style="float: left;"-->
    <nav>
    <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="img/icons/imageedit_4_7060829937.png" style="width: 202px;"></a>
    <a href="#" data-activates = "mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down" style="text-decoration: none;">
      <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
      <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      <li><strong><a href="job_post.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      
      </ul>
      <ul class="side-nav" id="mobile-demo" style="text-decoration: none;">
        <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="job_post.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>  
      </ul>
    </div>
    </nav>
<div class="row">
  <div class="col m6" style="box-sizing: border-box;border-top:dotted; border-bottom: dotted;">
  <p>One Matching Job Found For You:</p>
  <h5>Job description:<?php echo "$job_category";    ?></h5>
  <h5>Job Location:<?php echo "$location";    ?></h5>
    

  </div>
  



</div>

<section id="job_types" style="margin-top:-5%; wid" >
  <div class="thumbnail" style="position: center;">
      <legend><h1 style="text-align: center;"> <span class="glyphicon glyphicon-user"></span></h1></legend>
         <form class="form-horizontal" action="login33.php" method="POST" id="" style="padding-right: 250px;padding-left: 500px;">
                 <div class="form-group" style="align-content: center;">
            <div class="col-md-12">
               <label for="txt_email" class="control-label">
               <h3 class="text-muted">Email</h3></label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-10">

                  <input  name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required style="width: 280px;">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                        <div class="form-group">
            <div class="col-md-12">
               <label for="txt_pass" class="control-label"><h3 class="text-muted">Password</h3></label>
            </div><!--col-md-12-->
          </div><!--form-group-->

              <div class="form-group">
              <div class="col-md-10">

            <input  name="password" placeholder="Your Password" type="password" id="password1"  required style="width: 280px;">

              </div><!--col-md-12-->
               </div><!--form-group-->

                <div class="form-group">
              <div class="col-md-10">

                <div class="popover-footer" id="login4">
                <div class="Forgot" style="margin-left: 90px; text-decoration: none;">
                  <a href="resetpassword.php">Forgot Password </a><br>
                </div>
                    
                    <input type="submit" name="login" value="Login" class="btn btn-lg btn-primary btn-lg" style="margin-left: 0px; width: 400px;"></input><br>
                </div>
                </div>
                </div>

                </form>
  

  
  <center><a data-toggle="collapse" href="#reg" aria-expanded="false" aria-controls="collapseExample"> <button class="btn btn-warning" style="margin-left: 50px; width: 400px;">Register if you dont have an account</button></a></center><br><br>
  
  </div><!--thumbnail-->
  <div class="thumnail"></div>
<div id="reg" class="collapse" >
<div class="row " style="margin-top: 0%;">
<div class="container">
<div class="well">
<div class="thumbnail">
        
        <legend><h1 style="text-align: center;"><i class="fa fa-registered" aria-hidden="true" fa-5x aria-hidden="true"></i></h1></legend>
         <form class="form-vertical" action="register33.php" method="POST" id="">
                 <div class="form-group">
            <div class="col-md-12">
               <label for="txt_email" class="control-label">
               <h3 class="text-muted">Email</h3></label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-12">

                   <input class="form-control" name="email" placeholder="Your Email" id="email" type="email" autofocus="" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                        <div class="form-group">
            <div class="col-md-12">
               <label for="txt_pass" class="control-label"><h3 class="text-muted">Password</h3></label>
            </div><!--col-md-12-->
          </div><!--form-group-->

              <div class="form-group">
              <div class="col-md-10">

              <input class="form-control" name="password" placeholder="Your Password" type="password" id="password" required="">
              </div><!--col-md-12-->
               </div><!--form-group-->
               <div class="form-group">
            <div class="col-md-10">
               <label for="txt_subject" class="control-label text-warning">Confirm Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

          <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password" id="confirm_password" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->



                </div>
                
                <div class="form-group">
                <div class="col-md-8">

         <input class="btn btn-lg btn-success btn-block " type="submit" value="Register" name="accounts"   style="font-size:1.25em;margin-left: 150px;margin-top: -20px;">

                </div><!--col-md-12-->
            </div><!--form-group-->

                </form>
        </div><!--panel-->
        </div><!--well-->
</div><!--reg-->
</div><!--container-->
</div><!--row-->
</div><!--reg-->


  <!--beginning of footer.....Edited By David on 28/04/2017 @ 9:11 am-->
<footer class="page-footer" style="background-color: rgb(8,8,8);margin-top: 50px;">
<div class="row">
<div class="col m3">
  <p style="font-size: 20px;">Our Mission & Vission</p>
  <p>At mkonnect we link the employer and the job seeker.
  Profile matching employer and job seekers according to
  employers requirements and the job seekers qualification.</p>
</div><!--end of col md4-->
<div class="col m3">
  <p style="font-size: 20px;">Connect With Us on:</p>
  <p><img src="img/icons/soc_fb.png" style="width: 15px;height: 15px;">&nbsp &nbsp <a href="#">facebook</a></p>
  <p><img src="img/icons/soc_gplus.png" style="width: 15px;height: 15px;">&nbsp &nbsp <a href="#">google +</a></p>
  <p><img src="img/icons/soc_tw.png" style="width: 15px;height: 15px;">&nbsp &nbsp <a>twitter</a></p>
  <p><img src="img/icons/soc_in.jpg" style="width: 15px;height: 15px;">&nbsp &nbsp <a>linkedIn</a></p>
</div>
<div class="col m3">
  <p style="font-size: 25px;">Important links</p>
  <p><a href="#2">Terms and Conditions</a></p>
  <p><a href="#2">Privacy Policy</a></p>
  <p><a href="#2">FAQs.</a></p>
</div>
<div class="col m3">
  <p style="font-size: 25px;">Contact Info:</p>
  <p><img src="img/icons/address.jpg" style="width: 20px;height: 20px;"> &nbsp    Bemuda plaza,Ngong Rd,Block A | 4th Floor,Left Wing | P.O.Box uxt-00100,Nairobi.</p>
  <p><img src="img/icons/cont.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp Phone:0000100024550</p>
  <p><img src="img/icons/email.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp info@mkonnect.co.ke</p>
</div>
</div><!--end of class row-->          
<div class="row">
<div class="col m12">
<p class="white-text">Copyright  &copy<?php
    require_once 'footertitle.php'
    ?>Mkonnect&reg.<br>All Rights Reserved</p>
</div>
</div>
</footer><!--end of footer here-->
</body>
</html>