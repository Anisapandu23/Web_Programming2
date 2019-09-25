<?php 
include 'conection.php';

$id = $_GET['id'];

mysqli_query($conection, "DELETE FROM crud where id='$id'");

header("location:index.php");
 ?>