<?php
session_start();
$plicantmail = $_SESSION['emal'];
 $plicantfulln = $_SESSION['fulln'];

$servername="localhost";
  $username="root";
  $password="temitope";
  $dbname= "myschool";


// establishing connection with the server by passing servername, username, password and database name as the peremeters
  $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Africa/Lagos');
$dreg= date('M j, Y h:i a', time());

$dkode=rand(10000, 99999);

//echo $dkode;


$sql = mysqli_query($conn, "SELECT * FROM applicants  where emal='$plicantmail'");
while ($row=mysqli_fetch_assoc($sql)) {
      $fulln2 = $row['fulln'];
      $emal2 =$row['emal'];
      $fon2= $row['fon'];
      $pwd2 = $row['pwd'];
      $hpwd2=$row['hpwd'];
      $prog2 = $row['prog'];
      $course2 = $row['course'];
      $dreg2 =$row['dreg'];
      $pix2 = $row['pix'];
      $statuz2=$row['statuz'];
     
               
   }

if (isset($_POST['submit'])){
 
   $fon = trim(strip_tags($_POST['fon']));
   $fulln = trim(strip_tags($_POST['fulln']));
   $pwd = trim(strip_tags($_POST['pwd']));
   $rpwd = trim(strip_tags($_POST['rpwd']));
   $prog = trim(strip_tags($_POST['prog']));
   $course= trim(strip_tags($_POST['course'])); 
   $mkode = trim(strip_tags($_POST['mkode']));
   $statuz = trim(strip_tags($_POST['statuz']));
   $pix=trim(strip_tags($_POST['pix']));
   

   //$dopwd='kokoro'.$pwd;
   $hpwd=md5($pwd);

   echo $fon.''.$fulln.''.$pwd.''.$rpwd.''.$prog.''.$mkode.''.$hpwd.''.$course.''.$statuz;



     

  if( $fon == "" || $fulln == "" || $pwd == "" || $rpwd == "" || $prog == "" || $mkode == "" || $pix==""|| $statuz=="") {
  $mes="<script type ='text/javascript'>alert('please do not submit empty form.')</script>";
      $ms="do not submit an empty form 
      ";

 }
 

/*else if(!filter_var($emal,FILTER_VALIDATE_EMAIL)){
        $mes ='<script type="text/javascript">
        alert("The email provided is invalid, please retry.");
        </script>';
          $ms = "The email provided is invalid, please retry. ";} */

    


    else if ((strlen($fon) < 11) || (!(is_numeric ($fon))) ){
                 $mes='<script type="text/javascript">
        alert("The phone number invalid, please retry.");
        </script>';

         $ms = "The phone number invalid, please retry. ";} 
        
                              
  


   else if(strlen($pwd)<6){
                 $mes='<script type="text/javascript">
        alert("The password provided is less than five characters, please make sure your password is more than five characters.");
        </script>';
          $ms = "The password provided is less than five characters, please make sure your password is more than five characters. ";} 
  
      

      else if($pwd!= $rpwd){
        $mes='<script type="text/javascript">
        alert("The password and confirm password are not the same. Please retry.");
        </script>';
         $ms = "The password and confirm password are not the same. Please retry. ";} 

      else { 
 

 $new = "UPDATE  applicants SET fulln='$fulln', fon='$fon', pwd='$pwd', hpwd='$hpwd', prog='$prog',course='$course', dreg='$dreg', pix='$pix' , statuz='$statuz' WHERE emal ='$plicantmail'"; 
 
if (mysqli_query($conn, $new)) {
  $mes='<script type="text/javascript">
        alert("Details successfully edited and saved.");
        </script>';
         $ms = "Details successfully edited and saved. ";

 

         header("Location: home.php");
       }


else{

       

  $mes='<script type="text/javascript">
        alert("update not successful please retry.");
        </script>';
         $ms = "update not successful please retry. ";} 

 
         

            }
          }



    




































?>




































<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:08 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>EDIT APPLICANTS DETAILS.
      </title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>

   <body class="hold-transition sidebar-mini">
       <?php if (!empty($mes)){echo $ms;}?>
   <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index-2.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                     <input type="search" value="" placeholder="Search.." />
                     <button type="submit" class="btn btn-add">Search...</button>
                  </form>
               </div>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary">5</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li >
                                    <!-- start Orders -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>polo shirt</h4>
                                       <p><strong>total item:</strong> 21
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Kits</h4>
                                       <p><strong>total item:</strong> 11
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Football</h4>
                                       <p><strong>total item:</strong> 16
                                       </p>
                                    </a>
                                 </li>
                                 <li class="nav-list">
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Sports sheos</h4>
                                       <p><strong>total item:</strong> 10
                                       </p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Messages -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- start message -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Ronaldo</h4>
                                       <p>Please oreder 10 pices of kits..</p>
                                       <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Leo messi</h4>
                                       <p>Please oreder 10 pices of Sheos..</p>
                                       <span class="badge badge-info badge-massege"><small>6 days ago</small>
                                       </span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left" >
                                          <img src="assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Modric</h4>
                                       <p>Please oreder 6 pices of bats..</p>
                                       <span class="badge badge-info badge-massege"><small>1 hour ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar4.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Salman</h4>
                                       <p>Hello i want 4 uefa footballs</p>
                                       <span class="badge badge-danger badge-massege">
                                       <small>6 days ago</small>
                                       </span>  
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Sergio Ramos</h4>
                                       <p>Hello i want 9 uefa footballs</p>
                                       <span class="badge badge-info badge-massege"><small>5 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Notifications -->
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Tasks -->
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-note2"></i>
                        <span class="label label-danger">6</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-success pull-right">50%</span>
                                       <h3><i class="fa fa-check-circle"></i> Theme color should be change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-warning pull-right">90%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix Error and bugs</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-danger pull-right">80%</span>
                                       <h3><i class="fa fa-check-circle"></i> Sidebar color change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-info pull-right">30%</span>   
                                       <h3><i class="fa fa-check-circle"></i> font-family should be change</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-success pull-right">60%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix the database Error</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-info pull-right">20%</span>
                                       <h3><i class="fa fa-check-circle"></i> data table data missing</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Help -->
                     <li class="dropdown dropdown-help hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-line-chart"></i> Networking</a>
                           </li>
                           <li><a href="#"><i class="fa fa fa-bullhorn"></i> Lan settings</a></li>
                           <li><a href="#"><i class="fa fa-bar-chart"></i> Settings</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-wifi"></i> wifi</a>
                           </li>
                        </ul>
                     </li>
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-user"></i> User Profile</a>
                           </li>
                           <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="index-2.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Customers</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="add-customer.html">Add Customer</a></li>
                        <li><a href="clist.html">List</a></li>
                        <li><a href="group.html">Groups</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-basket"></i><span>Transaction</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="deposit.html">New Deposit</a></li>
                        <li><a href="expense.html">New Expense</a></li>
                        <li><a href="transfer.html">Transfer</a></li>
                        <li><a href="view-tsaction.html">View transaction</a></li>
                        <li><a href="balance.html">Balance Sheet</a></li>
                        <li><a href="treport.html">Transfer Report</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-cart"></i><span>Sales</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="invoice.html">Invoices</a></li>
                        <li><a href="ninvoices.html">New Invoices</a></li>
                        <li><a href="recurring.html">Recurring invoices</a></li>
                        <li><a href="nrecurring.html">New Recurring invoices</a></li>
                        <li><a href="quote.html">quotes</a></li>
                        <li><a href="nquote.html">New quote</a></li>
                        <li><a href="payment.html">Payments</a></li>
                        <li><a href="taxeport.html">Tax Rates</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-book"></i><span>Task</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="rtask.html">Running Task</a></li>
                        <li><a href="atask.html">Archive Task</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-bag"></i><span>Accounting</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="cpayment.html">Client payment</a></li>
                        <li><a href="emanage.html">Expense management</a></li>
                        <li><a href="ecategory.html">Expense Category</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-file-text"></i><span>Report</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="preport.html">Project Report</a></li>
                        <li><a href="creport.html">Client Report</a></li>
                        <li><a href="ereport.html">Expense Report</a></li>
                        <li><a href="incomexp.html">Income expense comparesion</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-bell"></i><span>Attendance</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="thistory.html">Time History</a></li>
                        <li><a href="timechange.html">Time Change Request</a></li>
                        <li><a href="atreport.html">Attendance Report</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-edit"></i><span>Recruitment</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="jpost.html">Jobs Posted</a></li>
                        <li><a href="japp.html">Jobs Application</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-basket"></i><span>payroll</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="salary.html">Salary Template</a></li>
                        <li><a href="hourly.html">Hourly</a></li>
                        <li><a href="managesal.html">Manage salary</a></li>
                        <li><a href="empsallist.html">Employee salary list</a></li>
                        <li><a href="mpayment.html">Make payment</a></li>
                        <li><a href="generatepay.html">Generate payslip</a></li>
                        <li><a href="paysum.html">Payroll summary</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-bitbucket-square"></i><span>Stock</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="stockcat.html">Stock category</a></li>
                        <li><a href="manstock.html">Manage Stock</a></li>
                        <li><a href="astock.html">Assign stock</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-ticket"></i><span>Tickets</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="ticanswer.html">Answered</a></li>
                        <li><a href="ticopen.html">Open</a></li>
                        <li><a href="iprocess.html">Inprocess</a></li>
                        <li><a href="close.html">CLosed</a></li>
                        <li><a href="allticket.html">All Tickets</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-list"></i>
                     <span>Utilities</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="ativitylog.html">Activity Log</a></li>
                        <li><a href="emailmes.html">Email message log</a></li>
                        <li><a href="systemsts.html">System status</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-bar-chart"></i><span>Charts</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li class=""><a href="charts_flot.html">Flot Chart</a></li>
                        <li><a href="charts_Js.html">Chart js</a></li>
                        <li><a href="charts_morris.html">Morris Charts</a></li>
                        <li><a href="charts_sparkline.html">Sparkline Charts</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-briefcase"></i>
                     <span>Icons</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="icons_bootstrap.html">Bootstrap Icons</a></li>
                        <li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>
                        <li><a href="icons_flag.html">Flag Icons</a></li>
                        <li><a href="icons_material.html">Material Icons</a></li>
                        <li><a href="icons_weather.html">Weather Icons </a></li>
                        <li><a href="icons_line.html">Line Icons</a></li>
                        <li><a href="icons_pe.html">Pe Icons</a></li>
                        <li><a href="icon_socicon.html">Socicon Icons</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-list"></i> <span>Other page</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="forget_password.html">Forget password</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="505.html">505 Error</a></li>
                        <li><a href="blank.html">Blank Page</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-bitbucket"></i><span>UI Elements</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="tree-view.html">Tree View</a></li>
                        <li><a href="progressbars.html">Progressber</a></li>
                        <li><a href="list.html">List View</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="icheck_toggle_pagination.html">iCheck, Toggle, Pagination</a></li>
                        <li><a href="labels-badges-alerts.html">Labels, Badges, Alerts</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-gear"></i>
                     <span>settings</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="gsetting.html">Genaral settings</a></li>
                        <li><a href="stfsetting.html">Staff settings</a></li>
                        <li><a href="emailsetting.html">Email settings</a></li>
                        <li><a href="paysetting.html">Payment</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="company.html">
                     <i class="fa fa-home"></i> <span>Companies</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="holiday.html">
                     <i class="fa fa-stop-circle"></i> <span>Public Holiday</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="user.html">
                     <i class="fa fa-user-circle"></i><span>User</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="items.html">
                     <i class="fa fa-file-o"></i><span>Items</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="department.html">
                     <i class="fa fa-tree"></i><span>Departments</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="document.html">
                     <i class="fa fa-file-text"></i> <span>Documents</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="train.html">
                     <i class="fa fa-clock-o"></i><span>Training</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="calender.html">
                     <i class="fa fa-calendar"></i> <span>Calender</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="notice.html">
                     <i class="fa fa-file-text"></i> <span>Notice Board</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="message.html">
                     <i class="fa fa-envelope-o"></i> <span>Message</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="note.html">
                     <i class="fa fa-comment"></i> <span>Notes</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
               </ul>
            </div>
             <?php require_once("sidebar.php") ?>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1> Welcome, <?php echo $plicantfulln;?></h1>
                  <small>Please edit your details</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                               
                           </div>
                        </div>

                        <div class="panel-body">
                           <form action="" method="post">                              
                             <div class="form-group ">
                                    <label>Fullname</label>
                                    <input type="text" value="<?php echo $fulln2;?>" id="username" class="form-control" name="fulln">
                                  
                                </div>

                               

                                 <div class="form-group ">
                                    <label>phone</label>
                                    <input type="text" value="<?php echo $fon2;?>" id="username" class="form-control" name="fon">
                                  
                                </div>

                                
                                
                                 <div class="form-group" >
                                    <label>Course</label> <?php echo 'You selected' .$course2;?> <br>
                                    <select class="form-control" name="course">
                                    <option>click to select </option>  
          <?php $queryt = mysqli_query($conn,"SELECT * FROM courses");
        while ($row=mysqli_fetch_assoc($queryt)) {
                    $cuss = $row['courses'];
 
  ?>

                                    <option value="<?php echo $cuss;?>"><?php echo $cuss;?></option> 
                                      <?php } ?>
   
                                  </select>
                                      
                                  </div>

                                <div class="form-group">
                                 <label>Select program</label><?php echo 'You selected'.$prog2;?> 
                                 <select class="form-control" name="prog">
                                     <option>click to select</option>
                                    <option>ND full time</option>
                                    <option>ND parttime</option>
                                    <option>HND fulltime</option>
                                    <option>HND parttime</option>
                                    
                                                                 </select>
                              </div>

                               
                               
                            </div>
                              <div class="form-check">
                                 <label>Status</label><br><?php echo 'You selected' .$statuz2;?><br>
                                 <label class="radio-inline">
                                 <input type="radio" name="statuz" value="admitted" checked="checked">Admitted</label>
                                 <label class="radio-inline"><input type="radio" name="statuz" value="not admitted" >Not admitted</label>
                              </div>
                              <div class="reset-button">
                                 
                                 <button type="submit" name ="submit" class="btn btn-success">Save</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2016-2017 <a href="#">thememinister</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>

<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:08 GMT -->
</html>

