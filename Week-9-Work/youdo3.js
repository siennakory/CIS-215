const sample_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
let array3 = [];
for (const element of sample_array){
    if ((element % 2) == 0){
        array3.push(element);
    };
};

console.log(array3);