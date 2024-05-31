<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API App (Task 1.1.3)</title>
</head>
<body>
    <h1>API APP (TASK 1.1.3)</h1>

    <ol>
        <li>
            <a href="?item=1">API</a>
        </li>
        <li>
            <a href="?item=2">System Architecture</a>
        </li>
    </ol>

    <br>
    <hr>
    <br>

    <?php
    if ( isset($_GET['item']) ) {
        
        switch ($_GET['item']) {
            case 1: $url = "https://en.wikipedia.org/wiki/API"; break;
            case 2: $url = "https://en.wikipedia.org/wiki/Systems_architecture"; break;
        }

        $content = file_get_contents($url);
        echo '<code>'.$content.'</code>';
    }    
    ?>
</body>
</html>