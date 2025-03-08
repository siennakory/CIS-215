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
                    var_dump($id_array);
                };

                function displayReviews($id_array){
                    require('dbconfig.php');
                    $db = connectDB();

                    $select_all = $db-prepare('SELECT * FROM ProductReview');
                    $select_all->execute();

                };

                main();

            ?>
            
        </main>

    </body>
</html>