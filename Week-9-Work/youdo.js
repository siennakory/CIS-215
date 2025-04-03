let count = 1;
let sum = 0;
function add_to_n(n){
    
    if (count == n){
        console.log(sum);
    }
    else {
        sum = sum + count;
        console.log(sum);
        count = count + 1;
        console.log(count);
        add_to_n(n);
    };
};

add_to_n(5);