<?php 
include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mkonnect New</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    <meta name="description" content="WOWSlider">
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="HandheldFriendly" content="true">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="canonical" href="https://www.mkonnect.co.ke" >
    <!--w3 css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  	<link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
  	<link rel="stylesheet" type="text/css" href="css/materialize.css"> 
  	<link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
	  <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquerymkon.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	
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
      <ul class="side-nav" id="mobile-demo" style="">
        <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="job_post.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>  
      </ul>
 		</div>
    </nav>
   
<div class="row" style="padding-top: 0%;background-image: url('img/mk.jpg');">
<div class="col m12" id="card-panel teal lighten-2">
	<!--div class="card-panel teal lighten-2" style="background-image:url('img/soc_2.jpg')"-->
  <form action="jobsmartch.php"  method="Post">
		<h3 style="font-size: 50px;color:rgb(8,10,260);">Find New Jobs Here...</h3>
	<div style="padding-left: 170px;background-color:orange;border-radius: 25px;">
    <label style="font-size: 30px;">Eassy Search:</label>
		<label style="font-size: 30px;color:color:rgb(8,10,260);">Job Category:</label>
		<input type="text" name="category" id="category" placeholder="category" style="width:150px;" required>
		<label style="font-size: 30px;color:color:rgb(8,10,260);">Location:</label>
		<input type="text" name="location" id="location" placeholder="location" style="width:150px;" required>
		<button class="btn btn-info" type="Submit"><span class="glyphicon glyphicon-search"></span>Search jobs</button>
	</div>
  </form>
	</div>
</div>
<div class="row">
<div class="col m12" style="background-color:purple ; height: 300px;">

<center><h4>Discover Great Candidate Today!</h4>
<h5>Try Mkonnect today,the best tool to get the matching candidate for your job...</h5>
<form  action="login.php" method="post">
<button class="btn btn-large" type="Submit">Post Job Now</button>
</form><!--close container--></center>
</div><!--close col m12-->

</div><!--close row-->
<!--section class="job_types"-->
<div class="container-fluid" style="margin-top: 25px; box-sizing: border-box;border-top: dotted; border-bottom: dotted;background-color: gainsboro;">
  <center><h5>List of Jobs By Category</h5></center>

    <div class="row">
    <div class="col m6" style="margin-top: 15px;">
    <!--div class="wow fadeInDown" data-wow-delay="1s" style="float:left;font-size: 15px;"-->

              <a href="#9" style="color:#fff;"><h3>IT</h3></a>
             <a href="#jobs" style="color:#fff;"> <h3>Accounting</h3></a>
             <a href="#jobs" style="color:#fff;"> <h3>Top Management</h3></a>
              <a href="#jobs" style="color:#fff;"><h3>Creatives</h3></a>
              <a href="#3" style="color:#fff;"><h3>Customer Service</h3></a>
             <a href="#3" style="color:#fff;"> <h3>Education</h3></a>
             <a href="#6" style="color:#fff;"> <h3>Farming&Agriculture</h3></a>
              <a href="#6" style="color:#fff;"><h3>Government</h3></a>
             <a href="#6" style="color:#fff;"> <h3>Healthcare & Pharmaceuticals</h3></a>
             <a href="#9" style="color:#fff;"> <h3>Human Resources & Recruitment</h3></a>
             <a href="#9" style="color:#fff;"> <h3>Insurance</h3></a>
             <a href="#12" style="color:#fff;"> <h3>Legal</h3></a>
             <a href="#12" style="color:#fff;"> <h3>Manufacturing & Production</h3></a>
            <a href="#15" style="color:#fff;">  <h3>Minning & Natural Resources</h3></a>
            <a href="" style="color:#fff;"><h3>Internship $ Voluntering</h3></a>

        </div><!--wow-->
      

 <div class="col m6">
<!--div class="wow fadeInDown" data-wow-delay="1s" style="float:right;font-size: 15px;"-->
              <a href="#12" style="color:#fff;"><h3>Marketing, Communications & PR</h3></a>
              <a href="#15" style="color:#fff;"><h3>NGO, Communication</h3></a>
              <a href="#15" style="color:#fff;"><h3>Administration & office Support</h3></a>
              <a href="#16" style="color:#fff;"> <h3>Project/ Project Management</h3></a>
              <a href="#16" style="color:#fff;"><h3>Research, Quality control/ Quality Assurance</h3></a>
              <a href="#16" style="color:#fff;"><h3>Retail</h3></a>
              <a href="#19" style="color:#fff;"><h3>Sales/Business Development</h3></a>
              <a href="#19" style="color:#fff;"><h3>Security</h3></a>
              <a href="#19" style="color:#fff;"><h3>Strategy & Consulting</h3></a>
              <a href="#22" style="color:#fff;"><h3>Tourism & Travel</h3></a>
              <a href="#22" style="color:#fff;"><h3>Trade & Services</h3></a>
              <a href="#22" style="color:#fff;"><h3>Transport,Logistics,Procurement</h3></a>
              <a href="#25" style="color:#fff;"><h3>Real Estate</h3></a>
              <a href="#25" style="color:#fff;"><h3>Hospitality</h3></a>
              <a href="#25" style="color:#fff;"><h3>Others</h3></a>
      </div><!--data-wow-->
  </div><!--col-md-6--> 
</div><!--container-->
<!--/section-->	

<!--section class="middle"-->
<div class="job_posted">
<ul class="collapsible" data-collapsible="accordion">
<li>
<div class="collapsible-header"><center><h3>click here to view newly posted jobs</h3></center></div>
<div class="collapsible-body">
  <div class="table-responsive">

    <table class="table  table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="gridtable">
         <th>Job Title</th>
         <th>Employer</th>
         <th>Job Description </th>
         <th>Job Category </th>
         <th>Years of Experience </th>
         <th>Available Positions </th>
         <th>Date/Time posted</th>
         </tr>
      </thead>
      <?php
      //connect to db
      
      include 'db/db_connection.php';
      $conid ="select * from employer_jobs";
      $getid =mysqli_query($con ,$conid);
      $rows =mysqli_fetch_array($getid);
      $employer_id = $_SESSION['id'];

      //select query to view users
      $view_admin_query = "select * from employer_jobs WHERE employer_id='$employer_id'";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {

        $user_id = $row[0];
        $job_title = $row[1];
        $company_name = $row[2];
        $job_category= $row[3];
        $experience= $row[4];
        $open_positions=$row[7];
        //$post_date = $row[5];
        $post_date = $row['Job Post Date'];
       ?>

       <tr class="info" style="text-align: center;font-size: 11px; background-color:rgb(25,250,200);">
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $job_title; ?></td>
         <td><?php echo $company_name; ?></td>
         <td><?php echo $job_category; ?></td>
         <td><?php echo $experience; ?></td>
         <td><?php echo $open_positions; ?></td>
         <td><?php echo $post_date; ?><button style="margin-right: -150px;background-color:rgb(10,50,48);color: #20ff30"><p class="blink-btn"><strong>Apply Now</strong></p></button></td>
      </tr>
       <?php } ?>
    </table>
  </div>
  </div>
  </li>
</ul>
</div>
<!--/section-->
<!--center adverts-->

<!--   -->
<div class="row" style="border-radius: 10px;background-color:;border-bottom: dotted;">
  <!--p><center><h2>This is where the details before footer will appear</h2></center></p-->
  <div class="col m3">
  <img src="img/Notified.jpg" class="img-thumbnail" style="width: 75px;height: 75px;">
  <h5>Get Notified</h5>
  <p style="font-size: 15px;">Sign up for job alerts and get the newest job <br>postings you want delivered right to your email.Submit Your Email Here and Get free Job Alerts.</p>
  <form class="feed" style="box-sizing: border-box;border: ;width: 300px;">
    <h5><center>Get Free Job Alerts.</center></h5>
    <h5>Enter Email:</h5>
    <input type="text" name="email" placeholder="email">
    <h5>Enter Password:</h5>
    <input type="Password" name="Password" placeholder="Password">
    <button class="btn btn-large">Click To Submit</button>
  </form>
  </div>
  <div class="col m3">
  <img src="img/found.jpg" style="width: 75px;height: 75px;">
  <h5 style="font-family: ">Get Found</h5>
  <p style="font-size: 15px;">Employers and recruiters use Mkonnect to find candidates like you.<br> Make your resume searchable and allow recruiters to contact you.<br> Your job search just got easier!</p>
  </div>
  <div class="col m3">
  <img src="img/employed.jpg" style="width: 75px;height: 75px;">
    <h5>Get Hired</h5>
    <p style="font-size: 15px;">Mkonnect connects the best tech talent with jobs around the world.<br>Whether you're a developer, engineer, or QA tester, Accountant , Mkonnect has what you need to keep your career on track.</p>
  </div>
  <div class="col md3" style="box-sizing: border-box;border: dotted;width: 300px;">
    <h5>Get Our Feedback.</h5>
    <h5>Enter Email:</h5>
    <input type="text" name="email" placeholder="email">
    <h5>Enter Password:</h5>
    <input type="Password" name="Password" placeholder="Password">
    <button class="btn btn-large">Click To Submit</button>
  </div>
</div>
</div>
<div class="row">
<h2><center>List Of Our Loyal Partners</center></h2>
</div>
<div class="row" style="border-bottom:">
<div class="col l3">
    <img src="img/marks.jpg" style="width: 70%;">
</div>
<div class="col l3">
    <img src="img/safcom.jpg" style="width:70%">
</div>
<div class="col l3">
    <img src="img/ramsa.png" style="width:70%">
</div>
<div class="col l3">
    <img src="img/logo.jpg" style="width:70%">
</div>
    <!--button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button-->
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
  $(document).ready(function(){
  $(".button-collapse").sideNav();
        
});
</script>
<!--class row-->
<div class="row" style="background-color: lightgrey;">
    <div class="col m4" style="background-color:;"><h3>What Is Mkonnect ?</h3>
    <p>
      Mkonnect is an Online Job Application system that<br> Profile Matches Employers and <br>
      Job seekers according to the employer's <br>requirements and the seeker's qualifications.
    </p>
    </div> 
  <div class="col m4" style="background-color:;">
  <h3>Is Mkonnect Safe & Secure To Use?</h3>
  <p>
    At Mkonnect We establish secure communication <br>
    between jobsekeers and Employers.All Our Transactions Are Encrypted.
  </p>
    
  </div>
  <div class="col m4" style="background-color:;">
  <h3>Why Choose Mkonect?</h3>
  <p>
    At Mkonnect We establish secure communication <br>
    between jobsekeers and Employers.All Our Transactions Are Encrypted.
  </p>
  </div>
</div>

<footer class="page-footer" style="background-color: rgb(8,8,8);">
<div class="row">
<div class="col m3">
  <p style="font-size: 20px;">Our Mission & Vission</p>
  <p>At mkonnect we link the employer and the job seeker.
  Profile matching employer and job seekers according to
  employers requirements and the job seekers qualification.</p>
</div><!--end of col md4-->
<div class="col m2">
  <p style="font-size: 20px;">find Us on:</p>
  <p><img src="img/icons/soc_fb.png" style="width: 15px;height: 15px;">&nbsp &nbsp facebook</p>
  <p><img src="img/icons/soc_gplus.png" style="width: 15px;height: 15px;">&nbsp &nbsp google +</p>
  <p><img src="img/icons/soc_tw.png" style="width: 15px;height: 15px;">&nbsp &nbsp twitter</p>
  <p><img src="img/icons/soc_in.jpg" style="width: 15px;height: 15px;">&nbsp &nbsp linkedIn</p>
</div>
<div class="col m3">
  <p style="font-size: 20px;">Important links</p>
  <p><a href="terms_conditions.php">Terms and Conditions</a></p>
  <p><a href="privacy_policy.php">Privacy Policy</a></p>
  <p><a href="#2">FAQs.</a></p>
</div>
<div class= "col m4">
  <p style="font-size: 20px;">Contact Info:</p>
  <p><img src="img/icons/address.jpg" style="width:20px;height:20px;">&nbsp Bemuda plaza,Ngong Rd,Block A | 4th Floor,Left Wing | P.O.Box 12971-00100,Nairobi.</p>
  <p><img src="img/icons/cont.jpg" style="width: 20px;height: 20px;">&nbsp Phone:+254 713 958 410 | +254 020 243 9488</p>
  <p><img src="img/icons/email.jpg" style="width: 20px;height: 20px;">&nbsp info@mkonnect.co.ke</p>
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