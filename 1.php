<?php
// По заходу на страницу запишите в куку с именем test текст '123'. Затем обновите страницу и выведите содержимое этой куки на экран.

setcookie('test', 'my cookie');
echo $_COOKIE['test'];