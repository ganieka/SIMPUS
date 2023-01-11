<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="font-family:Poppins">
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">
      <img src="../assets/img/logo.png" height="50" alt="" loading="lazy"
        style="margin-top: -3px;" />
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
    <?php
      if (isset($_SESSION['login_admin']))
      {
      ?>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </li>
            <a class="nav-link" href="adm_profile.php">Profile</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
          data-bs-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adm_library.php">Daftar Buku</a>
          <a class="dropdown-item" href="add.php">Tambah Buku</a>
          <a class="dropdown-item" href="dafapprove.php">Daftar Approve</a>
          <a class="dropdown-item" href="dafreturn.php">Daftar Pengembalian</a>
          <!-- <div class="dropdown-divider"></div> -->
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php" >Logout</a>
        </li>
      </ul>
        <?php
      }
      else
      {
        ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../login.php" rel="nofollow">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../registration.php" >Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adm_library.php" >Daftar Buku</a>
        </li>
      </ul>
          <?php
        }
      ?>
    </div>
  </div>
</nav>
<!-- Navbar -->