<?php
// Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.

include "db_connect.php";

$query = "INSERT INTO workers SET name = 'Никита', age = 26, salary = 300";
$result = mysqli_query($db, $query);