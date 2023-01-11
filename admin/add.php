<?php
    include "../connect.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
    <title>Add Book</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/add.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  </head>
<body class="bg-light" style="font-family:Poppins;" >
    <div class="container rounded bg-white mt-3 mb-3">
        <div class=" text-center">
            <br>
            <h2>Add Book</h2>
        </div>
        
        <form action = "add_book.php">
        <div class="row p-4">
            <div class="col order-md-3">
                <h4 class="mb-6">Input Buku</h4>
                <form class="needs-validation" novalidate="">
                    <div class="mb-3">
                        <label for="firstName">Book Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label for="email">Authors</span></label>
                        <input type="text" class="form-control" name="authors" id="authors" placeholder="">
                    </div>
                    <div class="mb-3"> 
                        <label for="status">Status</label>
                        <div class="custom-control custom-radio">
                            <input id="available" name="status" value="Available" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="available">Available</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="unavailable" name="status" value="Unavailable" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="unavailable">Unavailable</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Quantity</label>
                        <input type="text" class="form-control" name="quantity" id="quantity" placeholder="" required="">
                    </div>
                    <div class="mb-3"> 
                        <div class="col-md-12"><label class="labels">Cover url</label>
                        <input type="text" class="form-control" name="cover" id="cover" placeholder="" required=""></div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-success btn-lg btn-block " type="submit">Add Book</button>
                    </div>
                </form>
            </div>
        </div>
        </form>
    </div>
</body>