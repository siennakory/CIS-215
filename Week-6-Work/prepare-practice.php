<?php

require 'dbconfig.php';

$db = connectDB();

$insert_data = $db->prepare('INSERT INTO TestTable (name) VALUES (?)');

$name = $_POST["name-input"];

$insert_data->execute(array($name));

?>