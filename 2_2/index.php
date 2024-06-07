<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE APP (Task 2.2)</title>
</head>
<body>
    <h1>DATE APP (TASK 2.2)</h1>

    <?php
    $days = 1;
    if ( isset( $_GET['days'] ) ) {
        $days = $_GET['days'];
    }

    ?>


    <form action="?" method="get">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Current Date:</td>
            <td>
                <?= date('Y F d l h:i:s a') ?>
            </td>
        </tr>
        <tr>
            <td>Add:</td>
            <td>
                <input name="days" type="number" value="<?= $days ?>"> day(s)
            </td>
        </tr>
        <tr>
            <td>Result:</td>
            <td>
                <?php
                if ( isset( $_GET['days'] ) ) {
                    $result = compute($days);
                    echo '<b>'.$result.'</b>';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php

function compute($days) {
    $currentDateTime =  date('Y-m-d H:i:s');               
                                        // <Date Time>           <#>      days 
    $result = strtotime($currentDateTime . ' ' . $days .' days'); // Unix timestamp

    return date('Y F d l h:i:s a', $result);
}