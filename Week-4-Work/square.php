<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Square Numbers</title>
    </head>
    <body>

        <header>
            <h1>Square Numbers</h1>
        </header>

        <main>
            <form action="" method="post" class="survey">
                <fieldset>
                    <legend>What is your favorite square number?</legend>

                    <?php
                    $squarearray = array(1, 4, 9, 16, 25, 36, 49, 64, 81, 100);

                    foreach ($squarearray as $num){
                        echo "<div>
                                <input type='radio' name='square-numbers-array' id'$num' value='$num' />
                                <label for='$num'>$num</label>
                            </div>";
                    };
                    ?>
                </fieldset>

                <fieldset>
                    <legend>What is your favorite square number?</legend>

                    <?php
                        for ($i=1; $i <= 10; $i++){
                            $num = ($i * $i);
                            echo "<div>
                                    <input type='radio' name='square-numbers-array' id'$num' value='$num' />
                                    <label for='$num'>$num</label>
                                </div>";
                        };
                    ?>
                </fieldset>

                <fieldset>
                    <legend>What is your favorite square number?</legend>

                    <?php
                        for ($num=1; $num<=100; $num=((sqrt($num)+1)*(sqrt($num)+1))){
                            echo "<div>
                                    <input type='radio' name='square-numbers-array' id'$num' value='$num' />
                                    <label for='$num'>$num</label>
                                </div>";
                        };
                    ?>
                </fieldset>
            </form>
        </main>

    </body>
</html>
