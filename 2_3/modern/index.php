<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students (Modern)</title>
</head>
<body>
    <h1>STUDENTS (MODERN)</h1>

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
        for ($i = 1; $row = $result->fetch_assoc(); $i++) { ?>
            <tr>
                <td>
                    <a href="javascript:loadData(
                            '<?= $row['id'] ?>',
                            '<?= $i ?>'
                    )">
                        <?= $row['id'] ?>
                    </a>
                </td>
                <td id="cell<?= $i ?>">
                    <!-- AJAX -->
                </td>
            </tr>
            <?php         
        }
        ?>
    </table>
    <script>
        async function loadData(studentID, cellNum) {
            const response = await fetch('loaddata.php?id=' + studentID);
            const text = await response.text();
            document.getElementById('cell' + cellNum).innerHTML = text;
        }
    </script>
</body>
</html>