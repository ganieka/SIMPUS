<?php
include "connect.php";

$bid = $_GET['bid'];
$delete = mysqli_query($mysqli, "DELETE FROM issue_book WHERE issueid = '$bid'");

if($delete == True){
    mysqli_close($mysqli); 
    header("location: daftarreq.php"); 
    exit;	
}
else
{
    echo "Tidak dapat menghapus request"; 
}
?>