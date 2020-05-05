<?php
// Удалите всех работников, у которых возраст 23 года.

include "db_connect.php";

$query = "DELETE FROM workers WHERE age = 23";
$result = mysqli_query($db, $query);