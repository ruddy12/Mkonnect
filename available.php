<?php   require ("db.php");
//session_destroy();
 ?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Available Jobs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">

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
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtyA7xwFNVFltXxYYlyuiFzYtbshZcECIZThteLMuNgQvgEVAt"); height: auto;
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

 .wow:first-child {
      visibility: hidden;
    }
}
</style>



  </head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70" class="">
  <?php include_once("analyticstracking.php") ?>
  <a class="navbar-brand" rel="home" href="#" title="logo">
  <img src="img/logo.jpg"></a>
  <div class="top" style="margin-top:2%; margin-left: 75%;">
  <!--a href="#sales" data-toggle="modal" data-target="#sales">
  <button class="btn btn-primary btn-lg">Submit C.V.</button></a-->
  
  
  <a href="index.php#postjob"><button class="btn  btn-lg" style="background-color:#FF9000; color:#fff; margin-top:0%; margin-left: ; height:auto" >POSTJOB</button></a><br>
  </div><!--top-->
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav" style="margin-top: 1%;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="active"><a href="index.php#shortcode"><strong>ShortCode</strong></a></li>
          <li class="active"><a href="index.php#about">About</a></li>

          <li class="active"><a href="index.php#contacts">Contact</a></li>

      </ul></div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
<!-- Modal -->
<div class="modal fade" id="sales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">

    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <center><h4 class="modal-title" id="myModalLabel">Register</h4></center>
  </div><!--header-->
  <div class="modal-body" style="color:#000;">

  <div class="row" style="margin-top:-30%;">
  <section class="wow fadeInDown">
<div class="col-md-12 well " style="padding:10%;" >

        <fieldset>

            <legend><center> <span class="glyphicon glyphicon-user"></span> <span class="glyphicon glyphicon-user"></span></center> </legend>

              <div class="form-group" style="margin-bottom: 28%;">
                <div class="col-md-10">
                <div class="thumbnail">
                  <center><p class="text-danger">If you Already have an account?</p> </center>
                  <h4 style="font-size:1.8em;"><center><a href="#login4">Login</a></center></h4>
                  </div><!--thumnail-->
                </div><!--col-md-10-->
              </div><!--form-group-->


       <form action="register.php" method="POST" id="">
            <div class="form-group">
            <div class="col-md-12">
               <label for="txt_subject" class="control-label text-warning">Enter Email</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

            <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="email" placeholder="Your Email" id="email" type="email" autofocus="" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->

            <div class="form-group">
            <div class="col-md-12">
               <label for="txt_subject" class="control-label text-warning">Enter Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

             <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="password" placeholder="Your Password" type="password" id="password" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->

            <div class="form-group">
            <div class="col-md-12">
               <label for="txt_subject" class="control-label text-warning">Confirm Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

          <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password" id="confirm_password" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->



             <div class="form-group">
                <div class="col-md-8">

         <input class="btn btn-lg btn-success btn-block " type="submit" value="Register" name="accounts"   style="font-size:1.25em;">

                </div><!--col-md-12-->
            </div><!--form-group-->
            </form>

            <div class="form-group">
                <div class="col-md-12">

                  <div class="panel" style="margin-top:2%;">

                  <p class="text-success"><a data-toggle="collapse" href="#forgotten" aria-expanded="false" aria-controls="collapseExample">Forgotten Password</a></p>

                  </div><!--panel-->

                  <div id="forgotten" class="collapse">

                    <form class="form-vertical" action="remind.php" method="POST" id="">
                 <div class="form-group">
            <div class="col-md-12">
               <label for="txt_email" class="control-label text-success" style="text-align:center;">Email</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-12">

                   <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                    <div class="col-md-12" >
                <div class="form-group">


                </div><!--from-group-->
              </div><!--col-md-10-->
              <div class="col-md-12">
                <div class="form-group">
                   <input class="btn btn-lg btn-primary btn-block " type="submit" value="Submit Email" name="accounts"   style="font-size:1.25em;">

                </div>
              </div>
                    </form>

                  </div><!--forgotten-->

                </div><!--col-md--12-->
            </div><!--form-group-->

        </fieldset>

    </div><!--col-md--12-->
    </section>


  <div class="thumbnail">


                    <!--button class="btn btn-success btn-block" data-toggle="collapse" data-target="#login2" >Login</button-->


                        <div id="login2">
                <div class="arrow"></div>

                <div class="popover-content">

                  <div class="panel">

                <legend><center> <span class="glyphicon glyphicon-user"></span> Login <span class="glyphicon glyphicon-user"></span></center> </legend>

                </div><!--panel-->

            <form class="form-vertical" action="login.php" method="POST" id="">
                 <div class="form-group">
            <div class="col-md-12">
               <label for="txt_email" class="control-label">Email</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-12">

                   <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                        <div class="form-group">
            <div class="col-md-12">
               <label for="txt_pass" class="control-label">Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

              <div class="form-group">
              <div class="col-md-12">

            <input class="form-control" name="password" placeholder="Your Password" type="password" id="password1"  required="">

              </div><!--col-md-12-->
               </div><!--form-group-->


                </div>
                <div class="popover-footer" id="login4">
                   <center> <input type="submit" name="login" value="Login" class="btn btn-lg btn-info btn-lg"></input></center>
                </div>

                </form>
            </div><!--mypopoverid-->



                  </div><!--panel-->
</div><!--login2-->
</div><!--row-->
    <center>
                  <!-- PopoverX content -->

</center>



  </div><!--col-md-6-->

    <div class="modal-footer">
    <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
     <button type="button" class="btn btn-lg" data-dismiss="modal" style="background-color: #fed136; color: #fff; font-size: 1.8em;" >Close</button>
  </div><!--modal-footer-->
  </div><!--row-->
</div><!--body-->
</div><!--content-->

<section>
<div class="well" style="margin-top:-11%;">
                    <center><h3 class="text-warning">Available Jobs</h3></center>
                    <div class="caption panel" style="color:#000;">
                     <?php
                     //connect to db
                     //connect to db
                     include 'db/db_connection.php';

                     //select query to view users
                     $view_admin_query = " select * from employer_jobs ORDER BY id desc";
                     //run the sql query

                     $run = mysqli_query($con, $view_admin_query);

                     //while fetches  the result and store in an array row

                     while ($row = mysqli_fetch_array($run)) {

                       $user_id = $row[0];
                       $job_title = $row[1];
                       $company_name = $row[2];
                       $job_category= $row[3];
                       $experience= $row[4];
                       $post_date = $row[6];






                      ?>

                     <h2><?php echo $job_title; ?></h2>
                     <!--h2>Job Description</h2-->
                     <div><?php echo $company_name; ?></div>
                     <div><p style="font-size:1.8em;"> for more jobs click <a href="index.php">here</a></p></div>
                      <a href="#sales" data-toggle="modal" data-target="#sales"><center><button id="<?php  echo $user_id;?>" class="btn btn-warning btn-block" style="font-size:2em;">Apply</button></center></a>
                      <?php } ?>


                    </div><!--caption-->

                  </div>

</section>



<div id="contacts" class="wow bounceInLeft" data-wow-offset="200">
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
    <h2 class="text-warning"><em>CONTACT US</em></h2>

      <ul class="list-inline center-block">
        <li><a href="#"><img src="img/icons/soc_fb.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_tw.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_gplus.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_pin.png"></a></li>
      </ul>

    </div><!--/col-->
</div><!--/container-->
</div><!--contacts-->



  <div id="footer">
  <div class="container">
    <h4 style="color:#fff;"><center>Copyright ©2016 Mkonnect.</center></h4>
  </div>
</div>

<ul class="nav pull-right scroll-top pull-right">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<!--/col-->
<!--/container-->

<!--/wrap-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<script type="text/javascript">
  /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})

/* google maps */

// enable the visual refresh
google.maps.visualRefresh = true;

var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    // try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // browser doesn't support geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/wow.js"></script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>


<script type="text/javascript">
    $.validator.setDefaults( {
      submitHandler: function () {
        alert( "submitted!" );
      }
    } );

    $( document ).ready( function () {
      $( "#mkonnect" ).validate( {
        rules: {
          firstname: "required",
          lastname: "required",
          username: {
            required: true,
            minlength: 2
          },
          password: {
            required: true,
            minlength: 6
          },
          confirm_password: {
            required: true,
            minlength: 6,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          },
          agree: "required"
        },
        messages: {

          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long",
            equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address",
          agree: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

      $( "#mkonnect2" ).validate( {
        rules: {

          password1: {
            required: true,
            minlength: 6
          },
          confirm_password1: {
            required: true,
            minlength: 6,
            equalTo: "#password1"
          },
          email1: {
            required: true,
            email: true
          },
          agree1: "required"
        },
        messages: {
          firstname1: "Please enter your firstname",
          lastname1: "Please enter your lastname",
          username1: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          confirm_password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long",
            equalTo: "Please enter the same password as above"
          },
          email1: "Please enter a valid email address",
          agree1: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          // Add `has-feedback` class to the parent div.form-group
          // in order to add icons to inputs
          element.parents( ".col-sm-5" ).addClass( "has-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !element.next( "span" )[ 0 ] ) {
            $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
          }
        },
        success: function ( label, element ) {
          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !$( element ).next( "span" )[ 0 ] ) {
            $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
          $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
          $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
        }
      } );
    } );
  </script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
<script>
$('.cat').click(function() {
    var id = $(this).attr('id');
    console.log(id);
    //$("#w3s").attr("href", "http://www.w3schom");
    $.post(
      'cat.php',
      { id: id },
      function(data) {
        console.log(data);
      }
    );
});
</script>
<!-- tracking id -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82690321-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
