<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Web Form</title>
    </head>
    <body>

        <header>
            <h1>Week 4 Web Form</h1>
        </header>

        <main>
            <form action="submit-lecture2.php" method="post" class="survey">
                <fieldset>
                    <legend>Personal Information:</legend>

                    <div>
                        <label for="name-input">Name:</label>
                        <input name="name-input" type="text" id="name-input" />
                    </div>
                    <div>
                        <label for="email-input">Email:</label>
                        <input name="email-input" type="email" id="email-input" />
                    </div>
                    <div>
                        <label for="phone-input">Phone Number:</label>
                        <input name="phone-input" type="tel" id="phone-input" />
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Age Group:</legend>

                    <div>
                        <input type="radio" name="age-group" id="1-12" value="1-12" />
                        <label for="1-12">1-12</label>
                    </div>
                    <div>
                        <input type="radio" name="age-group" id="13-19" value="13-19" />
                        <label for="13-19">13-19</label>
                    </div>
                    <div>
                        <input type="radio" name="age-group" id="20-29" value="20-29" />
                        <label for="20-29">20-29</label>
                    </div>
                    <div>
                        <input type="radio" name="age-group" id="30-39" value="30-39" />
                        <label for="30-39">30-39</label>
                    </div>
                    <div>
                        <input type="radio" name="age-group" id="40-49" value="40-49" />
                        <label for="40-49">40-49</label>
                    </div>
                    <div>
                        <input type="radio" name="age-group" id="50+" value="50+" />
                        <label for="50+">50+</label>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>School and Work:</legend>
                    <div>
                        <label for="education">Highest Level of Education:</label>
                        <select name="education" id="education">
                            <optgroup label="Incomplete">
                                <option value="none">No Degree</option>
                                <option value="student">Current Student</option>
                            </optgroup>
                            <optgroup label="Complete">
                                <option value="highschool">High School</option>
                                <option value="college">College</option>
                            </optgroup>
                        </select>
                    </div>

                    <div>
                        <label for="work-history">Describe your Work History:</label>
                        <textarea id="work-history" name="work-history" rows="4" cols="40">Type your answer here...</textarea>
                    </div>
                </fieldset>


                <div>
                    <button type="submit" name="survey-submit" id="survey-submit">Submit</button>
                </div>
            </form>
        </main>

    </body>
</html>