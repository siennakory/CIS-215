<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Submission Page</title>
    </head>
    <body>

        <header>
            <h1>Submission Confirmed</h1>
        </header>

        <main>
            <?php
                $age = $_POST["age-group"];
                $name = $_POST["name-input"];

                if ($age = "1-12"){
                    print("<p>Thank you for completing our survey, $name, but aren't you a little young to be in this class?</p>");
                } else {
                    print("<p>Thank you for completing our survey, $name!</p>");
                };
            ?>
        </main>

    </body>
</html>