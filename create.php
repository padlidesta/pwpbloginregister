<!-- KODE PHP -->
<?php
 include "koneksi.php";
 
if(isset($_POST['simpan'])){
$nama     = $_POST['nama'];
$user_name    = $_POST['username'];
$password    = $_POST['password'];
 
$data = mysqli_query($conn, "INSERT INTO user SET nama='$nama', username='$user_name', password='$password'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
    echo "<script> alert('Data has been created.') </script>";
    header('location: index.php');
} else {
    echo "<script> alert('Failed to created data.') </script>";
}
}
?>


<!-- DESAIN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Users</title>
    

    <!-- BOOTSTRAP dll -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- POP UP ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>
<body>

    <!-- CREATE  -->
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="text-align: center; font-size: 2rem; font-weight: 800;">Create</p>
            <div class="input-group mb-3">
                <input type="text" name="nama" placeholder="Name"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="username" placeholder="Username"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" placeholder="Password"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group">
                <button name="simpan" type="submit" class="btn btn-primary">Create</button>
            </div>
            <center>
                <p class="login-register-text"><a href="index.php">Back to Users</a></p>
            </center>
        </form>
    </div>


    <style>
        .container {
            width: 400px;
            min-height: 400px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
        }
        .container .login-email .input-group input {
            width: 100%;
            height: 100%;
            border: 2px solid #486681;
            padding: 15px 20px;
            font-size: 1rem;
            background: transparent;
            outline: none;
            transition: .3s;
        }
    </style>
    
</body>
</html>