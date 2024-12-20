<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <label for="">Enter your name:</label><br>
        <input type="text" name="username" id=""><br><br>
        <label for="">Enter your email:</label><br>
        <input type="email" name="email" id=""><br><br>
        <label for="">Enter your question:</label><br>
        <textarea name="question" id="">
        </textarea><br><br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
<style>
    body {
        font-family: "Ubuntu", sans-serif;
    }
    input {
        font-size: 30px;
    }
    label {
        font-size: 40px;
    }
    textarea {
        width: 400px;
        height: 200px;
    }
</style>
</html>