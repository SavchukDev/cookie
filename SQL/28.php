<?php
// Из таблицы workers достаньте первые 6 записей.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE id > 0 LIMIT 6";
$result = mysqli_query($db, $query);
