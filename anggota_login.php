<?php
  $username = $_GET['username'];
  $password = $_GET['password'];

  $sql="SELECT username, password FROM anggota WHERE username LIKE '$username' AND password LIKE '$password'";
  $result = $mysqli->query($sql);
  if($result->num_rows>0){
      echo "Login berhasil";
  }else {
      echo "Username atau Password salah";
  }
?>