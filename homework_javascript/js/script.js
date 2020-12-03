'use strict';
//Реализуйте функцию reverse(), которая переворачивает строку c помощью цикла while

const reverse = (word) => {
    let newArr = [];
    let i = 0;
    while (i < word.length) {
        i++;
        newArr.unshift(word[i - 1]);
    };
    let result = newArr.join('');
    return result;
}

console.log(reverse('hello, world!'));
console.log(reverse('I use Brackets'))

//Реализуйте функцию reverse(), которая переворачивает строку c помощью цикла for

const reverseFor = (word) => {
    let newArr = [];
    for (let i = 0; i < word.length; i++) {
        newArr.unshift(word[i]);
    }
    return newArr.join('');
}

console.log(reverseFor('hello, world!'));
console.log(reverseFor('Learn JavaScript'));
