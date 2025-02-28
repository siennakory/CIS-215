<?php

include 'My Resources\dbconfig.php';

$db = connectDB();

$db->query('[INSERT INTO Animal Shelter (name, pet_type, spayed) VALUES ("Kuma", "dog", "Y")]');

?>