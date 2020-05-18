<?php

// Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.

if (isset($_COOKIE['counter'])) {
    setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/');
} else {
    setcookie('counter', 1, time() + 3600);
}

echo $_COOKIE['counter'];

/*isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() - 3600, '/') :
    setcookie('counter', 1, time() + 3600, '/');

echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;*/
