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

            <?php
                $edu = $_POST["education"];

                if ($edu == "college"){
                    print("<p>A college graduate? Impressive!</p>");
                };
            ?>

            <?php
                $email = $_POST["email-input"];
                $tel = $_POST["phone-input"];

                print("<h2>Contact Information:</h2><p>email: $email   phone: $tel</p>");
            ?>
        </main>

    </body>
</html>