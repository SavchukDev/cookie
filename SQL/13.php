<?php
// Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
$result = mysqli_query($db, $query);