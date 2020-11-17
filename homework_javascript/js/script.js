'use strict';
//Задание 1 Идентификаторы

let name = 'Alexander'
const year = 1991

function helloFunction(name) {
    console.log('Hi ' + name + ', you born in ' + year);
}

helloFunction(name); // вызываем функцию helloFunction и аргументом name

//Реализуйте функцию range(start: number, end: number): array которая отдает массив чисел из диапазона [15, 30] включая крайние числа.

function range(arg1, arg2) {
    let resultedArr = [];
    while (arg1 <= arg2) {
        resultedArr.push(arg1)
        arg1++
    }
    return resultedArr
}

console.log(range(15, 30));

//Реализуйте функцию rangeOdd(start: number, end: number): array которая отдает массив нечетных чисел из диапазона [15, 30] включая крайние числа.

function rangeOdd(arg1, arg2) {
    let resultArr = [];
    while (arg1 <= arg2) {
        if (arg1 % 2 == 0) {
            resultArr.push(arg1)
        } else {}
        arg1++
    }
    return resultArr
}

console.log(rangeOdd(15, 30));

//Вложенные вызовы функций в цикле


//Реализуйте функцию average с сигнатурой average(a: number, b: number): number вычисляющую среднее арифметическое своих аргументов
function average(a, b) {
    let result = (a + b) / 2;
    return result
}
//Реализуйте функцию square с сигнатурой square(x: number): number вычисляющую квадрат своего аргумента.
function square(x) {
    let result = x ** 2;
    return result
}
//Реализуйте функцию cube с сигнатурой cube(x: number): number вычисляющую куб своего аргумента
function cube(y) {
    let result = y ** 3;
    return result
}

//Вызовите функции square и cube в цикле от 0 до 9, вычисляя, соответственно квадрат и куб от переменной цикла. Передайте квадрат и куб на каждой итерации в функцию average. Результаты сложите в массив и возвратите из функции calculate
function calculate() {
    let result = [];
    for (let i = 0; i <= 9; i++) {
        let x = average(square(i), cube(i));
        result.push(x);
    }
    return result;
};

console.log(calculate(2));
