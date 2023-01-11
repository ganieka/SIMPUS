<?php
include "../connect.php";

$issueid = $_GET['issueid'];
$username = $_GET['username'];
$bid = $_GET['bid'];
$issue = mysqli_query($mysqli, "SELECT CURDATE()");
$return = mysqli_query($mysqli, "SELECT ADDDATE(CURDATE(), 7)");

$sql="UPDATE issue_book SET approve = 'Yes', issue = CURDATE(), `return` = ADDDATE(CURDATE(), 7) WHERE issue_book.issueid = $issueid;";
$res=mysqli_query($mysqli,$sql);

if($res == True){
    mysqli_query($mysqli,"UPDATE books SET quantity = quantity-1 WHERE bid='$bid'");
    mysqli_close($mysqli);
    header("location: dafapprove.php"); 
    exit;	
}
else
{
    echo "Tidak dapat mengapprove buku"; 
}
?>