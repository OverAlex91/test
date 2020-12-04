'use strict';
// Objects

// первый вариант создания объекта
const person1 = {}; // создаю объект
person1.name = 'Marcus'; // создаем ключ name со значением Marcus
person1.city = 'Roma'; // создаем ключ city со значением Roma
person1.born = 121; // создаем ключ born со значением 121

console.dir({
    person1
});

// второй вариант создания объекта

const person2 = new Object(); //создание пустого объекта через new Object
person2.name = 'Marcus';
person2.city = 'Roma';
person2.born = 121;
console.dir({
    person2
});

// третий вариант создания объекта 

const person3 = { // объявление объекта person3 с тремя полями
    name: 'Marcus',
    city: 'Roma',
    born: 121
}

console.dir({
    person3
});
