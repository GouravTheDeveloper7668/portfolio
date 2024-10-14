<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Question </title>
</head>

<body>
    <?php include('./components/header.php') ?>
    <h4>1. How to Write PHP Code in Different Ways?</h4>

    <?php
    // Standard PHP tag
    echo "Hello, World!", "<br/>";
    ?>

    <?=
    // Short open tag (may need to be enabled in php.ini)
    "Hello, World!";
    ?>

    <?php
    echo "<h1>This is a heading</h1> \n";
    echo "<p>This is a paragraph</p>";
    ?>

    <?php

    try {
        // Code that may throw an exception
        throw new Exception('Error occurred!');
    } catch (Exception $e) {
        // Handle exception
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    } finally {
        echo "This block will always execute.", "<br/>";
    }
    ?>

    <?php
    $start = microtime(true); // Start timer

    // Code execution

    $end = microtime(true); // End timer
    $executionTime = $end - $start;
    echo "Execution time: " . $executionTime . " seconds";


    ?>

    <br>
    <br>

    <?php
    if (in_array('mod_rewrite', apache_get_modules())) {
        echo "mod_rewrite is enabled";
    } else {
        echo "mod_rewrite is not enabled";
    }
    ?>

    <br>
    <br>

    <form method="POST">
    Enter the number of terms: <input type="number" name="terms"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $terms = $_POST['terms'];
    $n1 = 0;
    $n2 = 1;
    
    echo "Fibonacci Series:<br>";
    echo $n1 . ", " . $n2;
    
    for ($i = 2; $i < $terms; $i++) {
        $n3 = $n1 + $n2;
        echo ", " . $n3;
        $n1 = $n2;
        $n2 = $n3;
    }
}
?>



    <?php include('./components/footer.php') ?>
</body>

</html>