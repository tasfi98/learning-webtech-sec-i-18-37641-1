<?php 
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
	}

?>

<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend><b>NAME</b></legend>
			<input type="text" name="myname" value="<?php if(isset($name)){ echo $name; }?>
			"/><br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
