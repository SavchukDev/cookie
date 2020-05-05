<?php
//  Из таблицы workers достаньте записи со вторую, 3 штуки.
include "db_connect.php";

$query = "SELECT * FROM workers WHERE id > 0 LIMIT 1, 3";
$result = mysqli_query($db, $query);

/*for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);*/