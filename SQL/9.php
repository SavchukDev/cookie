<?php
//Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).

include "db_connect.php";

$query = "SELECT * FROM workers WHERE age > 25 AND age <= 28";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);