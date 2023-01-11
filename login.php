<?php
  include "connect.php";
  if(isset($_SESSION['login_user']))
  {

    header("Location: profile.php");
    exit;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
    <title>Sign In Page</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/signin.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  </head>

<body class="text-center" style="background-image: url('assets/img/bg.png'); background-size:93%;">
  
<main class="form-signin w-100 m-auto">
<div class="card p-4 shadow-lg"> 
  <form name="login" action="" method="post">
    <h1 class="h3 mb-3 fw-normal">Login SIMPUS</h1>
    <h3 class="h3 mb-3 fw-normal">Login Sebagai:</h3>
      <div class="col-sm6" style="margin-right: 35px;">
        <input type="radio" name="user" id="admin" value="admin">
        <label for="admin">Admin</label>
        <input type="radio" name="user" id="anggota" value="anggota">
        <label for="student">Anggota</label>
      </div>
        <br>
      <div class="form-floating w-100 m-auto">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required="">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating w-100 m-auto">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required="">
        <label for="floatingPassword">Password</label>
      </div>
      <div class=form-signin input>
        <input class="w-100 btn btn-lg btn-success" type="submit" name="submit" value="Sign In" >
        <br><br>
        <p style="text-align: center;">Belum punya akun? <a href="registration.php">Daftar Sekarang</a></p>
      </div>
    </div>
    
</div>
  </form>
</main>

  <?php

    if(isset($_POST['submit']))
    {
      function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $uname = validate($_POST['username']);
      $pass = validate($_POST['password']);

      if($_POST['user']=='admin')
      {

      $count=0;
      $sql="SELECT * FROM admin WHERE username='$uname' && password='$pass';";
      $result=mysqli_query($mysqli, $sql);

      $row= mysqli_fetch_assoc($result);
      $count=mysqli_num_rows($result);

      if($count==0)
      {
        ?>
              <br>
          <div class="alert alert-danger" style="width: 359px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_admin'] = $uname;
        $_SESSION['pic']= $row['pic'];
        
        ?>
          <script type="text/javascript">
            window.location="admin/adm_profile.php"
          </script>
        <?php
      }
    }
    else
     {
      $count=0;
      $sql="SELECT * FROM anggota WHERE username='$uname' && password='$pass';";
      $result=mysqli_query($mysqli, $sql);

      $row= mysqli_fetch_assoc($result);
      $count=mysqli_num_rows($result);

      if($count==0)
      {
        ?>
              <br>
          <div class="alert alert-danger" style="width: 359px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $uname;
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="profile.php"
          </script>
        <?php
      }
    }
  }
  ?>

</body>
</html>