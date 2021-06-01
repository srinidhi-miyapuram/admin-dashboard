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
        <title>Login</title>
    </head>
    <body class="admin2">
        <form class="admin" action="login.php" method="post">
            <h1><b>Sign In</b></h1>
            <div class="box3">
              <div class="input">
                <input type="text" name="email" placeholder="Enter your email" required>
                <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="checkbox mb-5">
                  <label>
                    <input type="checkbox" value="remember-me" required> <p>Remember me</p>
                  </label>
                </div>
                <button name="submit" type="submit"><b>Submit</b></button>
            </div>
            
            <?php
              include "config.php";
              if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $sql = "SELECT email, password FROM signup WHERE email='$email' AND password='$pass'";
                if($con->query($sql) == true){
                  if($email == 'sri@gmail.com' && $pass == 'bunny'){
                    echo "<script>setTimeout(() => {window.location.assign('admin.php');}, 2000)</script>";
                  }else{
                    echo "<script>setTimeout(() => {window.location.assign('index.html');}, 2000)</script>";
                  }
                }else{
                  echo "Error While log in";
                }
              }
            ?>
            
        </form>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script>
       if(window.history.replaceState){
         window.history.replaceState(null,null,window.location.href);
       }
    </script>
    </body>
</html>
