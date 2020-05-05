<?php
//Выбрать работников в возрасте 23 года.

include 'db_connect.php';

$query = "SELECT * FROM workers WHERE age=23";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);