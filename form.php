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
