<?php
require "init.php";

$user_name = $_GET["user_name"];
$user_password = $_GET["user_password"];


$sql = "select * from login_info where `user_name` ='$user_name' and `user_password` ='$user_password'";
$result  = mysqli_query($con , $sql);


if (!mysqli_num_rows($result)>0)
{
	$status = "failed";
	echo json_encode(array("response"=>$status));
}
else
{
	$row =mysqli_fetch_assoc($result);
	$userType = $row['userType'];
	$user_id=$row['user_id'];
	$status ="ok";
	
	echo json_encode(array("response"=>$status,"userType"=>$userType
	,"user_id"=>$user_id));
	
}
mysqli_close($con);


?>
