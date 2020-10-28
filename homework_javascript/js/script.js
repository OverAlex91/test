let header = document.querySelector('.page');
let button = document.querySelector('.button_click');

console.log(header);
console.log(button);

button.onclick = function () {
    header.classList.toggle('second-page');
};
