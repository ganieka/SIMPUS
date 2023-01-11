<?php	
// 	include "connection.php";
// 	include "navbar.php";
// 	include "sidenav.php";
// 		if(!isset($_SESSION['login_user']))
//  {

// 	header('location: login.php');
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/add.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body  class="bg-light" style="font-family:Poppins"> 
<?php
		
		// $sql = "SELECT * FROM ANGGOTA WHERE username='$_SESSION[login_user]'";
		// $result = mysqli_query($db,$sql) or die (mysql_error());

		// while ($row = mysqli_fetch_assoc($result)) 
		// {
		// 	$first=$row['first'];
		// 	$last=$row['last'];
		// 	$username=$row['username'];
		// 	$email=$row['email'];
		// 	$contact=$row['contact'];
		// }

	?>

    <header> 
      <?php 
        include "navbar.php"; 
      ?> 
    </header>

    <div id="intro" class="p-2"> 
      <br><br><br>
    <div>

    <div class="container rounded bg-white mt-3 mb-3">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../assets/img/admin.png">
                    <span class="font-weight-bold">Edogaru</span>
                    <span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Fisrt Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="Last Name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">NIM</label><input type="text" class="form-control" placeholder="Masukkan NIM" value=""></div>
                        <div class="col-md-12"><label class="labels">No Hp</label><input type="text" class="form-control" placeholder="Masukkan No Hp" value=""></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
    </div>
    </div>
    </div>

    <?php 

	// 	if(isset($_POST['submit']))
	// 	{
	// 		move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

	// 		$first=$_POST['first'];
	// 		$last=$_POST['last'];
	// 		$username=$_POST['username'];
	// 		$email=$_POST['email'];
	// 		$contact=$_POST['contact'];
	// 		$pic=$_FILES['file']['name'];

	// 		$sql1= "UPDATE ANGGOTA SET pic='$pic', first='$first', last='$last', username='$username', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";

	// 		if(mysqli_query($db,$sql1))
	// 		{
	// 			session_reset();
	// 			?>
				<!-- <script type="text/javascript">
	// 					alert("Saved Successfully.");
	// 					window.location="profile.php";
	// 				</script> -->
				<?php
	// 		}
	// 	}
 	// ?>

</body>