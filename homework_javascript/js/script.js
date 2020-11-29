"use strict";
//Написать функцию factorial(n), которая возвращает n!, используя цикл while:
const factorialWhile = (n) => {
    let result = n;
    while (n > 1) {
        n--;
        result *= n;
    }
    return result;
}

console.log(factorialWhile(3));

//Написать функцию factorial(n), которая возвращает n!, используя цикл for:
const factorialFor = (n) => {
    let result = 1;
    for (n; n >= 1; n--) {
        result *= n;
    }

    return result;
}

console.log(factorialFor(4));

//Напишите функцию sumSquareDifference(), которая принимает аргумент n и возвращает разницу между квадратом суммы и суммой квадратов первых n натуральных чисел.

const sumSquareDifference = (n) => {
    let res1 = 0;
    for (let i = 1; i <= n; i++) {
        res1 += i ** 2;
    }
    let res2 = 0;
    for (let i = 1; i <= n; i++) {
        res2 += i;
    }

    let total = res2 ** 2 - res1;

    return total;
}

console.log(sumSquareDifference(10));


// Объекты

const createName = {
    name: 'John',
};

let userName = {
    name: 'Alex',
};

createName.name = 'Ivan';
userName.name = 'Oleg';

console.log(createName.name);
console.log(userName.name);
//Значение объекта внесенного в константу можно изменять, так же как и значение объекта внесенного в переменную.
//Задать другой объект в константу уже нельзя, можно лишь изменить существующее значение. Например:
//
//createName = {
//    city: 'New York'
//};
//
//console.log(createName.city);
// Выдаст ошибку TypeError. Недопустимое значение константы 
// Однако присвоить другой объект в переменную можно, ошибки не будет. Например код написанный ниже, выполнится без ошибки.
//userName = {
//    city: 'New York'
//};
//
//console.log(userName.city);


//Реализуйте функцию createUser с сигнатурой createUser(name: string, city: string): object

const createUser = (name, city) => {
    const result = {
        name,
        city
    }
    return result;
}

console.log(createUser('Marcus Aurelius', 'Roma'));
