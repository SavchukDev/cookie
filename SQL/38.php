<?php
//  В таблице workers найти строки, в которых имя работника заканчивается на "я".
include "db_connect.php";

$query = "SELECT * FROM workers WHERE name LIKE '%я'";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);