<?php 
  include "../connect.php"; 

  if (isset($_SESSION['message']) && $_SESSION['message'] == 'fail') {
    ?>
      <script type="text/javascript">
        alert("Silahkan login untuk request buku!");
      </script>
    <?php
  unset($_SESSION['message']);
  }

  if (isset($_SESSION['message']) && $_SESSION['message'] == 'success') {
      ?>
        <script type="text/javascript">
          alert("Berhasil menambah buku ke daftar request");
        </script>
      <?php
  }
  unset($_SESSION['message']);
  
  if(isset($_SESSION['login_user']))
  {
    $user = $_SESSION['login_user'];
  }
  else
  {
    $user = 'guest';
  }
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
    <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
    <title>Daftar Buku</title> 
    <!-- icon --> 
    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
    <!-- Font --> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- MDB --> 
    <link rel="stylesheet" href="../assets/css/mdb.min.css" /> 
  </head> 
  <body style="font-family:Poppins"> 
    <header> 
      <?php 
        include "navbar.php"; 
      ?> 

      <!--___________________pencarian________________________--> 
    <div id="intro" class="p-4 text-center"> 
      <br><br><br> 
    </div>
    <div class="container my-5 srch"> 
      <form class="" method="post" name="form1"> 
          <input class="form-control p-10 " type="text" name="search" placeholder="Cari" required=""> 
          <br> 
          <button type="submit" name="submit" class="btn btn-success"> Search </button> 
      </form> 
    </div>

    </header> 
     
    <?php 
     
      if(isset($_POST['submit'])){ 
        $q = mysqli_query($mysqli, "SELECT * from books WHERE name like '%$_POST[search]%'"); 
 
        if(mysqli_num_rows($q)==0){ 
            echo "0 result found"; 
        } 
        else {?> 
          <div class="container my-5"> 
            <div class="shadow-4 rounded-5 overflow-hidden"> 
              <table class="table align-middle mb-0 bg-white"> 
                <thead class="bg-light"> 
                  <tr> 
                    <th><?php echo "Book ID";?></th> 
                    <th><?php echo "Cover";?></th> 
                    <th><?php echo "Judul Buku";?></th> 
                    <th><?php echo "Author";?></th> 
                    <th><?php echo "Status";?></th> 
                    <th><?php echo "Quantity";?></th> 
                    <th><?php echo "Actions";?></th> 
                  </tr> 
                </thead> 
                <tbody> 
    <?php while($row=mysqli_fetch_assoc($q)) 
            {?> 
              <tr> 
                <td> 
                  <div class="fw-bold mb-1"> 
                    <?php echo $row['bid'];?> 
                  </div> 
                </td> 
                <td> 
                  <div class = "d-flex align-items-center"> 
                    <?php echo "<img src='../assets/img/cover/".$row['cover']."' height=110 width=75 class='img-responsive'>";?> 
                  </div> 
                </td> 
                <td> 
                  <div class="fw-bold mb-1"> 
                    <?php echo $row['name'];?> 
                  </div> 
                </td> 
                <td> 
                  <div class="fw-bold mb-1"> 
                    <?php echo $row['authors'];?>
                  </div> 
                </td> 
                <td> 
                  <div class="badge badge-success rounded-pill"> 
                    <?php echo $row['status'];?>
                  </div> 
                </td>
                <td> 
                  <div class="fw mb-1 text-center"> 
                    <?php echo $row['quantity'];?>
                  </div> 
                </td>
                <td> 
                  <div class="btn btn-link btn-sm btn-rounded"> 
                    <?php echo "<a href='deletebuku.php?bid=".$row['bid']."&user=".$user."'>Hapus</a>";?>
                  </div>
                </td>
              </tr> 
      <?php }?> 
                </tbody> 
              </table> 
            </div> 
          </div> 
  <?php }?> 
<?php } 
      else { 
        $res=mysqli_query($mysqli,"SELECT * FROM books ORDER BY bid ASC"); 
        ?> 
        <div class="container my-5"> 
          <div class="shadow-4 rounded-5 overflow-hidden"> 
            <table class="table align-middle mb-0 bg-white"> 
              <thead class="bg-light"> 
                <tr> 
                  <th><?php echo "Book ID";?></th> 
                  <th><?php echo "Cover";?></th> 
                  <th><?php echo "Judul Buku";?></th> 
                  <th><?php echo "Author";?></th> 
                  <th><?php echo "Status";?></th> 
                  <th><?php echo "Quantity";?></th> 
                  <th><?php echo "Actions";?></th> 
                </tr> 
              </thead> 
              <tbody> 
      <?php while($row=mysqli_fetch_assoc($res)) 
              {?> 
                <tr> 
                  <td> 
                    <div class="fw-bold mb-1"> 
                      <?php echo $row['bid'];?> 
                    </div> 
                  </td> 
                  <td> 
                    <div class = "d-flex align-items-center"> 
                      <?php echo "<img src='../assets/img/cover/".$row['cover']."' height=110 width=75 class='img-responsive'>";?> 
                    </div> 
                  </td> 
                  <td> 
                    <div class="fw-bold mb-1"> 
                      <?php echo $row['name'];?> 
                    </div> 
                  </td> 
                  <td> 
                    <div class="fw-bold mb-1"> 
                      <?php echo $row['authors'];?></td> 
                    </div> 
                  <td> 
                    <div class="badge badge-success rounded-pill"> 
                      <?php echo $row['status'];?></td> 
                    </div> 
                  <td> 
                    <div class="fw mb-1 text-center"> 
                      <?php echo $row['quantity'];?></td> 
                    </div> 
                  <td> 
                    <div class="btn btn-link btn-sm btn-rounded"> 
                      <?php echo "<a href='deletebuku.php?bid=".$row['bid']."&user=".$user."'>Hapus</a>";?></td> 
                    </div> 
                </tr> 
        <?php }?>
              </tbody> 
            </table> 
<?php }?> 
  </body> 
</html>