<?php
//  Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.

include "db_connect.php";

$query = "UPDATE workers SET age = 23 WHERE (id > 2 AND id <= 5)";
$result = mysqli_query($db, $query);