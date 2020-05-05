<?php
// Выбрать работников Петю и Васю.

include "db_connect.php";

$query = "SELECT * FROM workers WHERE name = 'Петя' AND name = 'Вася'";