<?php 
	
	if(isset($_REQUEST['submit'])){
		$group = $_REQUEST['Bgroup'];


	if($group != ""){
		echo $group;
	}else{
		echo "Null value...";
	}
	}

?>


<html>
<head>
	<title>Blood Group</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>BLOOD GROUP</b></legend>
			<select id="BG" name="Bgroup">
				   <option value="A positive(A+)">A positive(A+)</option>
				   <option value="A negetive(A-)">A negetive(A-)</option>
				   <option value="B positive(B+)">B positive(B+)</option>
				   <option value="B negetive(B-)">B negetive(B-)</option>
				   <option value="AB positive(AB+)">AB positive(AB+)</option>
				   <option value="AB negetive(AB-)">AB negetive(AB-)</option>
				   <option value="O positive(O+)">O positive(O+)</option>
				   <option value="O negetive(O-)">O negetive(O-)</option>
			</select>
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
