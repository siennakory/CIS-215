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
                    if (pwVerify() == True){
                        if (validateInputs() == True){
                            print("<p>All inputs are valid!</p>")
                        };
                    };
                };
                
                /*
                Tested Inputs:
                actual password: needs to register as valid
                password with different capitalization: make sure it is case sensitive
                password with different numbers: make sure it is case sensitive
                password with no numbers: make sure it it case sensitive
                scrambled password: make sure it is case sensitive
                wrong password: make sure it only works with the correct password
                */
                function pwVerify(){
                    $password = $_POST["pw"];

                    if ((password_verify($password, "$2y$10\$wg0ugl7DeYf5zJdtRorV4.7bgIJgj83Tf4LJi1WyD9M2n3u8DX/ku")) == False){
                        print("<p>Password is invalid. :(</p> <p>Plase return to the form and try again.</p>");
                        return False;
                    } else {
                        return True;
                    };
                };

                function valEmail(){
                    $email = $_POST["email"];
                    if (str_contains("@") AND str_ends_with((".com") OR (".org"))){
                        return True;
                    } else {
                        
                    }
                };

                function valPhone(){
                    $phone = $_POST["phone"];
                };

                function valAge(){
                    $age = $_POST["age"];
                };

                function valGender(){
                    $gender = $_POST["gender"];
                };

                function valReview(){
                    $review = $_POST["review"];
                };

                function valInputs(){
                    if (valEmail() == True){
                        if (valPhone() == True){
                            if(valAge() == True){
                                if (valGender() == True){
                                    if (valReview() == True){
                                        return True;
                                    };
                                };
                            };
                        };
                    };
                };

                main();

            ?>
        </main>

    </body>
</html>