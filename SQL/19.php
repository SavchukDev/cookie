<?php
// Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.

include "db_connect.php";

$query = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), ('Петя', 31, 1000)";
$result = mysqli_query($db, $query);