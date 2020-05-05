<?php
// Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000";
$result = mysqli_query($db, $query);