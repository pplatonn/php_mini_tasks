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
<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "" || $_POST["email"] == "" || $question = $_POST['question'] == "") {
        echo "<h1>Please enter all data</h1>";
    } else {

        $admin_email = 'polinaplatonova122@gmail.com';
        $username = $_POST["username"];
        $user_email = $_POST["email"];
        $email_theme = "Question from {$username},{$user_email}";
        $question = $_POST['question'];
        mail($admin_email, $email_theme, $question);
        echo "<h1>Your question was sent to administrator!</h1>";
        echo "<h2>Go back: " . "<a href='index.php'>tap here</a>";
    }
}
