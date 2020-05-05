<?php
//  Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.
include "db_connect.php";

$query = "UPDATE workers SET name = 'Женя', salary = 900 WHERE name = 'Вася'";
$result = mysqli_query($db, $query);