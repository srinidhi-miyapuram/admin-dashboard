<?php
  error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Dashboard</title>
  </head>
  <body>
  <div class="dash">
  <div class="board flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
          Home
        </button>
        <div class="collapse" id="home-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Overview</a></li>
            <li><a class="link-dark rounded" onclick="openForm('editForm')">Updates</a></li>
            <li><a href="#" class="link-dark rounded">Reports</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a class="link-dark rounded" onclick="openForm('myForm')">Add New</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Profile</a></li>
            <li><a href="#" class="link-dark rounded">Settings</a></li>
            <li><a href="login.php" class="link-dark rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  
<div class="dash-cont">
  <div class="dashboard d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div>
      </div>
      <div class="dash-body">
        <div class="colours">
          <h2>Net Income</h2>
        <div class="skills one">90%</div>
        <div class="skills two">80%</div>
        <div class="skills three">70%</div>
        <div class="skills four">80%</div>
        <div class="skills five">65%</div>
       </div>
       <div class="card" style="width: 20rem;height: 500px;margin-top: 3%;border: none;">
  <img src="images/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash.jpg" class="card-img-top" style="height: 60%;border-radius: 20px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      </div>
      <div class="piechart"></div>
      
</div>
      

      <!-- form -->

      <div class="form-popup" id="myForm">
  <form action="admin.php" method="post" class="form-container" enctype="multipart/form-data">
    <h1><b>Add Here</b></h1>

    <label for="image" class="fs-5"><b>Image</b></label>
    <input type="file" name="myfile" id="myfile">

    <textarea class="desc" name="desc" id="desc" cols="70" rows="10" placeholder="Enter the content here"></textarea>

    <button type="submit" name="submit" class="btn">Add</button>
    <button type="submit" class="btn cancel" onclick="closeForm('myForm')">Close</button>
    
  </form>
  </div>
  <?php
  $edit = $_POST['submit'];
  $image = $_POST['myfile'];
  $text = $_POST['desc'];
?>
  <?php
  include "config.php";
  
  if(isset($_POST['submit']) == true){
    $file = $_FILES['myfile']['name'];
    $temp = $_FILES['myfile']['tmp_name'];
    $place = "images/" . $file;
    $sql = "INSERT INTO `new`(`image`,`content`,`date`) VALUES ('$place','$text',CURRENT_TIMESTAMP());";
    $query = mysqli_query($con,$sql);
    if($query){
      move_uploaded_file($temp,$place);
    }
    
  }
    ?>
  
  
  <!-- // $sql = "INSERT INTO `new`(`image`,`content`,`date`) VALUES ('$image','$cont',CURRENT_TIMESTAMP());"; -->




<?php
  $content = $_POST['descript'];
  $add = $_POST['adding'];
?>

<div class="form-popup" id="editForm">
  <form action="admin.php" method="post" class="form-container">
    <textarea class="desc" name="descript" id="desc" cols="70" rows="20">
      
    <?php 
      
      $home = fopen("index.php","r");
      $read = fread($home,filesize("index.php"));
      echo $read;
      fclose($home);
      if(isset($add) == true){
        $data = file_get_contents('index.php');
        $file = file_put_contents("index.php",$content);
      }
      
    ?>

  </textarea>
    <button type="submit" name="adding" class="btn">Add</button>
    <button type="submit" name="closed" class="btn cancel" onclick="closeForm('editForm')">Close</button>
    <?php
      if(isset($_POST['closed']) == true){
        $home = fopen("index.php","r");
        // $editing = fwrite($home,$read);
        fclose($home);
      }
    ?>
    <?php
      if((isset($_POST['adding']) || isset($_POST['closed'])) == true){
        echo "<script>window.location.replace(window.location.href);</script>";
      }
    ?>
  </form>
  
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script>
       var x;
       function openForm(x){
           document.getElementById(x).style.display = "block";
       }
       function closeForm(x){
           document.getElementById(x).style.display = "none";
       }
    </script>
    
    <script>
       if(window.history.replaceState){
         window.history.replaceState(null, null, window.location.href);
       }
    </script>
  </body>
</html>