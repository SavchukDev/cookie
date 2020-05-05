<?php
// Из таблицы workers достаньте всех работников и отсортируйте их по убыванию зарплаты.

include "db_connect.php";

$query = "SELECT * FROM workers ORDER BY salary DESC";
$result = mysqli_query($db, $query);