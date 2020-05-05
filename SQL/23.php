<?php
// Поставьте Васе зарплату в 200$.

include "db_connect.php";

$query = "UPDATE workers SET salary = 200 WHERE name = 'Вася'";
$result = mysqli_query($db, $query);