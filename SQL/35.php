<?php
// В таблице pages найти строки, в которых фамилия автора заканчивается на "ов".
include "db_connect.php";

$query = "SELECT * FROM pages WHERE author LIKE '%ов'";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);