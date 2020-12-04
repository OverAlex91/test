'use strict';
//Properties
//const person5 = {
//    name: 'Marcus',
//    city: 'Roma',
//    born: 121,
//};
////проверяем есть ли поле в объекте
//console.log('name' in person5); //способ 1
//
//if ('name' in person5) {
//    console.log('Person name is: ' + person5.name); // cпособ 2
//};

//цикл for in проходимся по ключам данного объекта
//for (const key in person5) {
//    const value = person5[key];
//    console.dir({
//        key,
//        value
//    });
//}

// Объединение ключей и значений в объекте
//const name = 'Marcus Aurelius';
//const city = ' Rome';
//
//{
//    const person = {
//        name,
//        city
//    }; // объединение ключей и значений name и city это ключ и значение
//    console.dir({
//        person
//    });
//}

//Dynamic field name
{
    const fieldName = 'city';
    const fieldValue = 'Roma';
    const person = {
        name: 'Marcus Aurelius',
        [fieldName]: fieldValue, //то же самое, если бы я написал city: fieldValue - значение
    };
    console.dir({
        person
    })
}

//Expression in field name
{
    const prefix = 'city';
    const person = {
        name: 'Marcus Aurelius',
    [prefix + 'born']: 'Roma',
    };
    console.dir({
        person
    });
}

//function in field name
{
    const fn = s => s + 'born';
    const person = {
        name: 'Marcus Aurelius',
    [fn('city')]: 'Roma',
    }; //вызов функции fn с аргументом city которая становится ключем
    console.dir({
        person
    });
}
