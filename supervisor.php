<?php
require "init.php";

$supervisorName = $_GET["supervisorName"];
$projectName = $_GET["projectName"];
$brief = $_GET["brief"];


$sql = "select * from supervisor where `projectName` ='$projectName'";
$result  = mysqli_query($con , $sql);

if (mysqli_num_rows($result)>0)
{
	$status = "exist";
}
else
{
	$sql = "insert into supervisor(supervisorName,projectName,brief) values ('$supervisorName','$projectName','$brief');";
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