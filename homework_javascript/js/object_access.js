'use strict';

const person = {
    name: 'Marcus',
    city: 'Roma',
    born: 121
}

console.log('Person name is: ' + person.name); //считываем поля
console.log('Person name is: ' + person['name']); //аналогичный способ доступа к информации

delete person.name; //способ удаления ключа
console.dir({
    person
});

delete person['city']; // альтернативный способ удаление ключа
console.dir({
    person
});

//объявление элемента через геттер и сеттер

const person4 = {
    name: 'Marcus Aureluis',
    get city() { //поле city объявлено по-другомую Здесь у объекта появляется поле city
        return 'Roma';
    },
    set city(value) {
        console.log('Marcus remains in Roma');
    }
};
person4.city = 'Kiev';
console.dir({
    person4
});
