<?php 
	include "../connect.php";	
	include "navbar.php";
	if(!isset($_SESSION['login_admin']))
 {

	header('location: ../login.php');
}
    $db=mysqli_query($mysqli,"SELECT * FROM admin where username='$_SESSION[login_admin]' ;");
    $row=mysqli_fetch_assoc($db)
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
	<title>Profile</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/profil.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body class="bg-light" style="font-family:Poppins;" >
    <div id="intro" class="p-2"> 
        <br>
        <br>
    <div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
    <div class="col-xl-6 col-md-12">
        <div class="card user-card-full m-auto">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-success user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            <img src="../assets/img/admin.png" height="100" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <div class="f-w-200"> 
                            <?php echo $row['username'];?> 
                        </div> 
                        <div class="f-w-200"> 
                            <?php echo $row['first'];?> 
                            <?php echo $row['last'];?> 
                        </div> 
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <br>
                        <h4 class="">Selamat Datang Admin!</h4>
                        <br>
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email</p>
                                <div class="text-muted f-w-400"> 
                                    <?php echo $row['email'];?> 
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Phone</p>
                                <div class="text-muted f-w-400"> 
                                    <?php echo $row['contact'];?> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        </div>
    </div>
</body>