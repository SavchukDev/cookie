<?php
/// В таблице workers найти строки, в которых возраст работника начинается с числа 3, а далее идет только одна цифра.

include "db_connect.php";

$query = "SELECT * FROM wokers WHERE age LIKE '3_'";
$result = mysqli_query($db, $query);