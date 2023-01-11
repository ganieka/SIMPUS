<?php
include "connect.php";

$bid = $_GET['bid'];
$uname = $_GET['user'];

if($uname == 'guest'){
    //$_SESSION['message'] = 'fail';
    header("location: daftarreq.php");
}
else{
    $_SESSION['message'] = 'success';
    $request = mysqli_query($mysqli,"INSERT INTO issue_book VALUES(NULL , '$uname', '$bid', 'Belum di Approve', '-', '-', '-', '0', '0');");
}

if($request){
    mysqli_close($mysqli); 
    header("location: library.php"); 
    exit;	
}
else
{
    echo "Tidak dapat melakukan request"; 
}
?>