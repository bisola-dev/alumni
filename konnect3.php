
<?php

 $alumnamail = $_SESSION['emal'];
 $alumnamail2 = $_SESSION['hemal'];
 $alumnafulln=$_SESSION['fulln'];

 
    if ($alumnamail == "" || $alumnamail2  == ""){header("Location:logout2.php");}

   // #9d5628 custech

     $resultt = mysqli_query($conn, "SELECT * FROM yabaweb_alumni_db WHERE emal = '$alumnamail' AND hemal = '{$alumnamail2}'");
      $komo = mysqli_num_rows($resultt);
    
     if ($komo != 1){header("Location:logout2.php");}
                
        while ($row=mysqli_fetch_assoc($resultt)) {
                            $bioid=$row['id'];
                            $oname1=$row['oname'];
                            $fname1=$row['fname'];
                            $sname1 =$row['sname'];
                            $sex1 =$row['sex'];
                            $fon1 =$row['fon'];
                            $dob1  = $row['dob'];
                            $addy1 =$row['addy'];
 
                            $pstate1 =$row['pstate'];
                            $disab1 =$row['disab'];
                            $disadet1 =$row['disadet'];
                            $dgrad1 =$row['dgrad'];
                            $pix1   =$row['pix'];
                            $maritx1 =$row['marit'];
                            $natn1 =$row['natn'];
                            $lga1 =$row['lga'];
                            $dreg1 =$row['dreg'];
                            $statuz1 =$row['statuz'];



         $alumnafulln1=$sname1.' '.$fname1.' '.$oname1;
        
        $view="viewbiodata.php";


$result78= mysqli_query($conn, "SELECT  state.*, mytable.id FROM `state` JOIN mytable ON state.id=mytable.stateid WHERE state.id=$pstate1");
while ($row=mysqli_fetch_assoc($result78)){ 
                            $lga2=$row['lga'];
                       $state2=$row['states'];





               $memmem = mysqli_query($conn, "SELECT divtable.*,divdetails.amount FROM `divtable` JOIN divdetails ON divtable.id = divdetails.divid WHERE divdetails.emal='$staffemal'");   
          while ($row=mysqli_fetch_assoc($memmem)){
                           
                             $divname=$row['divname'];
                             $amount=$row['amount'];
                      


      }
     



    
}







     //    $genap = 'genap.php';     
?>