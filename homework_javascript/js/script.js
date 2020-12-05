'use strict';
//Реализуйте функцию sum(...args), которая суммирует все свои аргументы, пятью разными способами:
//цикл for
const sum = (...num) => {
    const newArr = [...num];
    let result = 0;
    for (let i = 0; i < newArr.length; i++) {
        result = result + newArr[i];
    }
    return result;
};
console.log('Цикл for: sum(1, 2, 3, 4, 5) // ' +
    sum(1, 2, 3, 4, 5));

//цикл for of

const sum1 = (...num) => {
    const newArr = [...num];
    let result = 0;
    for (let arg of newArr) {
        result = result + arg;
    };
    return result;
};

console.log('Цикл for of: sum1(10, -7, 14, 15) // ' + sum1(10, -7, 14, 15));

//цикл while

const sum2 = (...num) => {
    const newArr = [...num];
    let result = 0;
    let i = 0;
    while (i < newArr.length) {
        result = result + newArr[i];
        i++;
    }
    return result;
};
console.log('Цикл while: sum2(12, -6, 3, 4) // ' + sum2(12, -6, 3, 4));

//цикл do...while

const sum3 = (...num) => {
    const newArr = [...num];
    let i = 0;
    let result = 0;
    do {
        result = result + newArr[i];
        i++;
    } while (i < newArr.length);
    return result;
};

console.log('Цикл do while: sum3(10, -15, 3, 4, 5) // ' + sum3(10, -15, 3, 4, 5));

// метод Array.prototype.reduce

const sum4 = (...num) => {
    const newArr = [...num];
    const reducer = (accumulator, currentValue) => accumulator + currentValue;
    let result = newArr.reduce(reducer);
    return result;
}

console.log('Метод Array.prototype.reduce: sum4(9, 6, 4, -13, 20) // ' + sum4(9, 6, 4, -13, 20));

//Итерирование по двумерному массиву. Найдите максимальный элемент в двумерном массиве
const max = (matrix) => {
    let result = matrix[0][0];
    for (let i = 0; i < matrix.length; i++) {
        const row = matrix[i];
        for (let j = 0; j < row.length; j++) {
            const cell = row[j];
            if (result < cell) result = cell;
        }
    }
    return result;
};
const m = max([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
console.log(m);

//При помощи цикла for..in перебрать объект-справочник с датами рождения и смерти людей и вернуть справочник с продолжительностью их жизни. Например:
const persons = {
    lenin: {
        born: 1870,
        died: 1924
    },
    mao: {
        born: 1893,
        died: 1976
    },
    gandhi: {
        born: 1869,
        died: 1948
    },
    hirohito: {
        born: 1901,
        died: 1989
    },
};

const ages = persons => {
    const result = {};
    for (const name in persons) {
        const person = result[name];
        result[name] = persons[name].died - persons[name].born;
    }
    return result;
}

console.log(ages(persons));

//Работа с массивами и использование методов Array
//Реализуйте функцию removeElement(array, item) для удаления элемента item из массива array. 

const array = [1, 2, 3, 4, 5, 6, 7];
const array2 = ['Kiev', 'Beijing', 'Lima', 'Saratov'];

const removeElement = (constName, element) => {
    const res1 = constName.indexOf(element)
    const result = constName.splice(res1, 1);
    return result;
}
removeElement(array, 5);
removeElement(array2, 'Lima');

console.log(array);
console.log(array2);

//Улучшите функцию из предыдущего задания для удаления нескольких элементов из массива removeElements(array, item1, ... itemN). Например:

const array4 = [1, 2, 3, 4, 5, 6, 7];

const removeElements = (constName, ...items) => {
    let newArr = constName.filter(arrItem => {
        return !items.includes(arrItem)
    });
    return newArr;
}

console.log(removeElements(array4, 1, 2, 7));
