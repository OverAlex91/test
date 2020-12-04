'use strict';

//Arrays
const letters = []; //вариант создания массива

letters.push('B'); // добавление элемента в конец массива
console.dir({
    letters
});

letters.unshift('A'); // добавление элемента в начало массива
console.dir({
    letters
});

letters.push('C'); // добавление элемента в конец
console.dir({
    letters
});

//второй вариант создания массивов

const numbers = [1, 2, 3];
numbers.push(4);
console.dir({
    numbers
});

// третий вариант создания массивов
const languages = ['C++', 'JavaScript', 'Python', 'Haskell', 'Swift'];

console.dir({
    lenght: languages.length,
    'languages[0]': languages[0],
    'languages[languages.length - 1]': languages[languages.length - 1]
});
