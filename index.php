<?php 
include "koneksi.php";
include "delete.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Database</title>
    <link rel="stylesheet" href="stylehome.css">

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- POP UP ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body><br>
    
<div class="container">
    <h1>User Database</h1>
    <div class="btn-index">
      <a href="homePage.php"><button type="button" class="btn btn-warning">Logout</button></a>
      <!-- button CREATE -->
      <a href="create.php"><button id="create" type="button" class="btn btn-primary"> Create</button></a><br><br>
    </div>
    
   
    <div class="tabel-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>

        <!-- KODE buat konek ke database -->
        <tbody class="col-index">
          <?php $nomor = 0;
                  $data = mysqli_query($mysqli,"SELECT * FROM user"); 
                  while ($show = mysqli_fetch_array($data)) { 
                  $nomor++;
          ?>
          <!-- ISI TABEL -->
          <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $show['nama'];?></td>
            <td><?php echo $show['username'];?></td>
            <td><?php echo $show['password'];?></td>
            <td><a href="update.php?id=<?php echo $show['id'];?>"><i class="far fa-edit"></i></a></td>
            <td><a href="delete.php?id=<?php echo $show['id'];?>"><i class="far fa-trash-alt"></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </div> 
    </table>

    
    </script>
 

</body>
</html>