<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>FUNCTIONS</h1>

    <?php
    $GLOBE = 'A';

    $a = 1;
    $b = 2;
    $c = $a + $b;
    echo $c . '<br>';

    // Function Call
    doSomething();
    echo '<br>';

    // Function Call (with Params and ReturnVal)
    $min = findLowest(999999, 99999, 9999);
    echo $min;
    ?>
</body>
</html>
<?php
// FUNCTION DECLARATION
function doSomething() {
    global $GLOBE;
    
    echo "Hello, World! --" . $GLOBE;
}

// Parameters (Inputs)
// Return Value (Output)
function findLowest($a, $b, $c) {
    $min = $a; // 999999

    /* if ($a < $min) {
        $min = $a;
    } */

    if ($b < $min) {
        $min = $b; // 99999
    }

    if ($c < $min) {
        $min = $c; // 9999
    }


    return $min;
}


?>