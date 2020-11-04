let header = document.querySelector('.page');
let button = document.querySelector('.button_click');

console.log(header);
console.log(button);

//обработчик событий onclick
button.onclick = function () {
    console.log('Кнопка нажата!');
    header.classList.toggle('second-page');
};

//блок кода и переменная для работы с методом textContent
let message = document.querySelector('.text__content');
console.log(message.textContent);

//блок кода и переменная для работы со свойством onsubmit
let some_form = document.querySelector('.autorisation_form');
let onsubmit_message = document.querySelector('.autorisation_form_legend');
let input_login = document.getElementById('login');
let input_password = document.getElementById('password');

some_form.onsubmit = function (event) {
    event.preventDefault();

    console.log('Форма отправлена!');

    //замена текста на 'Форма отправлена!'
    onsubmit_message.textContent = 'Форма отправлена!';

    //вывод в консоль значений из input
    console.log(input_login.value);
    console.log(input_password.value);
}

//Получение данных из поля Task 3

let paragraph = document.querySelector('.input_text__content');
let input_text = document.getElementById('type_text');
let text_form = document.querySelector('.text_form');

text_form.onsubmit = function (evt) {
    evt.preventDefault();

    paragraph.textContent = input_text.value;
}


//Задачка по приоритетам Task 3

let x = 55 * (7 + 2) / (4 + 2);
alert(`Решение задачки по приоритетам - ${x}`);


//Счетчик
let heart = document.querySelector('.heart');
let likesNumber = document.querySelector('.likes-number');
let counter = 0;
heart.onclick = function () {
    likesNumber.textContent = counter;
    counter++;
    heart.classList.toggle('added');
}
