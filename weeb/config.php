<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="registrationform";
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo($username);
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$age=$_POST['age'];
$dob = $_POST['dob'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$cpassword = $_POST['cpassword'];

$register_query = "INSERT INTO `form`(`fname`, `age`, `dob`, `gender`, `phone`, `email`, `username`, `password`, `cpassword`) 
VALUES ('$fname','$age','$dob','$gender','$phone','$email','$user','$pass', '$cpassword')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}

}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}

?>