<?php
require_once('konnect.php');
require_once('konnect2.php');


 if (isset($_POST['clok'])){
   $skool = mysqli_real_escape_string($conn, strip_tags($_POST['skool']));
   $yrstart= mysqli_real_escape_string($conn, strip_tags($_POST['yrstart']));
   $yrend = mysqli_real_escape_string($conn, strip_tags($_POST['yrend']));
   $degreex = mysqli_real_escape_string($conn, strip_tags($_POST['degreex']));
   

$query2 = mysqli_query($conn, "SELECT * FROM academhist  WHERE skool='$skool' AND degreex ='$degreex'" );
$num_rows = mysqli_num_rows($query2);

 if (mysqli_num_rows($query2) > 0){ 
echo '<script type="text/javascript">
      alert("This academic data already exist");
        </script>';
     }

 else { 

  $new = mysqli_query($conn,"INSERT INTO academhist(emal, skool,yrstart,yrend,degreex,dreg) VALUES('$alumnamail','$skool','$yrstart','$yrend','$degreex','$dreg')");


  echo'<script type="text/javascript">
        alert("Congratulations! you have successfully saved you academic data.")
        </script>';

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
      <title>Academic history
        .
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
            
                     <!-- Messages -->
                   <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                  
                     
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
                  <h1> Welcome, <?php echo $alumnafulln1;?></h1>
                  <small>Please fill in your academic history</small>
               </div>
            </section>
            <!-- Main c
            
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <h4> Form A :: Academic History</h4> 
                           </div>
                        </div>
           <div class="row"> 
            <div class="col-md-12">
              <div class="panel-body">
              <form action="" method="POST">
               
                  
                    <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label>School Attended <span class="text-danger"></span></label>
                        <input type="text" name="skool" class="form-control" required>
                    </div>

                  </div>




                  <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                      <label>From <span class="text-danger">*</span></label>
                       <input type="date" name="yrstart"  class="form-control" required>
                    </div>
                  </div>



                  <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                      <label>To <span class="text-danger">*</span></label>
                       <input type="date" name="yrend"  class="form-control" required>
                    </div>
                  </div>


                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label>Certificate <span class="text-danger"></span></label>
                        <input type="text" name="degreex"  class="form-control" required >
                    </div>

                  <div class="col-sm-6 col-md-3">
                  <div class="form-group">   
                <div class="submit-section">
                  <button type="submit" name="clok" class="btn btn-primary submit-btn m-r-10">Submit Academic Data</button>
                   </div>
                </div>
              </div>
         </form>
      </div>
   </section>



                       <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>S/N</th>
                                       <th>School Attended</th>
                                       <th>From</th>
                                       <th>To</th>
                                       <th>certificate</th>
                                       <th>Edit</th>
                                       <th>Delete</th>
                                      
                                    </tr>
                                 </thead>
                                 <tbody>

<?php 

         $resultt2 = mysqli_query($conn, "SELECT * FROM academhist WHERE emal = '$alumnamail' ");
            $count = 1;     
        while ($row=mysqli_fetch_assoc($resultt2)) {
                             $academid=$row['id'];
                            $degreex1 =$row['degreex'];
                            $skool1 =$row['skool'];
                            $yrstart1  = $row['yrstart'];
                            $yrend1 =$row['yrend'];

                              $link='editacadem.php?id='.$academid;

  ?>




                                    <tr>
                                       <td><?php echo $count;?></td>
                                       <td><?php echo $skool1;?></td>
                                       <td><?php echo $yrstart1;?></td>
                                        <td><?php echo $yrend1;?></td>
                                       <td><?php echo $degreex1;?></td>



  <td><button type="text"><a href="<?php echo $link;?>">Edit </a></button></td>

                                      <td><form method="POST" action="" >
<input type="hidden"  value= "<?php echo $academid;?>" name="crease">
<p><input type="submit" name="delete" value="delete"> </p>
 
 </form></td>
                                      


                                      
                                    </tr>
                                   <?php $count++;}?> 
                                 </tbody>
                              </table> 
                           </div>
                        </div>
                   
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


  <hr><hr>



                
    <!-- /Main Wrapper -->
    
         <!-- /.content-wrapper -->
          <footer class="main-footer">
            <strong> Copyright &copy; 2021 <a href="#">Yaba college of technology</a>.</strong> All rights reserved.
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

            <script src="assets/js/app.js"></script>
   </body>

<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:08 GMT -->
</html>

