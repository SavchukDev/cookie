<?php
//Выбрать работников с зарплатой более 400$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE salary > 400";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);