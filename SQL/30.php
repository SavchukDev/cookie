<?php
//  Из таблицы workers достаньте всех работников и отсортируйте их по возрастанию зарплаты.

include "db_connect.php";

$query = "SELECT * FROM workers ORDER BY salary";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);