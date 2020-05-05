<?php
// В таблице workers подсчитайте всех работников c зарплатой 300$.

include "db_connect.php";

$query = "SELECT COUNT(*) FROM workers WHERE salary = 300";
$result = mysqli_query($db, $query);

/*for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);*/