<?php
$email="";
if(isset($_REQUEST['submit'])){
	$email=$_REQUEST['email'];
	if($email!=""){
		if (strpos($email,"@")>1) {
			echo $email;
		}
		else{
			echo "B. without @ it cannot be a valid email address";
		}
	}
	else{
		echo"A. Email Cannot be empty
";
	}
}
else{
	echo "something went wrong";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend><h3>Email</h3></legend>

	 <input type="text" name="email" value="<?php echo $email; ?>" /><br><br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>