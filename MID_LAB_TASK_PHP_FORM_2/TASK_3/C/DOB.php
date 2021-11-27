<?php 
	
	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['MyDate'];
		$month = $_REQUEST['MyMonth'];
		$year = $_REQUEST['MyYear'];
	}

?>

<html>
<head>
	<title>Date of Birth</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend><b>DATE OF BIRTH</b></legend>
		    &nbsp &nbsp dd &nbsp &nbsp &nbsp &nbsp &nbsp mm &nbsp &nbsp &nbsp &nbsp &nbsp yyyy<br/>
			<input type="text" name="MyDate" value="<?php if(isset($date)){ echo $date;} ?>" size="2" maxlength="2"> / 
			<input type="text" name="MyMonth" value="<?php if(isset($month)){ echo $month;} ?>" size="2" maxlength="2"> /
			<input type="text" name="MyYear" value="<?php if(isset($year)){ echo $year;} ?>" size="4" maxlength="4"><br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
