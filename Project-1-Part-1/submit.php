<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="STYLESHEET.css" rel="stylesheet" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Submission Page</title>
    </head>
    <body>

        <header></header>

        <main>
            <?php
                function main(){
                    pwVerify()
                };
                
                /*
                Tested Inputs:

                */
                function pwVerify(){
                    $pw_hash = "$2y$10$7zeBUc4DvYw8ihrj6hrqte58o3wQUh5S6bxBxWceNK3Me6skN7.Qy";
                    $password = $_POST["pw"];

                    if (password_verify($password, $pwhash)){
                        print("<p>Password is valid!</p>")
                    } else {
                        print("<p>Password is invalid. :(</p>")
                    }
                };

            ?>
        </main>

    </body>
</html>