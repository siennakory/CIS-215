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

                    age($db);

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

                    $select_id = $db->prepare('SELECT age FROM ProductReview');
                    $select_id->execute();

                    $age_select = $select_id->fetchAll();
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
                    } elseif ($winning_age == $a13_17){
                        array_push($winner_array, "13-17");
                    } elseif ($winning_age == $a18_22){
                        array_push($winner_array, "18-22");
                    } elseif ($winning_age == $a23_27){
                        array_push($winner_array, "23-27");
                    } elseif ($winning_age == $a28_32){
                        array_push($winner_array, "28-32");
                    } elseif ($winning_age == $a33_37){
                        array_push($winner_array, "33-37");
                    } elseif ($winning_age == $a38_42){
                        array_push($winner_array, "38-42");
                    } elseif ($winning_age == $a43_47){
                        array_push($winner_array, "43-47");
                    } elseif ($winning_age == $a48_52){
                        array_push($winner_array, "48-52");
                    } elseif ($winning_age == $a53_57){
                        array_push($winner_array, "53-57");
                    } elseif ($winning_age == $a58_62){
                        array_push($winner_array, "58-62");
                    } elseif ($winning_age == $a63_67){
                        array_push($winner_array, "63-67");
                    } elseif ($winning_age == $a68){
                        array_push($winner_array, "68+");
                    };

                    $count = 0;
                    foreach ($winner_array as $item){
                        $count++;
                    };

                    if ($count = 1){
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
                        $message = $message . " and $winner";
                        print($message);
                    };
                };

                function gender($db){

                };

                function stars($db){

                };

                function ratings($db){

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