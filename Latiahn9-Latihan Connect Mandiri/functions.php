<?php
// Connect SQL server
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($x)
{
    // query dulu
    $result = mysqli_query(mysqli_connect("localhost", "root", "", "phpdasar"), $x);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}