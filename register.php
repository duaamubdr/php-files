<?php
require "init.php";

$user_id = $_GET["user_id"];
$user_name = $_GET["user_name"];
$user_password = $_GET["user_password"];
$user_type = $_GET["userType"];
$average = $_GET["average"];


$sql = "select * from login_info where `user_id` ='$user_id' or `user_password` ='$user_password'";
$result  = mysqli_query($con , $sql);

if (mysqli_num_rows($result)>0)
{
	$status = "exist";
}
else
{
	$sql = "insert into login_info(user_id,user_name,user_password,userType,average) values ('$user_id','$user_name','$user_password','$user_type','$average');";
     if(mysqli_query($con,$sql)){
		 $status ="ok";
		 
	 }
	else{
		$status ="error";
	}
	}
	echo json_encode(array("response"=>$status));
	mysqli_close($con);	
?>