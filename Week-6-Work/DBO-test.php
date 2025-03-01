<?php

require('dbconfig.php');

$db = connectDB();

$db->query('INSERT INTO AnimalShelter (name, pet_type, spayed) VALUES ("Kuma", "dog", "Y")');

?>