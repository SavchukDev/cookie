<?php
// Работнику с id=4 поставьте возраст 35 лет.
include "db_connect.php";

$query = "UPDATE workers SET age = 25 WHERE id = 4";
$result = mysqli_query($db, $query);