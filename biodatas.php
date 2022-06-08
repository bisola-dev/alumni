<?php 
require_once('konnect.php');
require_once('konnect2.php');
    //$delec = 'dashboardapp.php';

  if (isset($_POST['clok'])){

   $gendx = mysqli_real_escape_string($conn, strip_tags($_POST['gend']));
   $dobx = mysqli_real_escape_string($conn, strip_tags($_POST['dob']));
   $ajex = mysqli_real_escape_string($conn, strip_tags($_POST['aje']));
   $snamex = mysqli_real_escape_string($conn, strip_tags($_POST['sname']));
   $onamex = mysqli_real_escape_string($conn, strip_tags($_POST['oname']));
   $fonx = mysqli_real_escape_string($conn, strip_tags($_POST['fon']));
   $addyx = mysqli_real_escape_string($conn, strip_tags($_POST['addy']));
   $origx = mysqli_real_escape_string($conn, strip_tags($_POST['orig']));
   $lgax = mysqli_real_escape_string($conn, strip_tags($_POST['lga']));
   $natnx = mysqli_real_escape_string($conn, strip_tags($_POST['natn']));
   $nkinx = mysqli_real_escape_string($conn, strip_tags($_POST['nkin']));
   $nkfonx = mysqli_real_escape_string($conn, strip_tags($_POST['nkfon']));
   $disabx = mysqli_real_escape_string($conn, strip_tags($_POST['disab']));
   $disadetx = mysqli_real_escape_string($conn, strip_tags($_POST['disadet']));
   $maritx = mysqli_real_escape_string($conn, strip_tags($_POST['marit']));
   $panamex = mysqli_real_escape_string($conn, strip_tags($_POST['paname']));
   $paddyx = mysqli_real_escape_string($conn, strip_tags($_POST['paddy']));
   $pafonx = mysqli_real_escape_string($conn, strip_tags($_POST['pafon']));

   $mysecx = mysqli_real_escape_string($conn, strip_tags($_POST['mysec']));
   $olevx = mysqli_real_escape_string($conn, strip_tags($_POST['olev']));
   $exmnox = mysqli_real_escape_string($conn, strip_tags($_POST['exmno']));
   $exmyrx = mysqli_real_escape_string($conn, strip_tags($_POST['exmyr']));
   $exmpdx = mysqli_real_escape_string($conn, strip_tags($_POST['exmpd']));
   $jregx = mysqli_real_escape_string($conn, strip_tags($_POST['jreg']));
   $jscox = mysqli_real_escape_string($conn, strip_tags($_POST['jsco']));
   $progix = mysqli_real_escape_string($conn, strip_tags($_POST['progi']));

    
     $mysqlux = mysqli_query($conn, "UPDATE applicants SET gend = '$gendx', dob = '$dobx', aje = $ajex, sname = '$snamex', oname = '$onamex', addy = '$addyx', orig = '$origx', lga = '$lgax', natn = '$natnx', nkin = '$nkinx', nkfon = '$nkfonx', disab = '$disabx', 
     	disadet = '$disadetx', marit = '$maritx', paname = '$panamex', paddy = '$paddyx', fon = '$fonx', pafon = '$pafonx', mysec = '$mysecx', olev = '$olevx', exmno = '$exmnox', exmyr = '$exmyrx', exmpd = '$exmpdx', jreg = '$jregx', jsco = $jscox, progi = '$progix', subform = 1 WHERE emal = '$mymal'"); 
            
    echo'<script type="text/javascript">
        alert("Congratulations! you have successfully updated, proceed to olevel grade.")
        window.location.href="dashboardapp.php";
        </script>';
        //header("Location:$delec"); 
   }

 

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Application form <?php echo $gendx; ?></title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="../webadmin/inc/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <script type="text/javascript" src="jquery.js"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- /Header -->
			
			<!-- Sidebar -->
              <?php require_once('sidebar.php');?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Fill the Application form appropriately</h3>
								<ul class="breadcrumb">
					 				 
									<li class="breadcrumb-item active">Dear <?php echo $fully; ?>, you are required to provide accurate information on the available fields.</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row"> <h4>Form A :: Biodata</h4>
						<div class="col-md-12">
							<form action="" method="POST">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Application ID <span class="text-danger"></span></label>
												<input type="text" value="<?php echo $appid1;?>" class="form-control" disabled>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Email address <span class="text-danger"></span></label>
												<input type="text" value="<?php echo $mymal;?>" class="form-control" disabled>
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Surname <span class="text-danger"></span></label>
												<input type="text" name="sname" maxlength="50" value="<?php echo $sname1;?>" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Other names <span class="text-danger"></span></label>
												<input type="text" name="oname" value="<?php echo $onames1;?>" maxlength="70" class="form-control" required>
										</div>
									 
									</div>

 

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Phone number <span class="text-danger"></span></label>
												<input type="text" name="fon" maxlength="15" value="<?php echo $fon1;?>" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Gender (<?php echo $gend1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="gend" required>
													<option value="<?php echo $gend1;?>">-- Select gender--</option>
													<option value="Female">Female</option>
													<option value="Male">Male</option>
									    	</select>
										</div>
									</div>
 
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Date of birth (<?php echo $dob1;?>)<span class="text-danger">*</span></label>
											 <input type="date" name="dob" value="<?php echo $dob1;?>" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Age <span class="text-danger"></span></label>
											 <input type="number" name="aje" value="<?php echo $aje1;?>" maxlength="2" class="form-control" required>
										</div>
									</div>

										<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label>Home address <span class="text-danger"></span></label>
												<input type="text" name="addy" value="<?php echo $addy1;?>" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>State of origin (<?php echo $orig1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" id="sel_state" name="stat" required>
													<option value="<?php echo $orig1;?>">-- Select --</option>
													<?php
											 $staty = mysqli_query($conn,"SELECT * FROM state");
											while($row = mysqli_fetch_assoc($staty)){
											 	  $star = $row['states'];
												  $stid = $row['id'];	 
										echo "<option value = '".$stid."'>".$star."</option>";
										}
										 ?>
													 
											 </select>
										</div>
									</div>

									 <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Local Government Area (<?php echo $lga1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" id='sel_lga' name="lga" required>
										 <option value="<?php echo $lga1;?>">-- Select LGA--</option>
													 
											 </select>
											 <script type = "text/javascript">
											$(document).ready(function(){

											$('#sel_state').change(function(){	
											 var staty = $(this).val();
											 
											$.ajax({
											 url:'getLga.php',
											 type: 'post',
											 data: {staty:staty},
											 dataType: 'json',
											success: function(response){

											var len = response.length;

											$('#sel_lga').find('option').not(':first').remove();

											for(var i=0; i<len; i++){
												var id = response[i]['id'];
												var name = response[i]['lga'];

												$('#sel_lga').append("<option value='"+id+"'>"+name+"</option>");
											}

											}
											})

											})

											})
											</script>
										</div>
									</div>

									 <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Nationality (<?php echo $natn1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="natn" value="<?php echo $natn1;?>" required>
													<option value="">-- Select--</option>
													<option value="Nigerian">Nigerian</option>
													<option value="Non-Nigerian">Non-Nigerian</option>
													 
											 </select>
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Name of next-of-kin<span class="text-danger"></span></label>
												<input type="text" name="nkin" value="<?php echo $nkin1;?>" maxlength="70" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Next-of-kin phone number <span class="text-danger"></span></label>
												<input type="text" name="nkfon" value="<?php echo $nkfon1;?>" maxlength="15" class="form-control" required>
										</div>
									</div>

 								   <div class="col-sm-6 col-md-3">
									<div class="form-group">
											<label>Are you disabled? (<?php echo $disab1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="disab" required>
													<option value="<?php echo $disab1;?>">-- Select--</option>
													<option value="No">No</option>
													<option value="Yes">Yes</option>
													 
											 </select>
										</div>
									</div>

								   <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>If disabled, state the type.<span class="text-danger"></span></label>
												<input type="text" name="disadet" value="<?php echo $disadet1;?>" class="form-control">
										</div>
									</div>

									  <div class="col-sm-6 col-md-3">
									<div class="form-group">
										 <label>Marital status (<?php echo $marit1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="marit" required>
											 <option value="<?php echo $marit1;?>">-- Select--</option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
													<option value="Divorced">Divorced</option>
											 </select>
										</div>
									</div>
 
									 <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Parents/Guardians name<span class="text-danger"></span></label>
											 <input type="text" name="paname" value="<?php echo $paname1;?>" maxlength="120" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Parents/Guardians phone no. <span class="text-danger"></span></label>
												<input type="text" name="pafon" value="<?php echo $pafon1;?>" maxlength="15" class="form-control" required>
										</div>
									</div>

									 <div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label>Parents/Guardians Address<span class="text-danger"></span></label>
												<input type="text" name="paddy" value="<?php echo $paddy1;?>" maxlength="120" class="form-control" required>
										</div>
									</div>

 	 
								</div>
							 
						</div>
					</div>

  <hr><hr>

					<!-- Page Header -->
				<div class="row"> <h4>Form B :: Education history</h4>
						<div class="col-md-12">
							 
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="form-group">
											<label>Secondary school attended (Name and address)<span class="text-danger"></span></label>
												<input name="mysec" type="text" maxlength="200" value="<?php echo $mysec1;?>" class="form-control">
										</div>
									</div>

									 <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>O'level  examination (<?php echo $olev1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="olev" required>
										      <option value="<?php echo $olev1;?>">-- Select --</option>
													<option value="WAEC">WAEC</option>
													<option value="NECO">NECO</option>
													<option value="NABTEB">NABTEB</option>
													 
											 </select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Exam number<span class="text-danger"></span></label>
												<input type="text" name="exmno" maxlength="40" value="<?php echo $exmno1;?>" class="form-control" required>
										</div>
									</div>


								 <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Exam year (<?php echo $exmyr1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="exmyr" required>
											   <option value="<?php echo $exmyr1;?>">-- Select --</option>
													<option value="2020">2020 </option>
													<option value="2019">2019</option>
													<option value="2018">2018</option>
													 
											 </select>
										</div>
									</div>

									 <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Exam period (<?php echo $exmpd1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="exmpd" required>
											  <option value="<?php echo $exmpd1;?>">-- Select --</option>
											  <option value="May/June">May/June (School)</option>
											  <option value="November/December">November/December (Private)</option>
													  
											 </select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Jamb registration number<span class="text-danger"></span></label>
												<input type="text" name="jreg" value="<?php echo $jreg1;?>" maxlength="70" class="form-control">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Jamb score<span class="text-danger"></span></label>
												<input type="number" name="jsco" maxlength="3" value="<?php echo $jsco1;?>" class="form-control">
										</div>
									</div>

									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label>Proposed Course of study (<?php echo $progi1;?>)<span class="text-danger"></span></label>
											 <select class="form-control" name="progi" required>
											  <option value="<?php echo $progi1;?>">-- Select course--</option>
													<option value="Medicine & Surgery">Medicine & Surgery</option>
													<option value="Electrical Electronics Engineering">Electrical Electronics Engineering</option>
									    	</select>
										</div>
									</div>
  
								 
								<div class="submit-section">
									<button type="submit" name="clok" class="btn btn-primary submit-btn m-r-10">Submit Bio Data</button>
									 
								</div>
							</form>
						</div>
					</div>


				</div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>