'use strict';
//Реализуйте функцию iterate(object, callback) которая будет итерировать все ключи переданного объекта, вызывая для каждого callback со следующим контрактом callback(key, value, object). 
const obj = {
	a: 1,
	b: 2,
	c: 3
};

function iterate(object, callback) {

	for (let key in object) {
		let value = object[key];
		callback(key, value, object);
	};
};

iterate(obj, (key, value) => {
	console.log({
		key,
		value
	});
});

//Реализуйте функцию store(value) которая сохранит значение в замыкании возвращаемой функции, а после ее вызова вернет значение из замыкания

function store(number) {
	return function read() {
		return `Output: ${number}`;
	};
};

const read = store(14);
const value = read();
console.log(value);

//Реализуйте функцию contract(fn, ...types) которая оборачивает fn (первый аргумент) и проверяет типы аргументов (все аргументы кроме первого и последнего) и результата (последний аргумент), гегенрируя исключение TypeError, если типы не совпадают. 


const contract = (fn, ...types) => (...args) => {
	let sameTypes = true;
	for (let i = 0; i < args.length; i++) {
		const def = types[i];
		const argument = args[i];
		sameTypes = typeof argument === def.name.toLowerCase();
		if (!sameTypes) {
			throw new TypeError(`Argument types do not match`);
		}
	}
	const last = types.length - 1;
	const result = fn(...args);
	sameTypes = typeof result === types[last].name.toLowerCase();
	if (!sameTypes) {
		throw new TypeError(`Argument types do not match`);
	}
	return result;
};

const add = (a, b, c) => a + b + c;
const addNumbers = contract(add, Number, Number, Number);
const res1 = addNumbers(4, 8, 32);
console.dir(res1); // Output: 

const concat = (s1, s2, s3) => s1 + s2 + s3;
const concatStrings = contract(concat, String, String, String);
const res2 = concatStrings('Hello ', 'world! ', 'I am Batman');
console.dir(res2); // Output: Hello world!
