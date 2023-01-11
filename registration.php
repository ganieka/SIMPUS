<?php
  include "connect.php";
      if(isset($_SESSION['login_user']))
 {

  //header("Location: profile.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />

    <title>Registration Page</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/signin.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  </head>


<body class="text-center" style="background-image: url('assets/img/bg.png'); background-size:93%;">
    <div class="form-signin m-auto" >
      <div class= "p-3 card shadow-lg">
        <form name="Registration" action="" method="post">
          <h2 class="h2 mb-3 fw-normal">Buat akun SIMPUS</h2><br>
          <div class="form-floating w-auto m-auto">
            <input type="text" name="first" class="form-control" id="floatingFirst" placeholder="Nama Depan" required="">
            <label for="floatingFirst">First</label>
          </div>
          <div class="form-floating w-100 m-auto">
            <input type="text" name="last" class="form-control" id="floatingLast" placeholder="Nama Belakang">
            <label for="floatingLast">Last</label>
          </div>
          <div class="form-floating w-100 m-auto">
            <input type="text" name="username" class="form-control" id="floatingUname" placeholder="Username" required="">
            <label for="floatingUname">Username</label>
          </div>
          <div class="form-floating w-100 m-auto">
            <input type="text" name="NIM" class="form-control" id="floatingNim" placeholder="NIM" required>
            <label for="floatingNim">NIM</label>
          </div>
          <div class="form-floating w-100 m-auto">
            <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Email" required="">
            <label for="floatingEmail">Email</label>
          </div>
            <div class="form-floating w-100 m-auto">
            <input type="text" name="contact" class="form-control" id="floatingNohp" placeholder="Nomor HP" required="">
            <label for="floatingNohp">No Hp</label>
          </div>
          <div class="form-floating w-100 m-auto">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required="">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-signin center" input>
            <input class="w-100 btn btn-lg btn-success"  type="submit" name="submit" value="Sign Up" >
            <br><br>
            <p style="text-align: center;">Sudah punya akun? <a href="login.php">Sign In</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="js/bootstrap.js"></script>
  <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `anggota`";
        $res=mysqli_query($mysqli,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($mysqli,"INSERT INTO `ANGGOTA` VALUES('', '$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[NIM]', '$_POST[email]', '$_POST[contact]', 'p.jpg');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
           window.location="login.php";
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>
</body>
</html>