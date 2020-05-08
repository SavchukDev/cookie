<?php
// Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE (age >= 23 AND age <= 27) OR (salary >= 400 AND salary < 1000)";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);