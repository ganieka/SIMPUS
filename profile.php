<?php 
	include "connect.php";	
	include "navbar.php";
	//include "sidenav.php";
	if(!isset($_SESSION['login_user']))
 {

	header('location: login.php');
}

    $db=mysqli_query($mysqli,"SELECT * FROM anggota where username='$_SESSION[login_user]' ;");
    $row=mysqli_fetch_assoc($db)
?>

<!DOCTYPE html>
<html>
<head>

    <link rel="icon" type="image/jpg" src="assets/img/logo.png" href="assets/img/logo.png" />
	<title>Profile</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/profil.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="js/bootstrap.js"></script>

</head>

<!-- <header> 
      <?php 
        include "navbar.php"; 
      ?> 
</header> -->

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
            <div class="row">
                <div class="col-sm-4 bg-success user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            <img src="assets/img/user.png" height="100" class="img-radius" alt="User-Profile-Image">
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
                    <div class="text-center">
                    <a href="editprofile.php">
                        <input type="submit" class="btn btn-warning profile-button" href="editprofile.php" name="edit" value="Edit Profile"/>
                    </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
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
                        <h6 class="m-b-20 m-t-40 f-w-600"></h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">NIM</p>
                                <div class="text-muted f-w-400"> 
                                    <?php echo $row['NIM'];?> 
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