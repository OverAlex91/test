'use sctrict';

//Области видимости

const cities = ['Athens', 'Roma', 'London', 'Beijing', 'Kiev', 'Riga']; //заготовка массива строк
const f = s => s.length; // отображает длину массива(lambda expression)

{
    function f1() { //функция объявлена как function declaration
        const cities = ['Athens', 'Roma']; //массив строк
        const f = s => s.toUpperCase(); //верхний регистр. важно!
        console.dir({
            cities
        });
        //массив с верхним регистром
        console.dir(cities.map(f));
        //метод map - метод массива. в данном случае передается функция f и создается новый массив
    };
}

{
    const f = s => s.toLowerCase();
    console.dir({
        cities
    });
    console.dir(cities.map(f));
}

{
    const cities = ['London', 'Beijing', 'Kiev'];
    console.dir({
        cities
    });
    console.dir(cities.map(f));
}

f1();
console.dir({
    cities
});
console.dir(cities.map(f));
