<?php 
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
		if($name != ""){
			echo $name;
		}else{
			echo "Null value...";
		}
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>NAME</b></legend>
			<input type="text" name="myname" value=""/><br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
