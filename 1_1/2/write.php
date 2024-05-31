<?php
$file = fopen('file.txt', 'w') or die("Unable to open file for write access.");
fwrite($file, 'Some Content');
fclose($file);

echo '<b><i>Content written.</i></b><br><br>';