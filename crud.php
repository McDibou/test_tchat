<?php
include 'config.php';
$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO `message` (`name`, `message`) VALUES ( '$name', '$message');";
mysqli_query($db, $sql);

var_dump($_POST);