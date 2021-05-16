
<?php
session_start();

?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Login  page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/vc-outline-2.jpg" />
        <!-- Core theme CSS (includes Bootstrap)-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!----bootstrap---->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <!---Fontawesome------>
        <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>
        <!---custom css----->
        <link rel="stylesheet" type="text/css" href="css/custom.css">

        <style type="text/css">
          .signup 
          {
            width: 600px;
            height: auto;
            margin: auto;
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
            border:2px solid tomato;

          }
          label
          {
            color: white;
            font-size: 18px;
            padding: 8px;
          }

          @media screen and (max-width: 770px)
          {
            .signup 
          {
            width: 100%;
            height: auto;
            margin: auto;
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
          }
          }
             

          body
          {
            background: url('img/7DK.gif');
            background-repeat: no-repeat;
            background-size: cover;
            margin-bottom: 0px;
          }   
        </style>
    </head>
    <body>

               <nav class="navbar navbar-expand-lg navbar-light bg-warning text-white">
  <a class="navbar-brand" href="#">Vinayak Cloth Shop..</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
     <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="mans.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Men  Wear
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mantop.php">Top wear</a>
          <a class="dropdown-item" href="manbottom.php">Bottom Wear</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="Ladies.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ladies wear
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ladies.php">Top wear</a>
          <a class="dropdown-item" href="ladiesbottom.php">Bottom Wear</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="kids.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kids Wear
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kidstop.php">Top wear</a>
          <a class="dropdown-item" href="ladies_pants.php">Bottom Wear</a>
        </div>
      </li>    
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn bg-danger text-white my-2 my-sm-0" type="submit">Search</button>
    </form>

        <a class="nav-link disabled  " href="logup.php"><i class="fa fa-user-o " aria-hidden="true"></i>My Account</i></a>


        <a class="nav-link disabled" href="addcart.php"><i class="fa fa-shopping-cart" aria-hidden="true">(4)<br>Your cart</i></a>
  </div>
</nav>

        
        <br>

     <div class="container mt-5 mb-5  signup">
       <div class="row">
        <div class="col-md-6 col-xs-12">
          <img src="img/pexels-sam-lion-5709661.jpg" class="m-0 p-0" height="450px " width="100%">
        </div>
          <div class="col-md-6">
           <h3 class="text-center text-white p-2"  style="border-bottom: 2px solid white">Signin</h3>

   <form class="mt-3" method="post" name="signin" onsubmit="return(valide())">
      <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder=" Enter Password">
  </div>
  

  <button type="submit"  name="sub" class="btn btn-primary mb-3">Signin</button><a href="logout.php"  class="ml-3 text-center ">Account Logout</a>   <br><a href="logup.php"  class=" pl-5 mt-0 pt-0 text-center ">Account Logup</a>
</form>


 </div>
    </div>
      </div>
   

     
        <br>
    <br>
    <br>


        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!---background-->
        <script type="text/javascript" src="js/background.js"></script>

        <script type="text/javascript">
          function valide()
          {
            //alert();
            if (document.signin.name.value=="")
             {
              alert("Enter Your User Name..");
              return false;
             }
            

              if (document.signin.email.value=="")
             {
              alert("Enter Your Email Address..");
              return false;
             }
              

            
            if (document.signin.pass.value=="")
             {
              alert("Enter Your password..");
              return false;
             }


          }


        </script>

        <!-- Footer-->
 
        <footer class="py-3 bg-warning">
            <div class="container"><p class="ml-5 text-center text-white">Copyright &copy; Vinayak Cloth Shop.. 2021</p></div>
        </footer>
    </body>
</html>


      <?php 
       
         if (isset($_POST['sub']))
          {
           
            include('db.php');

           $_SESSION['uname']=$_POST['name'];
            
             $email=$_POST['email'];
             $pass=$_POST['pass'];
             $pass=md5($pass);

            $sql="select * from `logup` where email='$email' and pass='$pass'";
            $result=mysqli_query($conn,$sql);

            if (mysqli_num_rows($result)>0)
             {    
                echo '
                <script>  
                alert("Login Sucessfully..");
                 window.open("index.php","_self");
                </script>
                ';
            
            }

            else
            {
              echo '
                <script>  
                alert("Enter valide User Name & Password");
                 window.open("signin.php","_self");
                </script>
                ';
            }
           
         }


  
       ?>



