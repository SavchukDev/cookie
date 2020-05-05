<?php
// Удалите Колю.

include "db_connect.php";

$query = "DELETE FROM workers WHERE name = 'Коля'";
$result = mysqli_query($db, $query);