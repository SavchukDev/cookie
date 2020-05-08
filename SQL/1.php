<?php
//Выбрать работника с id = 3.

$host = 'localhost';
$user = 'phil';
$password = '1732';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($link, "zSET NAMES 'utf-8'");

$query = 'SELECT * FROM workers WHERE id=3 ';

$result = mysqli_query($link, $query) or die (mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);
