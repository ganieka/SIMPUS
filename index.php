<html>
<head>
  <!-- Latest compiled JavaScript -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href= "https://mdbootstrap.com/education/bootstrap/">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
  <link rel="stylesheet"  href="mdb/css/mdb.min.css"> 
  <link rel="stylesheet"  href="asset/css/style.css">
  <!-- icon -->
  <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />

</head>
<body class="text-center" style="font-family: Poppins">

<?php
  include "connect.php";
  #include "login.php";

?>
  <header>

<?php
  include "navbar.php";
?>

    <!-- Background image -->
    <div id="intro" class="text-center bg-image shadow-1-strong"
      style="background-image: url('assets/img/kucing.jpeg');">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white px-4">
            <h1 class="mb-3">Selamat Datang di SIMPUS</h1>
            <p>welkam tu perpus kucing</p>            
            <div class="input-group justify-content-center ">
    					<a class="btn btn-success btn-lg" href="adm_library.php" role="button"><span class="fa fa-search"></span>  Cari Buku</a>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </header>

<br>
<br>

</body>

</html>