<?php

$operator_name = trim($_POST['name_operator']);
$operator_code = trim($_POST['operator_code']);
if($operator_name == NUll|| $operator_code == NULL){
	$message ='NULL NOT ALLOWED';
$msg = "<p style='color:red;'>".$message."</p>";
echo $msg ;
}
$server = 'localhost';
$user = 'root';
$pass = '_your_db_password';
$dbname = 'operators';
$conn = mysqli_connect($server,$user,$pass,$dbname);
$sql = "INSERT INTO details (operator_name,operator_code) VALUES ('$operator_name','$operator_code')";
$result = mysqli_query($conn,$sql);

if($result){
$message =  'Operator Resgistered Successfully';
$msg = "<p style='color:green;'>".$message."</p>";
echo $msg;



}else{
$message =  'Operator Resgistration Failed';
$msg = "<p style='color:red;'>".$message."</p>";
echo $msg;
}


?>