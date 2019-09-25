<?php 
include 'conection.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$passwd = $_POST['password'];
$email = $_POST['email'];

mysqli_query($conection, "INSERT INTO crud VALUES ('','$nama','$username','$passwd','$email')");

header("location:index.php")
 ?>