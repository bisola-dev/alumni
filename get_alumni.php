<?php
require_once "konnect.php";
require_once "adminkonnect.php";

$sqlrt  = "SELECT id,CONCAT(sname,' ', fname,' ',oname) AS FullName, emal,dcourse, dgrad, pix,statuz FROM yabaweb_alumni_db";
$result = $conn->query($sqlrt);

$arr_users = array();
if ($result !== false && $result->num_rows > 0) {

    foreach ($result as $alumnus){
$arr_users[] = $alumnus;
    }
$alumni_data = array(
    "sEcho"                => 1,
    "iTotalRecords"        => count($arr_users),
    "iTotalDisplayRecords" => count($arr_users),
    "aaData"               => $arr_users);
echo json_encode($alumni_data);
}

?>