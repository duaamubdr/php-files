<?php
require "init.php";

$user_id = $_GET["user_id"];
$project_id = $_GET["project_id"];
$pro_order = $_GET["pro_order"];

$sql = "select * from stu_selection `user_name` ='$user_name'  ";
$result  = mysqli_query($con , $sql);



$sql = "insert into stu_selection(user_id,project_id,pro_order) values ('$user_id','$project_id','$pro_order');";
     if(mysqli_query($con,$sql))
	 {
		 $status ="ok";	 
	 }
	else
	{
		$status ="error";
	}
	echo json_encode(array("response"=>$status));
	mysqli_close($con);	

?>