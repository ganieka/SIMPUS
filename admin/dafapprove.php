<?php 
  include "../connect.php"; 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
    <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
    <title>Daftar Approve</title> 
    <!-- icon --> 
    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
    <!-- Font --> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- MDB --> 
    <link rel="stylesheet" href="../assets/css/mdb.min.css"/>
  </head> 
  <body style="font-family:Poppins; margin-top: 75px;"> 
    <header> 
      <?php 
        include "navbar.php"; 
      ?> 

    </header> 
     
    <?php 
      if(isset($_SESSION['login_admin']))
      {
        //akses tabel issue_book dijoin dengan tabel anggota dan tabel books dan hanya menampilkan buku yang belum diapprove
        $sql="SELECT issue_book.issueid,anggota.username,NIM,first,last,books.bid,books.cover,name,authors,status FROM anggota 	inner join issue_book ON anggota.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='Belum di Approve'";
        $res= mysqli_query($mysqli,$sql);        
    
        if(mysqli_num_rows($res)==0)
          {
            echo "<p><b>";
            echo "Tidak ada request tersedia.";
            echo "</p></b>";
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
                        <th><?php echo "Username";?></th> 
                        <th><?php echo "Cover";?></th> 
                        <th><?php echo "Judul Buku";?></th> 
                        <th><?php echo "Author";?></th> 
                        <th><?php echo "Status";?></th> 
                        <th class="text-center"><?php echo "Actions";?></th> 
                    </tr> 
                  </thead> 
                  <tbody> 
    <?php   while($row=mysqli_fetch_assoc($res)) 
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
                        <div class="fw-bold mb-1"> 
                          <?php echo $row['username'];?> 
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
                      <td class="text-center"> 
                        <div class="btn btn-link btn-sm btn-rounded"> 
                          <?php echo "<a href='approvereq.php?issueid=".$row['issueid']."&username=".$row['username']."&bid=".$row['bid']."&user=".$user."'>Approve</a>";?>
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
        <h3 style="margin-top: 350px; text-align: center;">Silahkan login untuk melihat daftar request</h3>
<?php }?>
</body>
</html>

