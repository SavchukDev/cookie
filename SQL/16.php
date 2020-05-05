<?php
// Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE age = 27 or salary != 400";
$result = mysqli_query($db, $query);