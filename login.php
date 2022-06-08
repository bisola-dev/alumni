<?php  
require_once('konnect.php');



if (isset($_POST['clicklogin'])){
    $emal = trim(strip_tags($_POST['emal']));
    $pwd = trim(strip_tags($_POST['pwd']));
 

 $dopwd='kokoro'.$pwd;
   $hpwd=md5($dopwd);

$domal='kokoro2'.$emal;
 $hem=md5($domal);

 $query20 = mysqli_query($conn, "SELECT * FROM  yabaweb_alumni_db  WHERE hemal='$hem'");
 while ($row=mysqli_fetch_assoc($query20)){
 $stat= $row['statuz'];}

  
  if($emal == "" || $pwd == ""){
 echo '<script type ="text/javascript">
  alert("please do not submit an empty form.");
  </script>';
     

 }
 

 else if(!filter_var($emal,FILTER_VALIDATE_EMAIL)){
        echo'<script type="text/javascript">
        alert("The email provided is invalid, please retry.");
        </script>';  
    }


 else if($stat==1){
      echo'<script type="text/javascript">
        alert(" Sorry you have been disable, please see the admin at CITM to enable access");
        </script>';
          
    }
                     
        else{
      //selecting database
$db= mysqli_select_db($conn, $dbname);



//sql query to fetch info. of registered user and finds user match.  

$query23 = mysqli_query($conn, "SELECT * FROM  yabaweb_alumni_db  WHERE hemal='$hem' AND hpazz = '$hpwd' LIMIT 1");
 while ($row=mysqli_fetch_assoc($query23)) {
      
     $sname = $row['sname'];
     $fname = $row['fname'];
     $oname = $row['oname']; 
     $emal = $row['emal']; 
     $hmal  = $row['hemal'];         
}

$rows = mysqli_num_rows($query23);
if ($rows == 1){

$reportalert='<script type="text/javascript">
        alert("you have successfully logged in.")
        </script>';
     

         $alumnamail = $_SESSION['emal'] = $emal;
       $fulln = $sname.'  '.$fname.'  '.$oname;
     $alumnamail2 = $_SESSION['hemal'] = $hmal;

       $alumnafulln=$_SESSION['fulln'] = $fulln;

  echo '<script type="text/javascript">
       alert("Congratulations! you have successfully registered.")
       window.location.href="home.php";
        </script>';
       
}
else{
     echo '<script type="text/javascript">
       alert("The username and password provided is invalid.")
       window.location.href="login.php";
        </script>';
       
      
 
     

}


}

}

?>



<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login to your account : BOS Academy </title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
           <?php if (!empty($reportalert)){echo $reportalert;}?>
   <!--preloader-->
        <!-- Content Wrapper -->
        <div class="login-wrapper">
           <div class="back-link">
                <a href="adminlogin.php" class="btn btn-add">Admin Login</a>
          
                <a href="index.php" class="btn btn-add">Back to Homepage</a>
            </div>
            
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">

                                <h3>Login</h3>
                                <small><strong>Please enter your email and password  to login.</strong></small>
                                 <?php if (!empty($reportalert)){echo'<h4>'.$reportalert.'</h4>';}?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action=""  method="POST" id="loginForm" novalidate>
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" title="Please enter you email" required="" value="" name="emal" id="email" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password"  value="" name="pwd" id="password" class="form-control">
                               
                            </div>
                            <div>
                                <button type="submit" name="clicklogin" class="btn btn-warning">Login</button> <br><br>
                                <a class="btn btn-add" href="reg.php">Register
                         if you do not have an account yet</a><br><br>
                         <a  href="forgot.php">Forgot password,click here.</a><br><br>
                            </div>

                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:07 GMT -->
</html>