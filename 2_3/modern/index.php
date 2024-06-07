<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students (Modern)</title>
    <style>
        body {
            margin: 10px;
            font-family: monospace;
            color: white;
            background-color: black;
        }

        a {
            text-decoration: none;
            color: yellow;
            background-color: #666;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 4px;
            display: inline-block;
        }

        table {
            border: 2px solid white;
        }
        thead th {
            color: #ccc;
            background-color: #666;
        }
    </style>
</head>
<body>
    <img src="header.png" alt="University" width="100%">

    <h1>STUDENTS (MODERN)</h1>

    <?php
    $DBCONN = new mysqli('localhost', 'root', '', 'icsa_webprogramming_university_db');
    $result = $DBCONN->query("SELECT * FROM student ORDER BY id");
    ?>

    <table cellspacing="0" cellpadding="10" width="66%" align="center">
        <thead>
            <tr>
                <th width="85">ID</th>
                <th>NAME</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
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