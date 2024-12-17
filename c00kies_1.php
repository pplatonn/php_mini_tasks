<!-- 1 Сохранение имени пользователя и приветствие при следующем визите  -->

<?php
$cookie_name = "username";
if (isset($_POST['name'])) {
    $cookie_value = htmlspecialchars($_POST['name']);
    setcookie($cookie_name, $cookie_value, time() + (7 * 24 * 60 * 60), "/");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие</title>
</head>

<body>
    <h1>
        <?php

        if (isset($_COOKIE[$cookie_name])) {
            echo "Привет, " . htmlspecialchars($_COOKIE[$cookie_name]) . "!";
        } else {
            echo "Введите ваше имя ниже:";
        }
        ?>
    </h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Сохранить</button>
    </form>
</body>

</html>