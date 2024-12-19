<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🍪</title>
</head>

<body>

    <?php
    //at 1st, check if there is cookie already. if not, let's create a
    // variable with 1 inside it: the 1st time user visited our page
    if (isset($_COOKIE['visit_counter'])) {
        $visit_counter = $_COOKIE['visit_counter'] + 1;
    } else {
        $visit_counter = 1;
    }
    // set the cookie for the 1st time with parameter 1 time of visiting

    setcookie("visit_counter", $visit_counter, [
        "path" => '/',
        "expires" => time() + (60 * 60 * 24 * 14)
    ]);
    // print out the result 
    echo "<h1>You visited the page {$visit_counter} times </h1>"
    ?>
</body>

</html>