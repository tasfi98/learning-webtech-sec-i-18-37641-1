<?php 
	
	if(isset($_REQUEST['submit'])){
		$degree = $_REQUEST['Degree'];


		if($degree != ""){
			echo $degree;
		}else{
			echo "Null value...";
		}
	}

?>


<html>
<head>
	<title>Degree</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>DEGREE</b></legend>
			<input type="checkbox" name="Degree" value="SSC">SSC
			<input type="checkbox" name="Degree" value="HSC">HSC
			<input type="checkbox" name="Degree" value="BSc">BSc
			<input type="checkbox" name="Degree" value="MSc">MSc<br/>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
