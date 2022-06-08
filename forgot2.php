<?php

session_start();


   
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
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="back-link">
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
                                <h3>Forgot password</h3>
                                <small><strong>Please provide the required details to retrieve your password.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post"  action="">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" title="Please enter you email" required="" value="" name="emal" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="phone">Phone number</label>
                                <input type="text"   value="" name="fon"  class="form-control">
                               
                            </div>


                            <div class="form-group ">
                                 <label>Select program</label>
                                 <select class="form-control" name="prog">
                                     <option>click to select</option>
                                    <option>ND full time</option>
                                    <option>ND parttime</option>
                                    <option>HND fulltime</option>
                                    <option>HND parttime</option>
                                    
                                </select>
                              </div>
                            <div>
                                <button type="submit" name="submit" class="btn btn-danger">Retrieve password</button><br><br>

                                <a  href="register.php">Register if you do not have an account.</a><br><br>

                                 <a  href="login.php"> login to your account.</a>


                        
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