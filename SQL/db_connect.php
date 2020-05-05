<?php

$db = mysqli_connect('localhost', 'phil', '1732', 'test');
if(!$db) die(mysqli_connect_error());

mysqli_set_charset($db, "utf8") or die ('Charset error');