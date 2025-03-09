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

                    $age = age($db);

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

                };

                function gender($db){

                };

                function stars($db){

                };

                function ratings($db){

                };

                function reviews($db, $id_array){

                    $select_all = $db->prepare('SELECT * FROM ProductReview WHERE id="?"');
                    $select_all->execute();

                    foreach ($id_array as $id){
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

                        print("<div><h2>$name's Review:</h2>
                        <p>Age: $age | Gender: $gender | Rating: $stars stars</p>
                        <p>$review</p></div>");
                    };

                };

                main();

            ?>
            
        </main>

    </body>
</html>