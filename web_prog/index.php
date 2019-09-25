<!DOCTYPE html>
<html>
<head>
	<title>Project CRUD</title>
  <script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary text-warning">
  <a class="navbar-brand"> 
  <blockquote class="blockquote">
  <p class="mb-0">CRUD</p>
  <footer class="blockquote-footer text-warning">Create Read Update Delete</footer>
</blockquote>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>
<div class="w-75 p-3 mx-auto mt-2 bg-primary">
<form method="post" action="aksi_tambah_data.php" id="formm">
  <input type="hidden" name="id">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" required="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Username" name="username" required="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">E-mail</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="E-mail" name="email" required="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password" required="">
  </div>
  <button class="btn btn-md btn-dark"> Save </button>
  <a href="#" class="btn btn-md btn-warning" id="cleadField">Clear Field</a>
  <br/><br/>
</form>
<div>
  <table class="table table-striped table-success">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">E-mail</th>
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
      <td><?php echo $dt ['email']; ?></td>
      <td><?php echo $dt ['password']; ?></td>
      <td>
        <a href="#" data-id="<?= $dt['id'] ?>" data-nama="<?= $dt['nama'] ?>" data-password="<?= $dt['password'] ?>" data-username="<?= $dt['username'] ?>" data-email="<?= $dt['email'] ?>" class="updateModalButton text-danger">Edit</a>
        <a href="aksi_hapus_data.php?id=<?php echo $dt['id']; ?>">Hapus</a>
      </td>
    </tr>
    <?php 
    }

     ?>
  </tbody>
</table>
</div>
</div>
<script type="text/javascript">
  $('#formm')[0].reset();

  $(document).on('click','.updateModalButton', function(){
      var id = $(this).data('id');
      var nama = $(this).data('nama');
      var username = $(this).data('username');
      var password = $(this).data('password');
      var email = $(this).data('email');
      $('[name="id"]').val(id);
      $('[name="nama"]').val(nama);
      $('[name="username"]').val(username);
      $('[name="password"]').val(password);
      $('[name="email"]').val(email);
      $('#formm').attr('action', 'aksi_edit_data.php');
  });
  $(document).on('click','#cleadField', function(){
      $('[name="id"]').val("");
      $('[name="nama"]').val("");
      $('[name="username"]').val("");
      $('[name="password"]').val("");
      $('[name="email"]').val("");
      $('#formm').attr('action', 'aksi_tambah_data.php');
  });
</script>
</body>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>