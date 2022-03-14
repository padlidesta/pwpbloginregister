<?php 

include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("location: login.php");
}

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
    $username = $_POST['username'];
	$password = ($_POST['password']);
	$cpass = ($_POST['cpass']);

    // Password harus sama dg confirm password
	if ($password == $cpass) {
		$sql = "SELECT * FROM user WHERE nama='$nama'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (nama, username, password)
					VALUES ('$nama', '$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                header("location: login.php");
				$email = "";
                $username = "";
				$_POST['password'] = "";
				$_POST['cpass'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Sign Up</title>

</head>
<body>
    
    <!-- SIGN UP FORM -->
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="text-align: center; font-size: 2rem; font-weight: 800;">Sign Up</p>
            <div class="input-group mb-3">
                <input type="text" name="nama" placeholder="Name" value="<?php echo $nama; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="cpass" placeholder="Confirm password" value="<?php echo $_POST['cpass']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-primary">Sign Up</button>
            </div>
                <center>
                    <p class="login-register-text">Already have an account? <a href="login.php">Login here.</a></p>
                </center>
        </form>
    </div>


</body>
</html>