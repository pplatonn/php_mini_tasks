<?php 
// at 1st we check if form was submitted 
// if yes, set cookie for 1 day (for parameters let's use just "language" for name and value from superglobal $_POST)
if (isset($_POST['submit'])) {
    setcookie('language', $_POST['language'], [
        "path" => '/',
        "expires" => time() + (60*60*24)
    ]);
}

// then check if language was selected at all and save it into a variable
// if not, Russian will be the default language of page 

if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
} else {
    $language = 'ru';
}

$messages = [
    'ru' => "Добро пожаловать!",
    "en" => "Welcome!",
    "kz" => "Қош келдіңіз!"
]

?>


<!DOCTYPE html>
<html lang="<?php echo $language; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚙️</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="lang_ru">Русский</label>
        <input type="radio" name="language" value="ru" id="lang_ru" <?php if ($language == 'ru') {echo "checked";};?>><br>

        <label for="lang_en">English</label>
        <input type="radio" name="language" value="en" id="lang_en" <?php if ($language == 'en') {echo "checked";};?>><br>

        <label for="lang_kz">қазақ тілі</label>
        <input type="radio" name="language" value="kz" id="lang_kz" <?php if ($language == 'kz') {echo "checked";};?>><br><br>

        <input type="submit" name="submit"><br>
    </form>
    <h1><?php echo $messages[$language];?></h1>
</body>

</html>