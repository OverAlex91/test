//Напишите функцию smallestDivisor(). Она должна находить наименьший целый делитель числа. Используйте переменные. Используйте цикл while

const smallestDivisor = (num) => {
    let result = 2;
    if (num < 1) {
        return NaN;
    } else if (num === 1) {
        return num;
    }
    while (num % result) {
        result++;
    }
    return result;
}

console.log(smallestDivisor(15));
console.log(smallestDivisor(17));
console.log(smallestDivisor(0));

//Напишите функцию isPrime(). Она принимает число и возвращает true, если число является простым, и false в ином случае

const isPrime = (num) => {
    if (num < 2) return false;
    //т.к 0 и 1 являются сложными числами
    for (let i = 2; i < num; i++) {
        if (num % i == 0) {
            return false;
        }
    }
    return true;
}

console.log(isPrime(1));
console.log(isPrime(5));
console.log(isPrime(6));
