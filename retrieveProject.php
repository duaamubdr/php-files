<?php
require "init.php";


	$sql = "select * from supervisor";
	$res = mysqli_query($con , $sql);
	
	$result=array();
	while($row =mysqli_fetch_array($res))
		
	{
		array_push($result,array('project_id' => $row['0'],'supervisorName' => $row['1'],'projectName' => $row['2'] ,'brief' => $row['3']));
    }

	echo json_encode(array("projects"=>$result));
	

	mysqli_close($con);	
?>