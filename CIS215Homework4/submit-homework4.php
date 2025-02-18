<!-- 
CIS 215 Homework 4 Submission Page
author: Sienna Korytkowski skorytk1@genesee.edu

submit-homework4.php is the submission page for the form in the homework4.php file. It collects posted
radio button response values and pushes them to an array. This array is then iterated through to determine
point values for each possible result. These results are then processed to determine the highest scoring
result. Any ties are broken through random generation.
-->
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
                /*
                main calls the greeting function and results function with calc_points as an argument.
                Parameters: none
                Return: none
                */
                function main(){
                    greeting();
                    results(calc_points());
                };

                /*
                greeting retrieves the response for the name input in the homework4.php
                form. It then prints an html paragraph element thanking the user by name
                for taking the quiz.
                Parameters: none
                Return: none
                */
                function greeting(){
                    $name = $_POST["name"];
                    print("<p>Thanks for taking our quiz, $name!</p>");
                };

                /*
                calc_points retrieves each response from the 8 radio button inputs in the homework4.php
                form. It then adds each value to an array. The function then returns that array.
                Parameters: none
                Return: $quiz_answers
                */
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

                /*
                results iterates through the array of responses and assigns each result option a point
                value based on how many times an answer associated with that result appears in the array.
                It then places those point values in to an array, and sorts the array in descending order
                using the rsort array function. It checks which result variables are equal to the value
                at index 0 (the highest value), and adds each to an array. If there is only one value in
                the array, there is no tie and it calls the print_results function with that value as the
                argument. If there are multiple values it selects a randomly generated index from the array
                to break the tie, and calls the print_results function with that value as the argument.
                Parameters: $answers
                Return: none
                */
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

                    rsort($options); #rsort is an array function that sorts an array in descending order (highest to lowest)

                    $winning_value = $options[0];#because of rsort the first index of the array will be the highest value
                    $winning_array = array();

                    #this if block adds a value corresponding to a result to an array to check for ties
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
                    } else { #this else statement occurs if there is a tie for the highest value, and breaks it with random generation
                        $count--; #this value is decreased to make it equal to the last index rather than the number of indexes (0 indexing)
                        $winner = $winning_array[rand(0, $count)]; 
                        #rand is a function that generates a random number within a provided range, I used it to generated a random index.
                        print_results($winner);
                    };
                };

                /*
                print_results checks which result the $winner variable provided by the results function
                corresponds to. It then prints a paragraph element informing the user of the results.
                Parameters: none
                Return: none
                */
                function print_results($winner){
                    if ($winner == "Te"){
                        print("<p>Your ideal superpower is TELEPATHY:</p> <p>You seek to understand and be understood by the world around you.</p>");
                    } elseif ($winner == "St"){
                        print("<p>Your ideal superpower is SUPER STRENGTH:</p> <p>You seek the strength to face life's challenges head on.</p>");
                    } elseif ($winner == "Fl"){
                        print("<p>Your ideal superpower is FLYING:</p> <p>You seek an escape from the monotony of daily life.</p>");
                    } elseif ($winner == "Sh"){
                        print("<p>Your ideal superpower is SHAPESHIFTER:</p> <p>You seek to the ability to adapt and change.</p>");
                    };
                };

                main();
                
            ?>

            <a href="homework4.php"><button type="button" name="return" id="return">Return to Form</button></a>
        </main>

    </body>
</html>