<?php
include "../connect.php";

$issueid = $_GET['issueid'];
$bid = $_GET['bid'];

$sql="UPDATE `issue_book` SET `approve` = 'RETURNED', `returned` = CURDATE() WHERE `issue_book`.`issueid` = $issueid;";
$res=mysqli_query($mysqli,$sql);

if($res == True){
    mysqli_query($mysqli,"UPDATE books SET quantity = quantity+1 WHERE bid='$bid'");
    mysqli_close($mysqli); 
    header("location: dafreturn.php"); 
    exit;	
}
else
{
    echo "Tidak dapat mengembalikan buku"; 
}
?>