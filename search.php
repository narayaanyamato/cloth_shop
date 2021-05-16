<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Search  page</title>
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
           table,td,th
           {
            align-items: center;
            border-bottom: 2px solid white;
            padding: 7px;
            font-family: serif;
            font-weight:300;
            font-size: 20px;
            text-align: center;

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
    <form class="form-inline my-2 my-lg-0" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn bg-danger text-white my-2 my-sm-0" type="submit" name="sub" >Search</button>
    </form>

        <a class="nav-link disabled  " href="logup.php"><i class="fa fa-user-o " aria-hidden="true"></i>My Account</i></a>


        <a class="nav-link disabled" href="addcart.php"><i class="fa fa-shopping-cart" aria-hidden="true">(4)<br>Your cart</i></a>
  </div>
</nav>



    <div class="container">
      <div class="row">
        <div class="col-md-12 text-white text-center p-4">
         
         <table align="center">
           

           <tr>
             <th>Product img</th>
             <th>product Name</th>
             <th>Product Price</th>
             <th>Product category</th>
           </tr>

             <?php
               

             if (isset($_POST['sub']))
              {
                  include("db.php");

                  $search=$_POST['search'];

                  $sql="select * from product where product_name LIKE '%$search%' or product_name LIKE '%$search%' OR product_name LIKE '%$search%' OR product_name LIKE '__$search' OR catogory LIKE '%$search%' or catogory LIKE '%$search%' OR catogory LIKE '$search' OR catogory LIKE '%$search%' or catogory LIKE '%$search%' or catogory LIKE '%$search%' or product_name LIKE '%$search%'" ;

                  $result=mysqli_query($conn,$sql);

                  if (mysqli_num_rows($result)>0)
                   {
                     while ( $row=mysqli_fetch_assoc($result))
                      {

                        $img=$row['product_img'];
                       
                       //echo "id" .$row['id'].    "prouct_name:-"   .$row['product_name'].   "<br>" ;



                     echo'
                     <tr>  
                       <td><img src="product/'.$row['product_img'].'"  width="200px"  height="230px"></td>
                       <td>' .$row['product_name'] .'</td>
                       <td>' .$row['product_price']. '</td>
                       <td>' .$row['catogory']. '</td>
                     </tr>';   
                     }

                  }
              }   



             ?>

         </table>
          
        </div>
        
      </div>
      
    </div>




        


        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!---background-->
        <script type="text/javascript" src="js/background.js"></script>

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



