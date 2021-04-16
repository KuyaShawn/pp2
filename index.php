<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'functions.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>

<?php
    $numbers = [ 7, 9, 8, 9, 8, 8, 6];
    echo "<title>Pair Program 2</title>";
    /*
     * Eashune Abenojar
     * 4/15/21
     * https://github.com/KuyaShawn/pp2.git
     * https://eabenojar.greenriverdev.com/328/pp2/index.php
    */
    echo "<h1>Pair Program 2</h1>";
    echo "<h2>PHP Array Practice.</h2>";
    echo  printArry($numbers);
    echo "<p>Largest Number in array: " . largest($numbers) . "</p>";
    echo  removeDups($numbers);

?>

</body>
</html>