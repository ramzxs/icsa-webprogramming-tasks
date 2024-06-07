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


    $customDate = date('Y-m-d');
    if ( isset( $_GET['customDate'] ) ) {
        $customDate = $_GET['customDate'];
    }

    $customTime = date('H:i:s');
    if ( isset( $_GET['customTime'] ) ) {
        $customTime = $_GET['customTime'];
    }

    ?>


    <form action="?" method="get">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>User-Defined Date:</td>
            <td>
                <input name="customDate" type="date" value="<?= $customDate ?>">
                <input name="customTime" type="time" value="<?= $customTime ?>"
                    style="width: 125px">
            </td>
        </tr>
        <tr>
            <td>Add Number of Days:</td>
            <td>
                <input name="days" type="number" value="<?= $days ?>"> day(s)
            </td>
        </tr>
        <tr>
            <td>Result:</td>
            <td>
                <?php
                if ( isset( $_GET['days'] ) ) {
                    $currentDateTime =  $customDate . ' ' . $customTime;
                                        // <Date Time>           <#>      days 
                    $result = strtotime($currentDateTime . ' ' . $days .' days'); // Unix timestamp

                    echo date('Y F d l h:i:s a', $result);
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