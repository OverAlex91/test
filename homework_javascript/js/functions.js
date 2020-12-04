'use strict';

//способы определения функций

// первый вариант (function declaration (никуда ничего не присваивается если нет return возвращает undefined))

function inc(a) {
    return a + 1;
}

//второй вариант ( function expression(значение функционального типа присваивается в константу sum))

const sum = function (a, b) {
    return a + b;
};

//третий вариант (lambda expression (функция стрелка) есть два аргумента и выражение справа, которое должно нам что-то вернуть)
const max = (a, b) => (a > b ? a : b);

//четвертый вариант (lambda function(вместо выражение стоит блок операторов. return может быть несколько))
const avg = (a, b) => {
    const s = sum(a, b);
    return s / 2;
}

console.log('inc(5) = ' + inc(5));
console.log('sum(1, 3) = ' + sum(1, 3));
console.log('max(8, 6) = ' + max(8, 6));
console.log('avg(8, 6) = ' + avg(8, 6));
