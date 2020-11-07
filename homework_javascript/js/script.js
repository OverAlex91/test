//Task - 4 задание 1

let year = prompt('В каком году была опубликована спецификация ECMAScript-2015?', '');
let message = (year < 2015) ? 'Это слишком рано!' :
    (year > 2015) ? 'Это поздновато...' :
    'Верно';

alert(message);

//Task - 4 задание 2

let age = prompt('Сколько вам лет?', 18);
if (age < 3) {
    alert('Привет, малыш!');
} else if (age < 18) {
    alert('Привет!');
} else if (age < 100) {
    alert('Здравствуйте!');
} else {
    alert('Какой интересный возраст!');
}

//Task - 4 задание со звездочкой

let exam = prompt('Какова ваша оценка за экзамен?', 90);
let projects = prompt('Cколько вами было сдано проектов?', 0);
let finalGrade = `Вы сдали экзамен на - ${exam} баллов. И сдали ${projects} проекта(ов)`;

if (exam > 90 || projects > 10) {
    alert(`${finalGrade} Ваша оценка - 100!`);
} else if (exam > 75 && projects >= 5) {
    alert(`${finalGrade} Ваша оценка - 90!`);
} else if (exam > 50 && projects >= 2) {
    alert(`${finalGrade} Ваша оценка - 75!`);
} else {
    alert(`${finalGrade} Ваша оценка - 0!`);
}

/* Если честно, то я не совсем понял как добиться того, что бы функция вызывалась так же как в задании, то есть в виде  finalGrade(100, 12);  // 100
                finalGrade(99, 0);    // 100
                finalGrade(10, 15);   // 100
Но в целом инструкция работает, оценки показываются верно, по 4ем условиям.
*/
