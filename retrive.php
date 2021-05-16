


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		
		<input type="file" name="file">

		<input type="submit" name="sub">

	</form>

</body>
</html>


<?php
  
  if (is_uploaded_file( $_FILES['file']['tmp_name'] ))
   {
  	
  	$fname=$_FILES['file']['tmp_name'];

  	if(move_uploaded_file($_FILES['file']['tmp_name'],"uploads/$fname" ))
     echo "moved";
  	else
      echo "no";		
   }




?>