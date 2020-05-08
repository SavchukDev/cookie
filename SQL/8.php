<?php
//Узнайте зарплату и возраст Васи.

include "db_connect.php";

$query = "SELECT salary, age FROM workers WHERE name = 'Вася'";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
