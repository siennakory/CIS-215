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
                
                function main(){
                    results(calc_points());
                };

                function calc_points(){
                    $quiz_answers = array();
                    $count = 1;

                    while ($count <= 8){
                        $answer = $_POST["question-$count"];
                        array_push($quiz_answers, $answer);
                        $count++;
                    };

                    return $quiz_answers;
                };

                function results($answers){
                    $telepathy = 0;
                    $strength = 0;
                    $flying = 0;
                    $shifter = 0;

                    foreach ($answers as $a){
                        if ($a == "Te"){
                            $telepathy += 1;
                        } elseif ($a == "St"){
                            $strength += 1;
                        } elseif ($a == "Fl"){
                            $flying += 1;
                        } elseif ($a == "Sh"){
                            $shifter += 1;
                        };
                    };

                    $options = array($telepathy, $strength, $flying, $shifter);

                    rsort($options);

                    $winning_value = $options[0];
                    $winning_array = array();

                    if ($telepathy == $winning_value){
                        array_push($winning_array, "Te");
                    };
                    if ($strength == $winning_value){
                        array_push($winning_array, "St");
                    };
                    if ($flying == $winning_value){
                        array_push($winning_array, "Fl");
                    };
                    if ($shifter == $winning_value){
                        array_push($winning_array, "Sh");
                    };

                    $count = 0;
                    foreach ($winning_array as $value){
                        $count++;
                    };

                    if ($count == 0){
                        $winner = $winning_array[0];
                        print_results($winner);
                    } else {
                        $count--;
                        $winner = $winning_array[rand(0, $count)];
                        print_results($winner);
                    };
                };

                function print_results($winner){
                    if ($winner == "Te"){
                        print("<p>Your ideal superpower is TELEPATHY!</p>");
                    } elseif ($winner == "St"){
                        print("<p>Your ideal superpower is SUPER STRENGTH!</p>");
                    } elseif ($winner == "Fl"){
                        print("<p>Your ideal superpower is FLYING!</p>");
                    } elseif ($winner == "Sh"){
                        print("<p>Your ideal superpower is SHAPESHIFTER!</p>");
                    };
                };

                main();
                
            ?>

            <a href="homework4.php"><button type="button" name="return" id="return">Return to Form</button></a>
        </main>

    </body>
</html>