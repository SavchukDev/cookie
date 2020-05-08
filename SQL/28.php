<?php
// Из таблицы workers достаньте первые 6 записей.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE id LIMIT 6";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);