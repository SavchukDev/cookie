<?php
// Удалите работника с id=7.

include "db_connect.php";

$query = "DELETE FROM workers WHERE id = 16";
$result = mysqli_query($db, $query) or die(mysqli_error($db));