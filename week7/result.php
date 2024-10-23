<?php
var_dump($_POST);
$name = $_POST['name'];  
$email = $_POST['email']; 
echo json_encode($_POST);
// var_export();
?>