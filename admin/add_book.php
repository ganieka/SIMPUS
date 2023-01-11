<?php
include "../connect.php";
$book_name = $_GET['name'];
$authors = $_GET['authors'];
$cover = $_GET['cover'];
$status = $_GET['status'];
$quantity = $_GET['quantity'];

//fungsi untuk bisa mengetik tanda petik dalam form
$book_name = addslashes($book_name);
$authors = addslashes($authors);

//insert to database
$sql = "INSERT INTO books(bid, cover, name, authors, status, quantity) VALUES (NULL, '$cover', '$book_name', '$authors', '$status', '$quantity')";
$result = $mysqli->query($sql);

include "adm_library.php";
?>