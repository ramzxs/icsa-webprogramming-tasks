<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary App (Task 1.1.2)</title>
</head>
<body>
    <h1>DIARY APP (TASK 1.1.2)</h1>

    <h2>Entry 1</h2>
    <?php
    $file = fopen('entry1.txt', 'r') or die("Unable to open file");
    $content = fread($file, filesize('entry1.txt'));
    // echo str_replace("\n", '<br>', $content);
    echo '<pre>'. $content . '</pre>';
    fclose($file);
    ?>
</body>
</html>