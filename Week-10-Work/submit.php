<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Submission Page</title>

        <script src="events.js"></script>
    </head>
    <body>

        <header>
            <h1>Submission Confirmed</h1>
        </header>

        <main>
            <p>Thank you for completing our survey, 
                <?php
                    echo $_POST["name-input"];
                ?>!</p>
        </main>

    </body>
</html>