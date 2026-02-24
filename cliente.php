<?php 
$json = file_get_contents("http://localhost/servizo.php");
$datos = json_decode($json, true);
echo "<h1>Información do Servizo</h1>";
echo "<p>Hora: {$datos['hora']} </p>";
echo "<p>Servidor: {$datos['servidor']}</p>";
?>