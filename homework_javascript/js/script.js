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

some_form.onsubmit = function (event) {
    event.preventDefault();
    console.log('Форма отправлена!');
    onsubmit_message.textContent = 'Форма отправлена!';
}
