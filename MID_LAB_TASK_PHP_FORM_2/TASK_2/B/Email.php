<?php 

	if (isset($_REQUEST['submit'])) {
		$email = $_REQUEST['myemail'];
	if($email != ""){
		echo $email;
	}else{
		echo "Null value...";
	}
	}
	

?>

<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>EMAIL</b></legend>
			<input type="Email" name="myemail" value=""/><br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
