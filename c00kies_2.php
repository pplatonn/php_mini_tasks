<!-- 2  Счётчик посещений страницы
Отображайте количество раз, когда пользователь заходил на страницу. Увеличивайте значение Cookie на каждом визите. -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

if (isset($_COOKIE['visitCount'])) {
    $visitCount = $_COOKIE['visitCount'] + 1;
} else {
    $visitCount = 1;
}
setcookie('visitCount', $visitCount, time() + (30 * 24 * 60 * 60));

echo "<h1>Вы посетили эту страницу " . $visitCount . " раз.</h1>";
?>
</body>
</html>