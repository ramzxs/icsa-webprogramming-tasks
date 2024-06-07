<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>LIST OF STUDENTS</h1>

    <?php
    $DBCONN = new mysqli('localhost', 'root', '', 'icsa_webprogramming_university_db');
    $result = $DBCONN->query("SELECT * FROM student ORDER BY id");
    ?>

    <table border="1" cellspacing="0" cellpadding="10" width="66%" align="center">
        <tr>
            <th width="75">ID</th>
            <th>NAME</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            // print_r($row); ?>
            <tr>
                <td>
                    <a href="?id=<?= $row['id'] ?>">
                        <?= $row['id'] ?>
                    </a>
                </td>
                <td>
                    <?php
                    if ( isset($_GET['id']) && $_GET['id'] == $row['id']) {
                        echo $row['name'];
                    } ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>