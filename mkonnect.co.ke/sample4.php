 <?php
include('header.php');
 ?>


         <?php 

        //include db
        include('mkonnect/db/db_connection.php');

        if(isset($_POST['mechanic'])){

        //declare variable
          $user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
          $user_num = $_POST['txt_number'];
          $user_job = $_POST['txt_jobs']; 

         //here query check weather if user already registered so can't register again.
    
    $select_mechanic="select * from mechanic WHERE email='".$user_email."'";
    
    $run_mechanic=mysqli_query($con,$select_mechanic);
   
    
     $rows = mysqli_num_rows($run_mechanic);
         
    if($rows>0)
    {
 $mechanic_mail= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

         echo $mechanic_mail;

       
        //refresh page

         $refresh = "<script>window.open('mkonnect.php','_self')</script>";
         

    }
    else{

     // $_POST['marketing']=null;

        //insert the user into the database.

    $insert_mechanic="insert into mechanic (name,email,phonenumber,job_type,password) VALUES ('$user_name','$user_email','$user_num','$user_job',md5('$user_pass'))";

    if(mysqli_query($con,$insert_mechanic))
    {
       echo"<script>window.open('mkonnect/uploadcv.php','_self')</script>";
       
       
   }
   else{
    echo "<script>alert('Check your details and try again')</script>";
    $refresh = "<script>window.open('mkonnect.php','_self')</script>";

   }

    }
          
          

        }



        ?>
