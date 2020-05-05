<?php
//  Выбрать работника Петю.
include "db_connect.php";

$query = "SELECT * FROM workers WHERE name = 'Петя'";