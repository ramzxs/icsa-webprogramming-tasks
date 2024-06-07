<form action="?" method="post">
    <input type="text" name="id">
    <input type="text" name="name">
    <button>Submit</button>
</form>

<?php
if (isset($_POST['id'])) {

    $DBCONN = new mysqli('localhost', 'root', '', 'icsa_webprogramming_university_db');

    $result = $DBCONN->query("INSERT INTO student VALUES(
    '{$_POST['id']}',
    '{$_POST['name']}'
)");

}