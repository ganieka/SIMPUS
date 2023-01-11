<?php
include "../connect.php";

$bid = $_GET['bid'];
$delete = mysqli_query($mysqli, "DELETE FROM books WHERE bid = '$bid'");

if($delete == True){
    mysqli_close($mysqli); 
    header("location: adm_library.php"); 
    exit;	
}
else
{
    echo "Tidak dapat menghapus buku"; 
}
?>