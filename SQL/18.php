<?php
// Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.

include "db_connect.php";

$query = "INSERT INTO workers (name, salary) VALUES ('Светлана', 1200)";
$result = mysqli_query($db, $query);