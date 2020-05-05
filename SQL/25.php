<?php
//  Всем, у кого зарплата 500$ сделайте ее 700$.
include "db_connect.php";

$query = "UPDATE workers SET salary = 700 WHERE salary = 500";
$result = mysqli_query($db, $query);