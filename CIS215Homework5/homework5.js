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

function forEvenArray(n){
    let basearray = [];
    let count = 1;

    while (count <= n){
        basearray.push(count);
        count++;
    };
    console.log(basearray);

    let evenarray = [];

    for (const num in basearray){
        console.log(num);
        if ((basearray[num] % 2) == 0){
            evenarray.push(basearray[num]);
        };
    };
    return evenarray;
};  

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