<?php
include 'config.php';

$sql = "SELECT * FROM `message` order by message ASC ";
$rq = mysqli_query($db, $sql);
$result = mysqli_fetch_all($rq, MYSQLI_ASSOC);

$json = json_encode($result);
echo $json;