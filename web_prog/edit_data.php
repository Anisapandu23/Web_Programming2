<!DOCTYPE html>
<html>
<head>
  <title>Project CRUD</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Anisa Pandu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="w-75 p-3 mx-auto mt-2 bg-primary">
<form method="post" action="aksi_tambah_data.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Username" name="username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">E-mail</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E-mail" name="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password">
  </div>
  <button class="btn btn-md btn-success">
  Save
  </button>
  <button class="btn btn-md btn-light">
  Edit
  </button>
  <button class="btn btn-md btn-danger">
  Delete
  </button>
  <br/><br/>
</form>
<div>
  <table class="table table-striped table-light">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    include 'conection.php';
    $no = 1;
    $data = mysqli_query($conection, "SELECT * FROM crud");
    while ($dt = mysqli_fetch_array($data)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $dt ['nama']; ?></td>
      <td><?php echo $dt ['username']; ?></td>
      <td><?php echo $dt ['password']; ?></td>
      <td><?php echo $dt ['email']; ?></td>
      <td>
        <!-- <a href="edit.php?id=<?php echo $dt['Id']; ?>"> EDIT</a>
        <a href="aksi_hapus.php?id=<?php echo $dt['Id']; ?>"> HAPUS</a> -->
      </td>
    </tr>
    <?php 
    }

     ?>
  </tbody>
</table>
</div>
</div>
</body>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>