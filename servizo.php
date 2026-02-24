<?php 
header("Content-Type: application/json; charset=UTF-8");
echo json_encode([
    "hora" => date("H:i:S"),
    "servidor" => gethostname()
]);
?>