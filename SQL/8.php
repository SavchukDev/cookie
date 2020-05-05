<?php
//Узнайте зарплату и возраст Васи.

$query = "SELECT * FROM workers WHERE name='Вася'";
$result = mysqli_query($db, $query);