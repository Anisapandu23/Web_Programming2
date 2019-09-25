<?php 
include 'conection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($conection, "UPDATE crud SET nama='$nama', username='$username', password='$password', email='$email' where id='$id'");

header("location:index.php");
?>