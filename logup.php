<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Logup  page</title>
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
            background: rgba(0,0,0,0.3);
            border-radius: 10px;
            border:2px solid white;
         
          }
          label
          {
            color: white;
            font-size: 18px;
          }

          @media screen and (max-width: 770px)
          {
            .signup 
          {
            width: 100%;
            height: auto;
            margin: auto;
            background: rgba(0,0,0,0.3);
            border-radius: 10px;
          }
          }

          body
          {
            background: url('img/60c21387fa69445cc17ef77b93aea220dfec671e_hq.gif');
            background-size: cover;
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

 
     <div class="container mt-5 mb-5 signup">
       <div class="row">
          <div class="col-md-12">
           <h3 class="text-center text-white p-2"  style="border-bottom: 2px solid white">Signup</h3>

            <form class="mt-3" name="Logup" method="post" onsubmit="return(validate());" >
           <div class="form-row">
       <div class="col">
      <label for="First" > First name</label>
      <input type="text" class="form-control" name="fname" id="First" placeholder="First name">
    </div>
    <div class="col">
       <label for="Last">Last name</label>
      <input type="text" class="form-control" id="Last" name="lname" placeholder="Last name">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Conform Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="Conform Password">
  </div>

  <button type="submit" name="sub" class="btn btn-primary mb-3">Signup</button><a href="signin.php"  class="ml-3 ">Account Login</a>
</form>


 </div>
    </div>
      </div>
   

     
        <br>


        <!-- Footer-->
 
        <footer class="py-3 bg-warning">
            <div class="container"><p class="ml-5 text-center text-white">Copyright &copy; Vinayak Cloth Shop.. 2021</p></div>
        </footer>

        <!---validate-->
          <script type="text/javascript">
            // alert();

              function validate()
              {
                //alert();

                if (document.Logup.fname.value =="")
                 {
                   alert("Enter Your First Name");
                   return false;
                 }


                 if (document.Logup.lname.value =="")
                 {
                   alert("Enter Your Last Name");
                   return false;
                 }


                 if (document.Logup.email.value =="")
                 {
                   alert("Enter Your Email Address");
                   return false;
                 }

                 else
                 {

                re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                  
                   if (!re.test(document.Logup.email.value))
                    {
                      
                       alert("Enter valide Email Addrssss");
                       return false;
                    }

                 }





                 if (document.Logup.pass.value =="")
                 {
                   alert("Enter Your Password..");
                   return false;
                 }

                 else
                 {
                  re=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
                  if (!re.test(document.Logup.pass.value))
                   {
                       alert("  Password Must Contain  1)small letters,2)cap. letters,3)at least 8 chars long.4)digits");
                           return false;
                   }
                 }



              
                 if (document.Logup.cpass.value =="")
                 {
                   alert("Enter Your Conform Password");
                   return false;
                 }

                 else
                 {
                  if (document.Logup.cpass.value !=document.Logup.pass.value)
                   {
                     alert("password does not match....");
                       return false;
                   }
                 }

                 //End od validate...

              }
          </script>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
       
    </body>
</html>


<?php
 
  
  if (isset($_POST['sub']))
   {
    
    include('db.php');

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $pass=md5($pass);
  $sql="INSERT into `logup`(fname,lname,email,pass)values('$fname','$lname','$email','$pass')";
  

  if (mysqli_query($conn,$sql))
   {
    
    echo '<script>
             alert("Signup sucessfuly..");
              window.open("signin.php");
             </script>';
  }


  
   mysqli_close($conn);
  }

 ?>



