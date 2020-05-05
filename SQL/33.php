<?php
//  В таблице workers подсчитайте всех работников.
include "db_connect.php";

$query = "SELECT COUNT(*) FROM workers WHERE id > 0";
$result = mysqli_query($db, $query);
