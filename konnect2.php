
<?php

 $alumnamail = $_SESSION['emal'];
 $alumnamail2 = $_SESSION['hemal'];
 $alumnafulln=$_SESSION['fulln'];

 
    if ($alumnamail == "" || $alumnamail2  == ""){header("Location:logout2.php");}

   // #9d5628 custech

     $resultt = mysqli_query($conn, "SELECT *  FROM yabaweb_alumni_db WHERE emal = '$alumnamail' AND hemal = '{$alumnamail2}'");
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
 
                           
                            $disab1 =$row['disab'];
                            $disadet1 =$row['disadet'];
                            $dgrad1 = $row['dgrad'];
                            $pix1   =$row['pix'];
                            $maritx1 =$row['marit'];
                            $natn1 =$row['natn'];
                            
                            $pstate1 =$row['pstate'];
                            $dreg1 =$row['dreg'];
                            $statuz1 =$row['statuz'];
                            


         $alumnafulln1=$sname1.' '.$fname1.' '.$oname1;
        
        $view="viewbiodata.php";




      $resultt2 = mysqli_query($conn, "SELECT t1.lga, t2.lga, t2.state FROM yabaweb_alumni_db as t1 inner join mytable as t2 on t1.lga=t2.id WHERE emal = '$alumnamail' AND hemal = '{$alumnamail2}'");    
        while ($row=mysqli_fetch_assoc($resultt2)) {

 $lga1 =$row['lga'];
 $state1=$row['state'];
      }
     
    
}






if(isset($_POST["delete"])){
 $crease=trim(strip_tags($_POST['crease']));
 

$sql = "DELETE FROM academhist WHERE id  IN ($crease)";

 if($conn->query($sql) === TRUE){ 
  echo '<script type="text/javascript">
        alert("academic data successfully deleted.");
        window.location.href="academichist.php";
        </script>';
       

} 
}



   if(isset($_POST["delete3"])){
 $crease3=trim(strip_tags($_POST['crease3']));
 

$sql3 = "DELETE FROM work WHERE id  IN ($crease3)";

 if($conn->query($sql3) === TRUE){ 
  echo '<script type="text/javascript">
        alert("work data successfully deleted.");
        window.location.href="workhist.php";
        </script>';
       

} echo "Error deleting record: " . $mysqli->error; 
}

          
 if(isset($_POST["delete4"])){
 $crease4=trim(strip_tags($_POST['crease4']));
 

$sql4 = "DELETE FROM gala WHERE id  IN ($crease4)";

 if($conn->query($sql4) === TRUE){ 
  echo '<script type="text/javascript">
        alert("gallery picture successfully deleted.");
        window.location.href="galleryshow.php";
        </script>';
       

} echo "Error deleting record: " . $mysqli->error; 
}




          
 if(isset($_POST["delete5"])){
 $crease5=trim(strip_tags($_POST['crease5']));
 

$sql5 = "DELETE FROM profhist WHERE id  IN ($crease5)";

 if($conn->query($sql5) === TRUE){ 
  echo '<script type="text/javascript">
        alert("professional history successfully deleted.");
        window.location.href="profhist.php";
        </script>';
       

} echo "Error deleting record: " . $mysqli->error; 
}




     //    $genap = 'genap.php';     
?>