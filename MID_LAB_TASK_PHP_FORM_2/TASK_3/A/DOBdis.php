<?php 
	$date = $_REQUEST['MyDate'];
	$month = $_REQUEST['MyMonth'];
	$year = $_REQUEST['MyYear'];


	if($date != "" && $month !="" && $year !=""){
		echo $date . "/" . $month . "/" . $year;
	}else{
		echo "Null value...";
	}

?>