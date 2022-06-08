<?php
   
  $sessmail = $_SESSION['usmal'];
      
  $sefulln = $_SESSION['fulln'];

if ($sessmail == "" || $sefulln == ""){header("Location:logout.php");}

?>