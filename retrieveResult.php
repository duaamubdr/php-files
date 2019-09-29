<?php
require "init.php";


	$sql = "select * from result";
	$res = mysqli_query($con , $sql);
	
	$result=array();
	while($row =mysqli_fetch_array($res))
		
	{
		array_push($result,array('id' => $row['0'],'stu_name' => $row['1'],'pro_id' => $row['2'],'pro_name' => $row['3']));
    }

	echo json_encode(array("result"=>$result));
	

	mysqli_close($con);	
?>