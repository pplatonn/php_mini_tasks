<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mail.php" method="post">
        <label for="mail_address">
            Введите адрес вашей почты:
        </label>
        <input type="mail" name='mail_address'>
        <label for="username">
            Как вас зовут?
        </label>
        <input type="text" name="username">
        <label for="question">
            Ваш вопрос:
        </label>
        <input type="text" name="question">
        <input type="submit">
    </form>
</body>

</html>