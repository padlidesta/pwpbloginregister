<?php 
//Koneksi ke database
$server   = "localhost";
$username = "root";
$password = "";
$database = "dbpwpb";
  
$mysqli = new mysqli ($server, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo 'Connection failed : '.mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
} 
//Akhir Koneksi---------------------------------------------------------
 
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Empty data.</b>";
    }
    else {
        $delete = mysqli_query($mysqli,"DELETE FROM user WHERE id='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli));
        if($delete){
            echo "<script> alert('Data has been Deleted.') </script>";
            header('location: index.php?success=true');
        }
    }
}
?>