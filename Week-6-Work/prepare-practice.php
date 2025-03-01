<?php

require('dbconfig.php');

$insert_data = $db->prepare('INSERT INTO TestTable (name) VALUES (?)');

$name = $_POST["name"];

$insert_data->execute(array($name));

?>