<?php 
$json = file_get_contents("http://localhost/servizo.php");
$datos = json_decode($json, true);
?>