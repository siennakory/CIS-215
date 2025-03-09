<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Product Review Data</title>
    </head>
    <body>

        <header>
            <h1>Review Summary:</h1>
            <p><a href="data.php">Return to Reviews.</a></p>
        </header>

        <main>
            <?php

                function main(){
                    require "dbconfig.php";
                    $db = connectDB();

                    $id_array = reviewArray($db);

                    stars($db);

                    age($db);

                    gender($db);

                    reviews($db, $id_array);

                };

                function reviewArray($db){
                    $select_id = $db->prepare('SELECT id FROM ProductReview');
                    $select_id->execute();

                    $ids = $select_id->fetchAll();
                    $id_array = array();
                    foreach ($ids as $array){
                        array_push($id_array, $array["id"]);
                    };
                    
                    return $id_array;
                };

                function age($db){
                    print("<h2>Respondent Ages:</h2>");

                    $select_age = $db->prepare('SELECT age FROM ProductReview');
                    $select_age->execute();

                    $age_select = $select_age->fetchAll();
                    $age_array = array();
                    foreach ($age_select as $array){
                        array_push($age_array, $array["age"]);
                    };

                    $a0_12 = 0;
                    $a13_17 = 0;
                    $a18_22 = 0;
                    $a23_27 = 0;
                    $a28_32 = 0;
                    $a33_37 = 0;
                    $a38_42 = 0;
                    $a43_47 = 0;
                    $a48_52 = 0;
                    $a53_57 = 0;
                    $a58_62 = 0;
                    $a63_67 = 0;
                    $a68 = 0;

                    foreach ($age_array as $item){
                        if ($item == "0-12"){
                            $a0_12++;
                        } elseif ($item == "13-17"){
                            $a13_17++;
                        } elseif ($item == "18-22"){
                            $a18_22++;
                        } elseif ($item == "23-27"){
                            $a23_27++;
                        } elseif ($item == "28-32"){
                            $a28_32++;
                        } elseif ($item == "33-37"){
                            $a33_37++;
                        } elseif ($item == "38-42"){
                            $a38_42++;
                        } elseif($item == "43-47"){
                            $a43_47++;
                        } elseif ($item == "48-52"){
                            $a48_52++;
                        } elseif ($item == "53-57"){
                            $a53_57++;
                        } elseif ($item == "58-62"){
                            $a58_62++;
                        } elseif ($item == "63-67"){
                            $a63_67++;
                        } elseif ($item == "68+"){
                            $a68++;
                        };
                    };

                    $count_array = array($a0_12, $a13_17, $a18_22, $a23_27, $a28_32, $a33_37, $a38_42, $a43_47, $a48_52, $a53_57, $a58_62, $a63_67, $a68);
                    rsort($count_array);
                    $winning_age = $count_array[0];
                    $winner_array = array();

                    if ($winning_age == $a0_12){
                        array_push($winner_array, "0-12");
                    };
                    if ($winning_age == $a13_17){
                        array_push($winner_array, "13-17");
                    };
                    if ($winning_age == $a18_22){
                        array_push($winner_array, "18-22");
                    };
                    if ($winning_age == $a23_27){
                        array_push($winner_array, "23-27");
                    };
                    if ($winning_age == $a28_32){
                        array_push($winner_array, "28-32");
                    };
                    if ($winning_age == $a33_37){
                        array_push($winner_array, "33-37");
                    };
                    if ($winning_age == $a38_42){
                        array_push($winner_array, "38-42");
                    };
                    if ($winning_age == $a43_47){
                        array_push($winner_array, "43-47");
                    };
                    if ($winning_age == $a48_52){
                        array_push($winner_array, "48-52");
                    };
                    if ($winning_age == $a53_57){
                        array_push($winner_array, "53-57");
                    };
                    if ($winning_age == $a58_62){
                        array_push($winner_array, "58-62");
                    };
                    if ($winning_age == $a63_67){
                        array_push($winner_array, "63-67");
                    };
                    if ($winning_age == $a68){
                        array_push($winner_array, "68+");
                    };

                    $count = 0;
                    foreach ($winner_array as $item){
                        $count++;
                    };

                    if ($count == 1){
                        $winner = $winner_array[0];
                        print("<p>Most of our respondents were aged $winner.</p>");
                    } else {
                        $winner = $winner_array[0];
                        $message = "<p>Most of our respondents were aged $winner";
                        $count--;
                        $index = 1;
                        while ($count > 1){
                            $winner = $winner_array[$index];
                            if ($count = 2){
                                $message = $message . ", $winner,";
                            } else {
                                $message = $message . ", $winner";
                            };
                            $count--;
                            $index++;
                        };
                        $winner =$winner_array[$index];
                        $message = $message . " and $winner.</p>";
                        print($message);
                    };
                };

                function gender($db){
                    print("<h2>Respondent Genders:</h2>");

                    $select_gender = $db->prepare('SELECT gender FROM ProductReview');
                    $select_gender->execute();

                    $gender_select = $select_gender->fetchAll();
                    $gender_array = array();
                    foreach ($gender_select as $array){
                        array_push($gender_array, $array["gender"]);
                    };

                    $m = 0;
                    $f = 0;
                    $nb = 0;
                    $gf = 0;
                    $a = 0;
                    $o = 0;

                    foreach ($gender_array as $item){
                        if ($item == "m"){
                            $m++;
                        } elseif ($item == "f"){
                            $f++;
                        } elseif ($item == "nb"){
                            $nb++;
                        } elseif ($item == "gf"){
                            $gf++;
                        } elseif ($item == "a"){
                            $a++;
                        } elseif ($item == "o"){
                            $o++;
                        };
                    };

                    $count_array = array($m, $f, $nb, $gf, $a, $o);
                    rsort($count_array);
                    $winning_gender = $count_array[0];
                    $winner_array = array();

                    if ($winning_gender == $m){
                        array_push($winner_array, "Male");
                    }; 
                    if ($winning_gender == $f){
                        array_push($winner_array, "Female");
                    };
                    if ($winning_gender == $nb){
                        array_push($winner_array, "Nonbinary");
                    };
                    if ($winning_gender == $gf){
                        array_push($winner_array, "Genderfluid");
                    };
                    if ($winning_gender == $a){
                        array_push($winner_array, "Agender");
                    };
                    if ($winning_gender == $o){
                        array_push($winner_array, "Choose not to say/Other");
                    };

                    $count = 0;
                    foreach ($winner_array as $item){
                        $count++;
                    };

                    if ($count == 1){
                        $winner = $winner_array[0];
                        print("<p>Most of our respondents identified as $winner.</p>");
                    } else {
                        $winner = $winner_array[0];
                        $message = "<p>Most of our respondents identified as $winner";
                        $count--;
                        $index = 1;
                        while ($count > 1){
                            $winner = $winner_array[$index];
                            if ($count = 2){
                                $message = $message . ", $winner,";
                            } else {
                                $message = $message . ", $winner";
                            };
                            $count--;
                            $index++;
                        };
                        $winner =$winner_array[$index];
                        $message = $message . " or $winner.</p>";
                        print($message);
                    };
                };

                function stars($db){
                    print("<h2>Average Rating:</h2>");

                    $select_stars = $db->prepare('SELECT stars FROM ProductReview');
                    $select_stars->execute();

                    $stars_select = $select_stars->fetchAll();
                    $stars_array = array();
                    foreach ($stars_select as $array){
                        array_push($stars_array, $array["stars"]);
                    };

                    $rating = 0;
                    $count = 0;

                    foreach ($stars_array as $item){
                        if ($item == "0"){
                            $count++;
                        } elseif ($item == "1"){
                            $rating += 1;
                            $count++;
                        } elseif ($item == "2"){
                            $rating += 2;
                            $count++;
                        } elseif ($item == "3"){
                            $rating += 3;
                            $count++;
                        } elseif ($item == "4"){
                            $rating += 4;
                            $count++;
                        } elseif ($item == "5"){
                            $rating += 5;
                            $count++;
                        };
                    };

                    $average = round($rating/$count, 1);

                    print("<p>Our product has received an average of $average stars from $count reviews.</p>");

                };

                function reviews($db, $id_array){
                    print("<h2>A Few of Our Reviews:</h2>");
                    $index_array = array_rand($id_array, 3);

                    foreach ($index_array as $item){
                        $index = $id_array[$item];
                        $select_all = $db->prepare('SELECT * FROM ProductReview WHERE id=?');
                        $select_all->execute(array($index));

                        $review_array = $select_all->fetch();
                        $name = $review_array["names"];
                        $age = $review_array["age"];
                        $gender = $review_array["gender"];
                        $stars = $review_array["stars"];
                        $review = $review_array["review"];

                        if ($gender == "m"){
                            $gender = "Male";
                        } elseif ($gender == "f"){
                            $gender = "Female";
                        } elseif ($gender == "nb"){
                            $gender = "Nonbinary";
                        } elseif ($gender == "gf"){
                            $gender = "Genderfluid";
                        } elseif ($gender == "a"){ 
                            $gender = "Agender";
                        } elseif ($gender == "o"){
                            $gender = "Choose not to say/Other";
                        };

                        print("<div><h3>$name's Review:</h3>
                        <p>Age: $age | Gender: $gender | Rating: $stars stars</p>
                        <p>$review</p></div>");
                    };
                };

                main();

            ?>
            
        </main>

    </body>
</html>