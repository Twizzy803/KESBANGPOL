<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "indomas";

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $sql = "DELETE FROM `pendaftar` WHERE id = $id";
    $connection->query($sql);
}
header("location: ../data.php");
exit;
