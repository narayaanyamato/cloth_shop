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
        <title> Home page</title>
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
          table td,th
          {
            color: white;
            border-bottom: 1px solid white;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            padding: 8px;
          }
        </style>
    </head>
    <body>

      
      <!---navbar---->

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
        <!-- Page Content-->
          
            <div class="container">
              <div class="row">
                <div class="col-md-12" style="overflow-x: auto;">
                  <table align="center">
                    <tr>
                      <th>PROUCT IMG</th>
                      <th>PRODUCT NAME</th>
                      <th>PRODUCT PRICE</th>
                      <th>CATOGORY</th>
                    </tr>
                    <tr>
                      <td> <a href="#!"> <a href="#!"><img class="card-img-top" src="img/kid/NC-KSKD-07026012021-Black-Faux-Georgette-Kids-Sharara-Suit.jpg" alt="..." /></a></td>
                      <td>Black-Faux-Georgette-Kids-Sharara-Suit</td>
                      <th>599/-</th>
                      <td>KIDS</td>
                    </tr>

                       <tr>
                      <td> <a href="#!"> <a href="#!"><img class="card-img-top" src="img/man/2453902122017-Navy-Blue-Banarasi-Silk-Indo-Western-Sherwani.jpg" alt="..." /></a></a></td>
                      <td>Navy-Blue-Banarasi-Silk-Indo-Western-Sherwani</td>
                      <th>729/-</th>
                      <td>MALES</td>
                    </tr>

                     <tr>
                      <td><a href="#!"><img class="card-img-top" src="img/female/801119022021-Maroon-Rayon-Kurta-Set-With-Pant.jpg" alt="..." /></a></td>
                      <td>Maroon-Rayon-Kurta-Set-With-Pant</td>
                      <th>840/-</th>
                      <td>FEMALES</td>
                    </tr>

                     <tr>
                      <td> <a href="#!"><img class="card-img-top" src="img/kid/171721032020-Navy-Blue-Jacquard-Readymade-Kids-Indo-Western-Suit.jpg" alt="..." /></a></td>
                      <td>Navy-Blue-Jacquard-Readymade-Kids-Indo-Western-Suit</td>
                      <th>779/-</th>
                      <td>KIDS</td>
                    </tr>


                     <tr>
                      <td><a href="#!"><img class="card-img-top" src="img/man/m-t285hs-as7whdngr-seven-rocks-original-imafz3wkfs8pevqc.jpeg"  alt="..." /></a></td>
                      <td>Striped Men Polo Neck Dark Blue, Light Green, White T-Shirt</td>
                      <th>479/-</th>
                      <td>MANS</td>
                    </tr>
                    
                  </table>
                  
                </div>
                
              </div>
              
            </div>
        <!-- Footer-->
        <footer class="py-3 bg-warning">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Vinayak Cloth Shop.. 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script >
            function color()
            {
                document.getElementById('wish').style.color="red";
               // document.getElementById('wish').style.color="black";
            }
        </script>
    </body>
</html>


