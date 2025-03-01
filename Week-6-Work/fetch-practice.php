<?php

require 'dbconfig.php';

$db = connectDB();

$select = $db->prepare("SELECT * FROM TestTable");

$select->execute();

$info_row = $select->fetch();

var_dump($info_row);

?>