<?php
function getDataOrmas()
{
    global $connection;
    $query = "SELECT * FROM `pendaftar`";
    $pendaftar = mysqli_query($connection, $query);
    $totalOrmas = mysqli_num_rows($pendaftar);
    echo '<h1 class="card-title text-center">' . $totalOrmas . '</h1>';
}
function getAkunOrmas()
{
    global $connection;
    $query = "SELECT * FROM `users_login`";
    $users_login = mysqli_query($connection, $query);
    $totalUsers = mysqli_num_rows($users_login);
    echo '<h1 class="card-title text-center">' . $totalUsers . '</h1>';
}

?>