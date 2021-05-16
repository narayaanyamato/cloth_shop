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
       <style>
  
.post-thumb {
    
    position: relative;
    overflow: hidden;
    max-height: 300px;
    font-family: arial;
}
.post-thumb:hover .caption-text {
    opacity: 1;
    transform: scale(1.2);
  
}
.post-thumb .caption-text h2,
.post-thumb .caption-text p {
    width: 100%;
    margin: 10px 0px;
     border-radius: 10px;
}

  .post-thumb .caption-text a p
  {
    color: tomato;
    background:whitesmoke;
    font-size: 18px;
    text-decoration: none;
  }
.post-thumb img{
    float: left;
    border-radius: 10px;
}
.caption-text {
    position: absolute;
    opacity: 0;
    transition: all 0.45s ease-in-out;
    background-color: rgb(0 0 0 / 50%);
    width: 100%;
    height: 100%;
    text-align: center;
    color: #ffffff;
    padding-top: 120px;
}

  .card:hover
  {
    border-radius: 10px;
    box-shadow: 0 0 0 10px #000000;
transition: .5s ease;
box-shadow:
1px 1px 2px #373737,
2px 2px 3px #373737,
3px 3px 4px #373737,
4px 4px 5px #373737,
5px 5px 6px #373737,
6px 6px 7px #373737;
-webkit-transform: translateX(-3px);
transform: translateX(-3px);
bor
  }

 

</style>

    </head>
    <body>

      
      <!---navbar---->

         <nav class="navbar navbar-expand-lg navbar-light bg-warning text-white">
  <a class="navbar-brand" href="search.php">Vinayak Cloth Shop..</a>
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
      <a href="search.php"> <button class="btn bg-danger text-white my-2 my-sm-0" type="submit">Search</button></a>
    </form>

        <a class="nav-link disabled  " href="logup.php"><i class="fa fa-user-o " aria-hidden="true"></i>My Account<br></i></a>


        <a class="nav-link disabled" href="addcart.php"><i class="fa fa-shopping-cart" aria-hidden="true">(4)<br>Your cart</i></a>
  </div>
</nav>

        <!-- Page Content-->
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
    <h2 class=" text-white text-warning pt-4">Vinayak Cloth ..shop</h2>
      <h3 class="p-3 text-white pt-3">Fashion makes life more beautiful. It allows people of all kinds to look their best and feel good about themselves.</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
         <div class="carousel-caption d-none d-md-block">
    <h2 class=" text-white text-warning pt-4">Vinayak Cloth ..shop</h2>
      <h3 class="p-3 text-white pt-3">What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide4.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
    <h2 class=" text-white text-warning pt-4">Vinayak Cloth ..shop</h2>
      <h3 class="p-3 text-white pt-3">Fashion is the armor to survive the reality of everyday life.</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide7.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
    <h2 class=" text-white text-warning pt-4">Vinayak Cloth ..shop</h2>
      <h3 class="p-3 text-white pt-3">Fashion is very important. It is life-enhancing and, like everything that gives pleasure, it is worth doing well.</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide8.jpg" alt="Third slide">
           <div class="carousel-caption d-none d-md-block">
    <h2 class=" text-white text-warning pt-4">Vinayak Cloth ..shop</h2>
      <h3 class="p-3 text-white pt-3">Clothes mean nothing until someone lives in them</h3>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



     <!----Body Section--->
       <section class="py-3 bg-info">
            <div class="container"><h3 class="m-0  text-white text-center">Mans/Womens/Kids Clothes..</h3></div>
        </section>   
  <div class="container-fluid mt-2">
   <div class="middle-section">
   <div class="row">
    <div class="col-lg-4 col-sm-3 col-md-4 p-3">
      <div class="post-thumb">
       <a href="mans.php"><img src="img/slide5.jpg" width="100%" height="300px"></a>
        <div class="caption-text">
            <h2>Vinayak Cloth Shop..</h2>
            <a href="Mans.php"><p>Mens Wear Clothes..</p></a>
        </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-3 col-lg-4 p-3">
      <div class="post-thumb">
       <a href="ladies_top.php"><img src="img/slide3.jpg" width="100%" height="300px"></a>
        <div class="caption-text">
            <h2>Vinayak Cloth Shop..</h2>
             <a href="ladies_top.php"><p>Ladies Wear Clothes..</p></a>
        </div>
    </div>
    </div>

    <div class="col-md-4 col-sm-3 col-lg-4 p-3" >
      <div class="post-thumb">
       <a href="kids.php"><img src="img/pexels-bess-hamiti-35188.jpg" width="100%" height="300px"></a>
        <div class="caption-text">
            <h2>Vinayak Cloth Shop..</h2>
             <a href="kids.php"><p>Kids Wear Clothes..</p></a>
        </div>
    </div>
    </div>
     
   </div>
    
  </div>
</div>


     <div class="container  " >
         <div class="Mens">
             <hr>
          <div class="row layer">
            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mt-3">
                          <div class="card h-100">
                                <a href="img/man/2453802122017-Teal-Banarasi-Silk-Indo-Western-Sherwani.jpg"><img class="card-img-top" src="img/man/2453802122017-Teal-Banarasi-Silk-Indo-Western-Sherwani.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">NavyBlue Teal-Banarasi-Silk-Indo-Western-Sherwani</a></h4>
                                    <h5> &#x20a8;<small><subscript> 620/-</subscript><span style="color: #51b315;">(80% off)</span></small><span><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                                </div> 
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px; color: #242a42;" >★ ★ ★ ★ </span>☆</small></div>
                            </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mt-3">

                 <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/man/2453902122017-Navy-Blue-Banarasi-Silk-Indo-Western-Sherwani.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">-Navy-Blue-Banarasi-Silk-Indo-Western-Sherwani</a></h4>
                                    <h5> &#x20a8;<small><subscript> 730/-</subscript><span style="color: #51b315;">(80% off)</span></small><span><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>

                                </div>
                                <div class="card-footer"><small class="text-muted"><span style=" font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
                
            </div>
            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6  mt-3">
                
                  <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/man/13155621102019-Peach-Jacquard-Silk-Readymade-Indo-Western-Sherwani.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Peach-Jacquard-Silk-Readymade-Indo-Western-Sherwani</a></h4>
                                    <h5> &#x20a8;<small><subscript> 320/-</subscript><span style="color: #51b315;">(80% off)</span></small><span  ><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>

                                 
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
            </div>
            
        </div>
         
     </div>
  </div>


   <br>

       <div class="container ">
         <div class="Mens">
        
             <hr>
          <div class="row">
            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mb-5  ">
               <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/female/400209022021-Blue-Crepe-Kurta-Set-With-Palazzo.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Blue-Crepe-Kurta-Set-With-Palazzo</a></h4> 
                                     <h5> &#x20a8;<small><subscript> 1020/-</subscript><span style="color: #51b315;">(80% off)</span></small><span><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                              
                                   
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mb-5">

                 <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/female/801119022021-Maroon-Rayon-Kurta-Set-With-Pant.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Maroon-Rayon-Kurta-Set-With-Pant (red)</a></h4>
                                     <h5> &#x20a8;<small><subscript>670/-</subscript><span style="color: #51b315;">(80% off)</span></small><span ><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
                
            </div>
            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mb-5">
                
                  <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/female/11501913032021-Navy-Blue-Rayon-Kurta-Set-With-Pant.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Navy-Blue-Rayon-Kurta-Set-With-Pant</a></h4>
                                     <h5> &#x20a8;<small><subscript> 820/-</subscript><span style="color: #51b315;">(80% off)</span></small><span ><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
            </div>
            
        </div>
         
     </div>
 </div>



 <br>

        <div class="container ">
         <div class="Mens">

             <hr>
          <div class="row">
            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mb-5">
               <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/kid/11624227032021-Golden-Jacquard-Silk-Kids-Dhoti-Kurta.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Golden-Jacquard-Silk-Kids-Dhoti-Kurta</a></h4>
                                     <h5> &#x20a8;<small><subscript> 520/-</subscript><span style="color: #51b315;">(80% off)</span></small><span ><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mb-5">

                 <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="img/kid/6012210062019-Blue-Georgette-Readymade-Kids-Anarkali-Salwar-Kameez.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Blue-Georgette-Readymade-Kids-Anarkali-Salwar-Kameez</a></h4>
                                     <h5> &#x20a8;<small><subscript> 620/-</subscript><span style="color: #51b315;">(80% off)</span></small><span ><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
                
            </div>
            <div class="col-md-3 col-sm-3 col-lg-4 col-xs-6 mb-5">
                
                    <div class="card h-100">
                             <a href="#!"><img class="card-img-top" src="img/kid/171721032020-Navy-Blue-Jacquard-Readymade-Kids-Indo-Western-Suit.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Navy-Blue-Jacquard-Readymade-Kids-Indo-Western-Suit</a></h4>
                                     <h5> &#x20a8;<small><subscript> 720/-</subscript><span style="color: #51b315;">(80% off)</span></small><span><i style="padding:8px;" class="fa fa-heart" aria-hidden="true" id="wish" ></i></span></h5>
                                </div>
                                <div class="card-footer"><small class="text-muted"><span style="font-size: 18px;color: #242a42;">★ ★ ★ ★</span> ☆</small></div>
                            </div>
            </div>
            
        </div>
         
     </div>
 </div>
        

        <br>


        <!-- Footer-->
        <footer class="py-3 bg-warning">
            <div class="container"><p class="ml-5  text-center text-white">Copyright &copy; Vinayak Cloth Shop.. 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script type="text/javascript " src="add.js"></script>
       
    </body>
</html>


