<?php
  if(isset($_POST['submit'])){
    include "config.php";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['cpassword'];
    $gender = $_POST['sex'];
    ?>
    <?php
    $sql = "INSERT INTO `signup`(`first name`, `last name`,`email`,`password`,`cpassword`,`gender`,`date`) VALUES ('$firstname','$lastname','$email','$pass1','$pass2','$gender', CURRENT_TIMESTAMP());";
    if($con->query($sql) == true){

    }

  }
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

    <title>Sign Up</title>
  </head>
  <body class="sign2">
    <form class="sign" action="signup.php" method="post">
        <h1><b>Sign Up</b></h1>
        
        <div class="form">
            <div class="names">
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
            </div>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <input type="password" name="password" id="password" onclick="validate()" placeholder="Enter Your Password" required>
            <input type="password" name="cpassword" id="confirm_password" onclick="validate()" placeholder="Confirm Password" required>
            
            <div class="radio mb-5">
                <p id="text"><b>Gender : </b></p><div class="buttons"><label><input type="radio" name="sex" value="Male" required><p>Male</p></label>
                         <label><input type="radio" name="sex" value="Female"><p>Female</p></label></div>
            <button name="submit" type="submit"><b>Submit</b></button>  
            </div>       
        </div>
        <?php
          if(isset($_POST['submit'])){
            include "config.php";
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pass1 = $_POST['password'];
            $pass2 = $_POST['cpassword'];
            $gender = $_POST['sex'];
            if($pass1 == $pass2){
              $sql = "INSERT INTO `signup`(`first name`, `last name`,`email`,`password`,`gender`,`date`) VALUES ('$firstname','$lastname','$email','$pass1','$gender', CURRENT_TIMESTAMP());";
              if($con->query($sql) == true){
                echo "<div class='text-primary fs-3'>Thanks For Joining Us</div>";
                echo "<script>setTimeout(() => {window.location.assign('login.php');}, 2000)</script>";
              }else{
                echo "Internal Error";
              }
            }else{
              echo "Password doesn't match";
            }
            $con->close();
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
                var pass = document.getElementByName('password').value;
                var pass2 = document.getElementByName('cpassword').value;
                function validate(){
                  if(pass != pass2){
                  pass2.setCustomValidity("Passwords Don't Match");
                  }else{
                    pass2.setCustomValidity("");
                    }
                }
                pass.onchange = validate;
                pass2.onkeyup = validate;
            </script>
    <script>
       if(window.history.replaceState){
         window.history.replaceState(null,null,window.location.href);
       }
    </script>
  </body>
</html>