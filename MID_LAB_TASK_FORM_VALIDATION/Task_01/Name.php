<?php
  
  $username = "";
  
  if(isset($_REQUEST['submit'])){
    
    $username = $_REQUEST['username'];
    if($username != ""){
      if (str_word_count($username)>1) {
        echo "Successfuly submitted ". $username ;
      }
      else{
          echo "B. Name Contains at least two words";
        }
      
    }
    else{
        echo "A. Name Cannot be empty";
      }
  }else{
    echo 'invalid request';
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
      <legend><h3>Name</h3></legend>

   <input type="text" name="username" value="<?php echo $username; ?>" /><br><hr>
    
        <input type="submit" name="submit" value="Submit">
</fieldset>
                
  </form>
</body>
</html>