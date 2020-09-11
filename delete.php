<?php

include 'connect.php';

$id = $_GET[id];

$q = " DELETE FROM `mrbean` WHERE id = $id ";$q);

mysqli_query($conn, $q);

header('location:display.php');

?>