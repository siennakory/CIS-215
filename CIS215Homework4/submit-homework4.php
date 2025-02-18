<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Quiz Results</title>
    </head>
    <body>

        <header>
            <h1>Quiz Results:</h1>
        </header>

        <main>
            <?php
                $quiz_answers = array();
                $count = 1;

                while ($count <= 8){
                    $answer = $_POST["question-$count"];
                    array_push($quiz_answers, $answer);
                    $count++;
                };
            ?>
        </main>

    </body>
</html>