/*
main calls each function in the program.

Parameters: none
Return: none
*/
function main() {
    whileEchoTwoThree();

    console.log("--------------------");

    forEchoTwoThree();

    console.log("--------------------");

    console.log(whileEvenArray(10));
    
    console.log("--------------------");

    console.log(forEvenArray(10));
    
    console.log("--------------------");

    console.log(reverseArray([3, 15, 2, 4, 5, 7, 9, 8]));
    
    console.log("--------------------");

    fizzBuzz(20);
};

/*
whileEchoTwoThree uses a while loop to check if each number in an array is divisible by 2 and/or 3. 
If the number is divisible by 2 and/or 3 it will log the number to the console. The loop iterates through 
the array using the indexcount variable to check each index.

Parameters: none
Return: none
*/
function whileEchoTwoThree() {
    const array30 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
    let indexcount = 0;

    while (indexcount < 30) {
        if ((array30[indexcount] % 2) == 0){
            console.log (array30[indexcount]);
        } 
        else if ((array30[indexcount] % 3) == 0){
            console.log (array30[indexcount]);
        };
        
    indexcount++;
    };
};

/*
forEchoTwoThree uses a for loop to check if each number in an array is divisible by 2 and/or 3. 
If the number is divisible by 2 and/or 3 it will log the number to the console. “of” is used to 
assign the current index to a variable to be used in an if block as the loop iterates through the 
provided array.

Parameters: none
Return: none
*/
function forEchoTwoThree() {
    const array30 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];

    for (const num of array30){
        if ((num % 2) == 0){
            console.log (num);
        } 
        else if ((num % 3) == 0){
            console.log (num);
        };
    };
};

/*
whileEvenArray uses a while loop to generate an array of all even numbers between 1 and n. It uses the 
count variable to check each number until it reaches n, using evenarray.push() to add any that are divisible 
to evenarray. The function then returns evenarray.

Parameters: n (int)
Return: evenarray (array)
*/
function whileEvenArray(n){
    let count = 1;
    let evenarray = [];

    while (count <= n){
        if ((count % 2) == 0){
            evenarray.push(count);
        };
        count++;
    };
    return evenarray;
};

/*
forEvenArray uses a for loop to generate an array of all even numbers between 1 and n. It first 
makes use of a while loop to generate the array of numbers from 1 to n. It then uses a for loop to 
iterate through and check each number in that array, using evenarray.push() to add any that are 
divisible by 2 to evenarray. The function then returns evenarray.

Parameters: n (int)
Return: evenarray (array)
*/
function forEvenArray(n){
    let basearray = [];
    let count = 1;

    while (count <= n){
        basearray.push(count);
        count++;
    };

    let evenarray = [];

    for (const num in basearray){
        console.log(num);
        if ((basearray[num] % 2) == 0){
            evenarray.push(basearray[num]);
        };
    };
    return evenarray;
};  

/*
reverseArray uses a for loop to count the indexes in the provided array. A while loop is then used 
to add each value in reverse order to a new reversed array by decrementing the count variable. The 
function then returns reverse.

Parameters: myarray (array)
Return: reverse (array)
*/
function reverseArray(myarray){
    let reverse = [];
    let count = -1
    for (const num of myarray){
        count++;
    };

    while (count > -1){
        reverse.push(myarray[count]);
        count--;
    };
    return reverse;
};

/*
fizzBuzz logs to the console a series of numbers from 1 to n, replacing multiples of 3 with Fizz, 
multiples of 5 with Buzz, and multiples of both with FizzBuzz. numberarray is a range of numbers 
from one to the inputted variable of n, generated using a while loop. A for loop iterates through 
that array checking for divisibility with an if block and mod operators, and echoes the appropriate 
output.

Parameters: n (int)
Return: none
*/
function fizzBuzz(n){
    let count = 1;
    let numberarray = [];
    while (count <= n){
        numberarray.push(count);
        count++;
    };

    for (const num of numberarray){
        if (((num % 3) == 0) && ((num % 5) == 0)){
            console.log("FizzBuzz");
        } 
        else if ((num % 3) == 0){
            console.log("Fizz");
        } 
        else if ((num % 5) == 0){
            console.log("Buzz");
        } 
        else {
            console.log(num);
        };
    };
};

main();