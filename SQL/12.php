<?php
// Выбрать всех, кроме работника Петя.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE name != 'Петя'";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);