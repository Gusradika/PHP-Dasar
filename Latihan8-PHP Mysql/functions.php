<?php
//database connect
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($x)
{
    $result = mysqli_query(mysqli_connect("localhost", "root", "", "phpdasar"), $x);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}