<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="STYLESHEET.css" rel="stylesheet" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Submission Page</title>
    </head>
    <body>

        <header>
            <h1>Submission Page</h1>
        </header>

        <main>
            <?php
                function main(){
                    if (pwVerify()){
                        if (valInputs()){
                            addData();
                            print("<p>Thank you for your review! Your responses have been saved.</p>");
                            print("<p><a href='data.php'>Check out our other reviews!</a></p>");
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

                /*
                Tested Inputs:
                valid email: check that it registers properly
                emails not from genesee.edu: make sure they are not valid
                inputs that are not emails: make sure they are not valid
                */
                function valEmail(){
                    $email = $_POST["email"];
                    if (str_ends_with($email, "@genesee.edu")){
                        return True;
                    } else {
                        print("<p>Email is invalid. :(</p> <p>Plase return to the form and try again.</p>");
                        return False;
                    };
                };

                /*
                Tested Inputs:
                valid phone number: check that it registers properly
                too long phone number: check that it catches it
                too short phone number: check that it catches it
                letters: check that it only accepts numbers
                with special characters: check that it only accepts numbers
                */
                function valPhone(){
                    $phone = $_POST["phone"];
                    if (is_numeric($phone) AND (strlen($phone) == 10)){
                        return True;
                    } else {
                        print("<p>Phone Number is invalid. :(</p> <p>Plase return to the form and try again.</p>");
                        return False;
                    };
                };

                /*
                Tested Inputs:
                valid selection: check that it registers properly
                no selection: check that it does not accept no selection
                */
                function valAge(){
                    $age = $_POST["age"];
                    if ($age > 0){
                        return True;
                    } else {
                        print("<p>Age is empty. :(</p> <p>Plase return to the form and select an option.</p>");
                        return False;
                    };
                };

                /*
                Tested Inputs:
                valid selection: check that it registers properly
                no selection: check that it does not accept no selection
                */
                function valGender(){
                    $gender = $_POST["gender"];
                    if ($gender > 0){
                        return True;
                    } else {
                        print("<p>Gender is empty. :(</p> <p>Plase return to the form and select an option.</p>");
                        return False;
                    };
                };

                /*
                Tested Inputs:
                valid length response: check that it registers correctly
                too long response: check that it catches it
                too short response: check that it catches it
                10 character response: check that it is included
                100 character response: check that it is included
                */
                function valReview(){
                    $review = $_POST["review"];
                    if ((strlen($review) <= 100) AND (strlen($review) >= 10)) {
                        return True;
                    } elseif (strlen($review > 100)) {
                        print("<p>Review is too long. :(</p> <p>Plase return to the form and try again.</p>");
                        return False;
                    } elseif (strlen($review) < 10) {
                        print("<p>Review is too short. :(</p> <p>Plase return to the form and try again.</p>");
                    };
                };

                function valStars(){
                    $stars = $_POST["stars"];
                    if ($stars > 0){
                        return True;
                    } else {
                        print("<p>Rating is empty. :(</p> <p>Plase return to the form and select an option.</p>");
                        return False;
                    };
                };

                function valInputs(){
                    if (valEmail()){
                        if (valPhone()){
                            if (valAge()){
                                if (valGender()){
                                    if (valReview()){
                                        if (valStars()){
                                            return True;
                                        };
                                    };
                                };
                            };
                        };
                    };
                };

                function addData(){
                    require('dbconfig.php');

                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $age = $_POST["age"];
                    $gender = $_POST["gender"];
                    $review = $_POST["review"];

                    $db = connectDB();

                    $select_emails = $db->prepare("SELECT email FROM ProductReview");
                    $select_emails->execute();
                    $select_array = $select_emails->fetchAll();
                    $email_array = array();

                    foreach ($select_array as $array){
                        array_push($email_array, $array["email"]);
                    };

                    if (in_array($email, $email_array)){
                        $prepared_stat = $db->prepare("DELETE FROM ProductReview WHERE email=?");
                        $prepared_stat->execute(array($email));
                    };
                    
                    $prepared_stat = $db->prepare("INSERT INTO ProductReview (email, phone, age, gender, stars, review) VALUES (?, ?, ?, ?, ?, ?);");
                    $prepared_stat->execute(array($email, $phone, $age, $gender, $stars, $review));
                };

                main();

            ?>
        </main>

    </body>
</html>