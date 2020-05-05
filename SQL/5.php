<?php
//Выбрать работников с зарплатой равной или большей 500$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE salary >= 500";
$result = mysqli_query($db, $query);
