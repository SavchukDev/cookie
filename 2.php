<?php

// Удалите куку с именем test.

setcookie('test', 'My cookie', time()-3600);

echo $_COOKIE['test'];