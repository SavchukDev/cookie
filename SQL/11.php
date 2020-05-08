<?php
// Выбрать работников Петю и Васю.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";
$result = mysqli_query($db, $query);


for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);