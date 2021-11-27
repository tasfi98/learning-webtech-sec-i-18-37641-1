<?php 
	$gender = $_REQUEST['Gender'];


	if($gender != ""){
		echo $gender;
	}else{
		echo "Null value...";
	}

?>