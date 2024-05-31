<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary App (Task 1.1.2)</title>
    <style>
        label {
            width: 125px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>DIARY APP (TASK 1.1.2)</h1>

    <h2>Create</h2>

    <?php
    if ( isset($_POST['num']) ) {
        $fileName = 'entry' . $_POST['num'] . '.txt';
        // Override?
        $file = fopen($fileName, 'w') or die("Unable to open file for write access.");
        fwrite($file, $_POST["content"]);
        fclose($file);

        echo '<b><i>Diary entry has been successfully saved.</i></b><br><br>';
    }
    ?>

    <form action="?" method="post">
        <label for="num">Entry Number:</label>
        <input type="number" name="num" id="num">
        <br>

        <label for="content">Content:</label>
        <textarea name="content" id="content" cols="60" rows="10"></textarea>
        <br>

        <label for="">&nbsp;</label>
        <button>Save</button>
    </form>
</body>
</html>