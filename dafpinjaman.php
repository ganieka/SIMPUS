<?php 
  include "connect.php"; 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
    <meta http-equiv="x-ua-compatible" content="ie=edge" /> 
    <title>Daftar Return</title> 
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
    if(isset($_SESSION['login_user'])){ 
        $ret='RETURNED';
        $exp='EXPIRED';
        $yes='Yes';

        $sql="SELECT anggota.username,NIM,books.bid,cover,name,authors,approve,issue,issue_book.return,issue_book.returned,issueid,denda,late FROM anggota 
              inner join issue_book ON anggota.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.username ='$_SESSION[login_user]'";
        $res=mysqli_query($mysqli,$sql);
        ?>
            <div class="container my-8"> 
              <div class="shadow-4 rounded-5 overflow-hidden"> 
                <table class="table align-middle mb-0 bg-white"> 
                  <thead class="bg-light"> 
                    <tr> 
                        <th><?php echo "Issue ID";?></th>
                        <th><?php echo "Book ID";?></th> 
                        <th><?php echo "Cover";?></th> 
                        <th><?php echo "Judul Buku";?></th> 
                        <th><?php echo "Author";?></th> 
                        <th><?php echo "Status";?></th> 
                        <th><?php echo "Tanggal Dipinjam";?></th>
                        <th><?php echo "Tanggal Pengembalian";?></th> 
                        <th><?php echo "Denda";?></th> 
                        <th><?php echo "Terlambat";?></th> 
                    </tr> 
                  </thead> 
                  <tbody> 
    <?php   while($row=mysqli_fetch_assoc($res)) 
            {
                if($row['approve']==$yes){?> 
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
                  <?php if($row['approve'] == $yes) { ?>
                          <div class="badge badge-warning rounded-pill"> 
                            <?php echo "sedang dipinjam";?>
                          </div> 
                  <?php } ?>
                      </td> 
                      <td> 
                        <div class="fw-bold mb-1"> 
                          <?php echo $row['issue'];?> 
                        </div> 
                      </td>
                      <td> 
                        <div class="fw-bold mb-1"> 
                          <?php echo $row['return'];?> 
                        </div> 
                      </td>  
                      <td>
                        <div class="fw-bold mb-1">
                          <?php echo "Rp. "; echo $row['denda']; ?>
                        </div>
                      </td>
                      <td>
                        <div class="fw-bold mb-1">
                          <?php echo $row['late']; echo " hari";?>
                        </div>
                      </td>
                    </tr> 
      <?php   }
              else{
                continue;
              }
            }?> 
                  </tbody> 
                </table> 
              </div> 
            </div> 
<?php }?>
</body>
</html>
