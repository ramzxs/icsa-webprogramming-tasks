<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>LIST OF STUDENTS</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>NAME</td>
        </tr>
        <tr>
            <td>
                <a href="index.php?id=123">123</a>
            </td>
            <td>
                <?php
                if ( isset($_GET['id']) && $_GET['id'] == '123') {
                    echo 'Alpha';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="index.php?id=124">124</a>
            </td>
            <td>
                <?php
                if ( isset($_GET['id']) && $_GET['id'] == '124') {
                    echo 'Bravo';
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>