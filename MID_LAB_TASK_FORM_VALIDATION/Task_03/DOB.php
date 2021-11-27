<?php 
	
	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['MyDate'];
	$month = $_REQUEST['MyMonth'];
	$year = $_REQUEST['MyYear'];


	if($date != "" && $month !="" && $year !=""){
		if($date>=1 && $date<=31){
			if ($month>=1 && $month<=12) {
				if ($year>=1953 && $year<=1998) {
					echo $date . "/" . $month . "/" . $year;
				}
				else{
					echo "Please Enter year from 1953 to 1998";
				}	
			}
			else{
					echo "Please Enter month from 1 to 12";
				}
		}
		else{
			echo "Please Enter date from 1 to 31";
		}
	}
	else{
		echo "Null value...";
	}

	}

?>


<html>
<head>
	<title>Date of Birth</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>DATE OF BIRTH</b></legend>
			&nbsp &nbsp dd &nbsp &nbsp &nbsp &nbsp &nbsp mm &nbsp &nbsp &nbsp &nbsp &nbsp yyyy<br/>
			<input type="text" name="MyDate" value="" size="2" maxlength="2"> / 
			<input type="text" name="MyMonth" value="" size="2" maxlength="2"> /
			<input type="text" name="MyYear" value="" size="4" maxlength="4"><br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>