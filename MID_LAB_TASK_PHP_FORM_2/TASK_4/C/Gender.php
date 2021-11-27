<?php 
	
	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['Gender'];
	}

?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend><b>GENDER</b></legend>
			<input type="radio" name="Gender" value="<?php if(isset($gender)){ echo "<input type='radio' name'Gender' value=''>Male";} ?>">Male
			<input type="radio" name="Gender" value="Female">Female
			<input type="radio" name="Gender" value="Other">Other<br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
