<?php 
  include "connect.php"; 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
    <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
    <title>Daftar Request</title> 
    <!-- icon --> 
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" /> 
    <!-- Font --> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- MDB --> 
    <link rel="stylesheet" href="assets/css/mdb.min.css"/>
  </head> 
  <body style="font-family:Poppins; margin-top: 75px;"> 
    <header> 
      <?php 
        include "navbar.php"; 
      ?> 

    </header> 
     
    <?php 
      if(isset($_SESSION['login_user']))
      {
          $q=mysqli_query($mysqli,"SELECT issue_book.*, books.cover, books.name, books.authors FROM issue_book inner join books ON issue_book.bid=books.bid where username='$_SESSION[login_user]' and approve='Belum di Approve' ;");

          if(mysqli_num_rows($q)==0)
          {
              echo "Tidak ada buku yang direquest";
          }
          else
          {?> 
            <div class="container my-5"> 
              <div class="shadow-4 rounded-5 overflow-hidden"> 
                <table class="table align-middle mb-0 bg-white"> 
                  <thead class="bg-light"> 
                    <tr> 
                        <th><?php echo "Issue ID";?></th>
                        <th><?php echo "Book ID";?></th> 
                        <th><?php echo "Cover";?></th> 
                        <th><?php echo "Judul Buku";?></th> 
                        <th><?php echo "Author";?></th> 
                        <th><?php echo "Approve Status";?></th> 
                        <th><?php echo "Actions";?></th> 
                    </tr> 
                  </thead> 
                  <tbody> 
    <?php   while($row=mysqli_fetch_assoc($q)) 
            {?> 
                    <tr> 
                      <td> 
                        <div class="fw-bold mb-1"> 
                          <?php echo $row['issueid'];?> 
                        </div> 
                      </td> 
                      <td> 
                        <div class="fw-bold mb-1"> 
                          <?php echo $row['bid'];?> 
                        </div> 
                      </td> 
                      <td> 
                        <div class = "d-flex align-items-center"> 
                          <?php echo "<img src='assets/img/cover/".$row['cover']."' height=110 width=75 class='img-responsive'>";?> 
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
                          <?php echo $row['approve'];?>
                        </div> 
                      </td> 
                      <td> 
                        <div class="btn btn-link btn-sm btn-rounded"> 
                          <?php echo "<a href='deletereq.php?bid=".$row['issueid']."&user=".$user."'>Hapus</a>";?></td> 
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
      else
      {
        ?>
        <div class="text-center">
          <br><br><br>
          <img style="text-align: center;" src="assets/img/logindlu.png"  height="300"  alt="centered image" />
          <br><br>
          <h3 >Silahkan login untuk melihat daftar request</h3>
      </div>
<?php }?>
</body>
</html>