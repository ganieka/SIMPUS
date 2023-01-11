<?php	
	include "connect.php";
	include "navbar.php";
	// include "sidenav.php";
		if(!isset($_SESSION['login_user']))
 {

	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/add.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body  class="bg-light" style="font-family:Poppins"> 
<?php
		
		$sql = "SELECT * FROM ANGGOTA WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($mysqli,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$email=$row['email'];
			$contact=$row['contact'];
            $NIM=$row['NIM'];
           
		}

	?>

   

    <div id="intro" class="p-2"> 
      <br><br><br>
    <div>

    <div class="container rounded bg-white mt-3 mb-3">
        <div class="row">
        <form name="edit" action="" method="post" enctype="multipart/form-data">
            <div class="text-center">       
                <div class="d-flex flex-column align-items-center text-center p-3 py-3">
                <h2>Profile Setting </h2> 
                    <img width="150px" src="assets/img/user.png">
                <br>
                    <span class="font-weight-bold">                        
                        <div><label class="labels">Username</label><input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>"></div>
                    </span>
                    <span class="font-weight-bold">                        
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>"></div>
                    </span>
                </div>   
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama Depan</label><input type="text" name="first" class="form-control" placeholder="Nama Depan" value="<?php echo $first; ?>"></div>
                    <div class="col-md-6"><label class="labels">Nama Belakang</label><input type="text" name="last" class="form-control" value="<?php echo $last; ?>" placeholder="Nama Belakang" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Contact</label><input type="text" name="contact" class="form-control" placeholder="Contact" value="<?php echo $contact; ?>"></div>
                    <div class="col-md-6"><label class="labels">NIM</label><input type="text" name="NIM" class="form-control" placeholder="NIM" value="<?php echo $NIM; ?>"></div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-success profile-button" type="submit" name="submit">Save Profile</button>
                </div>
            </div>
        
        </form>
    </div>
    </div>

    <?php 

	 	if(isset($_POST['submit']))
	 	{

	 		$first=$_POST['first'];
	 		$last=$_POST['last'];
	 		$username=$_POST['username'];
	 		$email=$_POST['email'];
	 		$contact=$_POST['contact'];
            $NIM=$_POST['NIM'];


	 		$sql= "UPDATE ANGGOTA SET first='$first', last='$last', username='$username', email='$email', contact='$contact', NIM='$NIM' WHERE username='".$_SESSION['login_user']."';";

	 		if(mysqli_query($mysqli,$sql))
	 		{
	 			?>
				    <script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
	 				</script>
				<?php
	 		}
	 	}
 	 ?>

</body>
</html>