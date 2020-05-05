<?php
//Выбрать работников с зарплатой НЕ равной 500$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE salary != 500";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);