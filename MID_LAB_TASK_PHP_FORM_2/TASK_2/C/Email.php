<?php 
	
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
	}

?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend><b>EMAIL</b></legend>
			<input type="Email" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/><br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
