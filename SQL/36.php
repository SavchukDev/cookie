<?php
//  В таблице pages найти строки, в которых есть слово "элемент" (искать только по колонке article).

include "db_connect.php";

$query = "SELECT * FROM pages WHERE article LIKE '%элемент%'";
$result = mysqli_query($db, $query);

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);