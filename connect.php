<html>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "library";

$mysqli = new mysqli($host, $user, $pass, $db) or die("Unable to connect");

?>