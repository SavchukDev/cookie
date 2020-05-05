<?php
//Выбрать работников с зарплатой равной или меньшей 900$.

include 'db_connect.php';

$query = "SELECT * FROM workers WHERE salary <= 900";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);