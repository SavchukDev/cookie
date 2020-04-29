<?php
// Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!

if(!isset($_COOKIE['birth'])) {
    setcookie('birth', $_GET['birth'], time() + 3600);
    ?>

    <form>
        Введите дату рождения <br>
        <input name="birth" placeholder="Введите число и месяц (01.01)">
        <input type="submit">
    </form>

    <?php
}
$arr = explode('.', $_COOKIE['birth']);
if(isset($_COOKIE['birth'])) {
    $nowD = strtotime(date('d-m-Y'));
    $birthD = strtotime(date('d-m-Y', mktime(0,0,0,$arr[1],$arr[0])));

    if(($birthD - $nowD) < 0) {
        $nextY = date('Y') + 1;
        $nextBirthD = strtotime(date('d-m-Y', mktime(0,0,0,$arr[1],$arr[0], $nextY)));
        echo 'До дня рождения осталось ' . abs(floor(($nowD - $nextBirthD)/3600/24)) . ' дня(ей).';
    } elseif (floor(($birthD - $nowD)/3600/24) == 0) {
        echo 'С днем рождения!';
    } else {
        echo 'До дня рождения осталось ' . floor(($birthD - $nowD)/3600/24) . ' дня(ей).';
    }
}