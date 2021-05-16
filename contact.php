<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Contact  page</title>
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
          
          label
          {
            color: white;
            font-size: 18px;
          }

           .signup 
          {
           
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
            border:1px solid tomato;
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
        
          <div class="col-md-6">
           <h3 class="text-center text-white p-2"  style="border-bottom: 2px solid white">Contact Us</h3>

   <form class="mt-3" name="contact" method="post" onsubmit="return(check());">
     <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputNme" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="text" class="form-control"  id="exampleInputPhone" maxlength="10" name="phone" placeholder="Phone">
  </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Subject</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="subject" rows="3" placeholder="Type some Message.."></textarea>
  </div>


  <button type="submit" name="sub" class="btn btn-primary mb-3">Signin</button>
</form>


 </div>

   <div class="col-md-6 col-xs-12 mt-3" style="font-size: 18px;">
       <p class="text-white  text-center m-0 p-0 f-18">Email: swaynnarayan@gmail.com</p>
       <p class="text-white  text-center p-0 m-0">Phone: +91 7847869140</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23859.526513640052!2d84.56599033242665!3d19.757619198815334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a22c738f42d998d%3A0x399c2c9235687129!2sBori%2C%20Odisha!5e1!3m2!1sen!2sin!4v1620651717005!5m2!1sen!2sin" width="100%" height="400" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
      </div>
   

     
        <br>


        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!---background-->
        <script type="text/javascript" src="js/background.js"></script>

        <script type="text/javascript">
          
          function check()
          {
            //alert();
            if (document.contact.name.value=="") 
            {
                alert('Enter Your Name..');
                return false;
            }

            else
            {
                re = /^[a-zA-Z\s]+$/;

                if (!re.test(document.contact.name.value))
                 {
                  
                 alert("user name can't be spacial symbol and number empty..");
                  return false;
                 }
            }


            if (document.contact.email.value=="")
             {
               
               alert('Enter Your Email Address..');
               return false;
             }

             else
             {
              re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

               if (!re.test(document.contact.email.value))
                {
                   alert("Enter valide  Email Address");
                      return false;
                }
             }


             if (document.contact.phone.value=="") 
             {
               
               alert("Enter Your  Phone Number..");
               return false;
             }
             else
             {
               re=/^[6-9]\d{9}$/

               if (!re.test(document.contact.phone.value))
                {
                   alert("Enter Valide Phone Number..");
                   return false;
                }
             }


          }
        </script>

      <script>
         if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
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
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sub=$_POST['subject'];


  mail($email," Name-$name,Phone:-$phone ", $sub);

  $sql="INSERT into `contact`(name,email,phone,subject) values('$name','$email','$phone','$sub')";
   
   if (mysqli_query($conn,$sql))
    {
     echo "<script>alert('Message Sent Successfully..');   </script>";
   }
  
  mysqli_close($conn); 

}


?>



