<!-- 
CIS 215 Homework 4
author: Sienna Korytkowski skorytk1@genesee.edu

homework4.php generates the webpage and form for a  superpower personality quiz. This quiz consists of 8 questions,
each collecting a required radio button response. The responses are submitted using the POST method, and the form action 
sends the user to submit-homework4.php where their result will be determined.
-->
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Superpower Quiz</title>
    </head>
    <body>

        <header>
            <h1>What's Your Ideal Superpower?</h1>
            <p>Find out in our exciting new quiz!</p>
        </header>

        <main>
            <form action="submit-homework4.php" method="post" class="survey">
                <ol>
                    <li>
                        <fieldset> <!-- Question 1 -->
                            <legend>Pick an animal:</legend>

                            <div>
                                <input type="radio" name="question-1" id="Te" value="Te" />
                                <label for="Te">Rat</label>
                            </div>
                            <div>
                                <input type="radio" name="question-1" id="St" value="St" />
                                <label for="St">Bear</label>
                            </div>
                            <div>
                                <input type="radio" name="question-1" id="Fl" value="Fl" />
                                <label for="Fl">Eagle</label>
                            </div>
                            <div>
                                <input type="radio" name="question-1" id="Sh" value="Sh" />
                                <label for="Sh">I don't like any of these animals.</label>
                            </div>
                        </fieldset>
                    </li> 

                    <li>
                        <fieldset> <!-- Question 2 -->
                            <legend>What skill would serve you best in a fight?</legend>

                            <div>
                                <input type="radio" name="question-2" id="Te" value="Te" />
                                <label for="Te">You need to understand your opponent and strategize.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-2" id="St" value="St" />
                                <label for="St">You need the strength to overpower your opponent.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-2" id="Fl" value="Fl" />
                                <label for="Fl">You need to stay out of reach of your opponent.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-2" id="Sh" value="Sh" />
                                <label for="Sh">You need to be unpredictable and keep your opponent guessing.</label>
                            </div>
                        </fieldset>
                    </li>

                    <li>
                        <fieldset> <!-- Question 3 -->
                            <legend>What is your favorite subject in school?</legend>

                            <div>
                                <input type="radio" name="question-3" id="Te" value="Te" />
                                <label for="Te">Psychology</label>
                            </div>
                            <div>
                                <input type="radio" name="question-3" id="St" value="St" />
                                <label for="St">P.E.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-3" id="Fl" value="Fl" />
                                <label for="Fl">English</label>
                            </div>
                            <div>
                                <input type="radio" name="question-3" id="Sh" value="Sh" />
                                <label for="Sh">Art</label>
                            </div>
                        </fieldset>
                    </li>
                    
                    <li>
                        <fieldset> <!-- Question 4 -->
                            <legend>What is one thing you stuggle with?</legend>

                            <div>
                                <input type="radio" name="question-4" id="Te" value="Te" />
                                <label for="Te">I wish I could understand people better and make myself understood.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-4" id="St" value="St" />
                                <label for="St">I wish I had the strength to help the people I care about and keep them safe.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-4" id="Fl" value="Fl" />
                                <label for="Fl">I wish I could escape my problems and feel free from the weight of my responsibilities.</label>
                            </div>
                            <div>
                                <input type="radio" name="question-4" id="Sh" value="Sh" />
                                <label for="Sh">I wish I had the power to change and adapt more easily.</label>
                            </div>
                        </fieldset>
                    </li>

                    <li>
                        <fieldset> <!-- Question 5 -->
                            <legend>What do you value most?</legend>

                            <div>
                                <input type="radio" name="question-5" id="Te" value="Te" />
                                <label for="Te">Intelligence</label>
                            </div>
                            <div>
                                <input type="radio" name="question-5" id="St" value="St" />
                                <label for="St">Physical Strength</label>
                            </div>
                            <div>
                                <input type="radio" name="question-5" id="Fl" value="Fl" />
                                <label for="Fl">Freedom</label>
                            </div>
                            <div>
                                <input type="radio" name="question-5" id="Sh" value="Sh" />
                                <label for="Sh">Creativity</label>
                            </div>
                        </fieldset>
                    </li>

                    <li> 
                        <fieldset> <!-- Question 6 -->
                            <legend>Which of these sports would you pick?</legend>

                            <div>
                                <input type="radio" name="question-6" id="Te" value="Te" />
                                <label for="Te">Chess</label>
                            </div>
                            <div>
                                <input type="radio" name="question-6" id="St" value="St" />
                                <label for="St">Boxing</label>
                            </div>
                            <div>
                                <input type="radio" name="question-6" id="Fl" value="Fl" />
                                <label for="Fl">Track</label>
                            </div>
                            <div>
                                <input type="radio" name="question-6" id="Sh" value="Sh" />
                                <label for="Sh">Swimming</label>
                            </div>
                        </fieldset>
                    </li>

                    <li> 
                        <fieldset> <!-- Question 7 -->
                            <legend>Which of these art mediums would you pick?</legend>

                            <div>
                                <input type="radio" name="question-7" id="Te" value="Te" />
                                <label for="Te">Pastels</label>
                            </div>
                            <div>
                                <input type="radio" name="question-7" id="St" value="St" />
                                <label for="St">Sculpture</label>
                            </div>
                            <div>
                                <input type="radio" name="question-7" id="Fl" value="Fl" />
                                <label for="Fl">Painting</label>
                            </div>
                            <div>
                                <input type="radio" name="question-7" id="Sh" value="Sh" />
                                <label for="Sh">Pencil Sketching</label>
                            </div>
                        </fieldset>
                    </li>

                    <li> 
                        <fieldset> <!-- Question 8 -->
                            <legend>Which response are you hoping for?</legend>

                            <div>
                                <input type="radio" name="question-8" id="Te" value="Te" />
                                <label for="Te">Telepathy</label>
                            </div>
                            <div>
                                <input type="radio" name="question-8" id="St" value="St" />
                                <label for="St">Super Strength</label>
                            </div>
                            <div>
                                <input type="radio" name="question-8" id="Fl" value="Fl" />
                                <label for="Fl">Flying</label>
                            </div>
                            <div>
                                <input type="radio" name="question-8" id="Sh" value="Sh" />
                                <label for="Sh">Shapeshifter</label>
                            </div>
                            <div>
                                <input type="radio" name="question-8" id="na" value="na" />
                                <label for="na">I don't want to influence my results at all.</label>
                            </div>
                        </fieldset>
                    </li>
                </ol>

                <div>
                    <button type="submit" name="submit" id="submit">Submit</button>
                </div>
            </form>
        </main>

    </body>
</html>