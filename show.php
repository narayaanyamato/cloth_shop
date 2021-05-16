


<?php



$servername="localhost";
  $username="root";
  $password="";
  $dbname="ctoth_shop";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn)
  {
     die("connection failed: ". mysqli_connect_error());
  }


 $sql="SELECT * FROM `search`";
  $result=mysqli_query($conn,$sql);

  if (mysqli_num_rows($result)>0) {
  	# code...

  	while ($row=mysqli_fetch_assoc($result))
  	 {

  	 	  $img=$row['imgpath'];
  	   
  	   echo "Id:-"  .$row['id'].   "<br>"   ;

  	   echo '<img src="upload/' .$row['imgpath'].' " width="300px" height="300px" >';
  	}
  }



?>




  <img src="upload/<?php  echo $img ; ?>">