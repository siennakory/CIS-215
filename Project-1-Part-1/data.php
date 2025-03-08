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

                require('dbconfig.php');
                $db = connectDB();

                function main(){
                    reviewArray();
                };

                function reviewArray(){
                    $select_id = $db->prepare('SELECT id FROM ProductReview');
                    $select_all = $db-prepare('SELECT * FROM ProductReview');
                    $select_id->execute;
                    $select_all->execute;

                    $ids = $select_id->fetchAll();
                    $id_array = array();
                    foreach ($ids as $array){
                        array_push($id_array, $array["id"]);
                    };
                    var_dump($id_array);
                };

                function displayReviews(){

                };

                main();

            ?>
            
        </main>

    </body>
</html>