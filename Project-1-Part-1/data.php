<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="STYLESHEET.css" rel="stylesheet" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Product Review Data</title>
    </head>
    <body>

        <header>
            <h1>Product Reviews:</h1>
            <p><a href="summary.php">Too much? Check out a summary of our reviews!</a></p>
        </header>

        <main>
            <?php

                function main(){
                    reviewArray();
                };

                function reviewArray(){
                    require('dbconfig.php');
                    $db = connectDB();

                    $select_id = $db->prepare('SELECT id FROM ProductReview');
                    $select_id->execute();

                    $ids = $select_id->fetchAll();
                    $id_array = array();
                    foreach ($ids as $array){
                        array_push($id_array, $array["id"]);
                    };
                    
                    displayReviews($id_array);
                };

                function displayReviews($id_array){
                    require('dbconfig.php');
                    $db = connectDB();

                    $select_all = $db-prepare('SELECT * FROM ProductReview');
                    $select_all->execute();

                    foreach ($id_array as $id){
                        $review_array = $select_all->fetch();
                        $name = $review_array["name"];
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

                        print("<div class='review'><p>Name: $name | Age: $age | Gender: $gender | Rating: $stars stars</p>
                        <p>Review:</p>
                        <p>$review</p></div>");
                    };

                };

                main();

            ?>
            
        </main>

    </body>
</html>