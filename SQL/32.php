<?php
// Из таблицы workers достаньте работников со второго по шестого и отсортируйте их по возрастанию возраста.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE id > 0 ORDER BY age LIMIT 2,6";
$result = mysqli_query($db, $query);