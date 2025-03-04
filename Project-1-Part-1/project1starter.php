<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Survey: Product Review</title>
    </head>
    <body>
        <main>
            <form action="submit.php" method="post" class="survey">

                <div>
                    <label for="email">Enter your email: </label>
                    <input type="email" name="email" id="email">
                </div>
                
                <div>
                    <label for="pw">Enter your password: </label>
                    <input type="password" name="pw" id="pw">
                </div>
                
                <div>
                    <fieldset>
                        <legend>What age are you? </legend>

                        <div>
                            <input type="radio" name="age" id="0-12" value="0-12">
                            <label for="0-12">0-12 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="13-17" value="13-17">
                            <label for="13-17">13-17 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="18-22" value="18-22">
                            <label for="18-22">18-22 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="23-27" value="23-27">
                            <label for="23-27">23-27 </label> 
                        </div>
                        <div>
                            <input type="radio" name="age" id="28-32" value="28-32">
                            <label for="28-32">28-32 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="33-37" value="33-37">
                            <label for="33-37">33-37 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="38-42" value="38-42">
                            <label for="38-42">38-42 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="43-47" value="43-47">
                            <label for="43-47">43-47 </label> 
                        </div>
                        <div>
                            <input type="radio" name="age" id="48-52" value="48-52">
                            <label for="48-52">48-52 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="53-57" value="53-57">
                            <label for="53-57">53-57 </label> 
                        </div>
                        <div>
                            <input type="radio" name="age" id="58-62" value="58-62">
                            <label for="58-62">58-62 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="63-67" value="63-67">
                            <label for="63-67">63-67 </label>
                        </div>
                        <div>
                            <input type="radio" name="age" id="68+" value="68+">
                            <label for="68+">68+ </label>
                        </div>
                    </fieldset>
                </div>
                
                <div>
                    <label for="gender">What is your gender?</label>
                    <select name="gender" id="gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="nb">Nonbinary</option>
                        <option value="gf">Genderfluid</option>
                        <option value="a">Agender</option>
                        <option value="o">Choose not to say/Other</option>
                    </select>
                </div>
                
                <div>
                    <label for="order-num">Order Number: </label>
                    <input type="number" name="order-num" id="order-num" minlength="8" maxlength="8"/> 
<!-- minlength and maxlength specify the number of characters allowed an minimum and maximum for an html input element -->
                </div>

                <div>
                    <label for="review">Tell us about your experience ordering from us!</label>
                    <textarea id="review" name="review" rows="4" cols="40" minlength="10" maxlength="100">Type your answer here...</textarea>
                </div>

                <div>
                    <button type="submit" name="survey-submit" id="survey-submit">Submit</button>
                </div>
            </form>
        </main>

    </body>
</html>