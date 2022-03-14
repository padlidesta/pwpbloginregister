<?php 

    include 'koneksi.php';

    session_start();

    error_reporting(0);

    if (isset($_SESSION['username'])) {
        header("Location: homePage.php");
    }

    // ambil data dari database
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = '$username'
                AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if ($result-> num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location: homePage.php");
        }else {
            echo "<script> alert('Woops! Username or Password is Wrong.') </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    
    <!-- LOGIN -->
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="text-align: center; font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group mb-3">
                <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn btn-primary">Login</button>
            </div>
                <center>
                    <p class="login-register-text">Don't have an account? <a href="register.php">Sign up here.</a></p>
                </center>
        </form>
    </div>

</body>
</html>