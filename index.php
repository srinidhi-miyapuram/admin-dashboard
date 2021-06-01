 <!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        >
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Technical Path</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <b>Technical Path</b>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button><a class="nav-link" href="signup.php">SignUp</a></button>
                        <button><a class="nav-link" href="login.php">Login</a></button>
                    </form>
                </div>
            </div>
        </nav>
    <div class="total">   
        <div class="container">
            <img class="images" src="./images/joanna-kosinska-I3adKpDNAjM-unsplash.jpg">
            <h1>Home</h1>
        </div>
        <div class="box">
            <div class="image">
                <img src="./images/alex-knight-2EJCSULRwC8-unsplash.jpg">
            </div>
            <div class="image1">
                <img src="./images/possessed-photography-jIBMSMs4_kA-unsplash.jpg">
            </div>
            <div class="image2">
                <img src="./images/josh-sorenson-ouuigywbXlI-unsplash.jpg">
            </div>
        </div>
        <div class="box1">
            <img src="./images/possessed-photography-dRMQiAubdws-unsplash.jpg">
            <div class="text1">
                World is upgrading daily with so many new technologies. It's your turn now. Upgrade yourself with this world.
            Follow the trend and stay updated not outdated.
            World is upgrading daily with so many new technologies. It's your turn now. Upgrade yourself with this world.
            Follow the trend and stay updated not outdated.
            World is upgrading daily with so many new technologies. It's your turn now. Upgrade yourself with this world.
            Follow the trend and stay updated not outdated.
            </div>
        </div>
        <div class="box2">
            <div class="text2">
                World is upgrading daily with so many new technologies. It's your turn now. Upgrade yourself with this world.
            Follow the trend and stay updated not outdated.
            World is upgrading daily with so many new technologies. It's your turn now. Upgrade yourself with this world.
            Follow the trend and stay updated not outdated.
            World is upgrading daily with so many new technologies. It's your turn now. Upgrade yourself with this world.
            Follow the trend and stay updated not outdated.
            </div>
            <img src="./images/rob-lambert-9Q_pLLP_jmA-unsplash.jpg">
        </div>
        <div class="adding">
            <?php
              include "config.php";
              $sql = "SELECT image,content FROM new ORDER BY id DESC LIMIT 1";
              $query = mysqli_query($con,$sql);
              
              
            //   $fetch = mysqli_fetch_array($query);
              while($fetch = mysqli_fetch_array($query)){
                  ?>
                <div class='image5'>
                <div class='card' style='width: 400px;height: 500px;margin-left: 55%;box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2), 0px 6px 20px 0px rgba(0, 0, 0, 0.19);'>
                     <img src='<?php echo $fetch['image'];?>' class='card-img-top' style="width: 100%;height: 50%;">
                     <div class='card-body' style="overflow-y: auto;">        
                         <p class='card-text'><?php echo $fetch['content']; ?></p>
                     </div>
                 </div>
             </div>
             <?php
              }
            ?>
            
        </div>
        <div class="slides">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/andy-kelly-0E_vhMVqL9g-unsplash.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/jelleke-vanooteghem-6NUlOHM40w8-unsplash.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/lukas-hND1OG3q67k-unsplash.jpg" class="d-block w-100">
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
         </div>
         </div>
         <div class="foot">
          <footer>
            <div class="about">
              <h3>About Us</h3>
              <ul><li><b>Technical Path</b></li></ul>
            </div>
          <div class="follow">
          <h3>Follow Us</h3>
          <div class="social">
          <a href="#">
              <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="#">
              <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="#">
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
          </a>
          </div>
        </div>
        <div class="reserve">
          <h6>All rights are reserved.</h6>
        </div>
          </footer>
      </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    </body>
</html>
  
  
  
  
  