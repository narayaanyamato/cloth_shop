<!DOCTYPE html>
<html>
  <body>
  <form method="POST" action="" enctype="multipart/form-data">
  Upload file: <input type="file" name="file123">
  <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="send" name="sub">
  </form>
  </body>
</html>

<?php
 

   if(isset($_POST['sub']))
{
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="ctoth_shop";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn)
  {
     die("connection failed: ". mysqli_connect_error());
  }

   $fname=0;

      if(is_uploaded_file($_FILES['file123']['tmp_name']))
   {
   $fname=$_FILES['file123']['name'];
  
   if(move_uploaded_file($_FILES["file123"]["tmp_name"],"upload/$fname"))
   echo "file is moved";
   else
   echo "file is not moved";
  }

    
  

  $sql="INSERT into search(imgpath) values('$fname')";

  mysqli_query($conn,$sql);

  mysqli_close($conn);

}

?>
