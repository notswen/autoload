"use strict"


// ------------------------------------------------------------------------------------------------

let numbers = [];

for (let i = 0; i <= 19; i++) {
    numbers[i] = Math.round(Math.random() * 20);
}

for (let num of numbers) {
    console.log(num)
}


const fltnum = numbers.filter(n => n >= 5 && n <= 12);

console.log(fltnum)

let filtred = [];
for (let chislo of numbers) {
    if (chislo <= 12 && chislo >= 5) {
        filtred.push(chislo)
    }
}

console.log(filtred)



const sortup = numbers.slice().sort((a,b) => a-b);
console.log('По возрастанию: ' + sortup);

const sortdown = numbers.slice().sort((a,b) => b-a);
console.log('По убыванию: ' + sortdown);


const doublenumbers=[]
for (let single of numbers){
    single*=2;
    doublenumbers.push(single)
}
console.log(doublenumbers)


let twice = numbers.map(figure => figure*2);
console.log(twice)


let count=0
for ( let kartoshka of numbers){
    count+=kartoshka;
}
console.log('Сумма всех чисел равна: ' + count)


const summary = numbers.reduce((res,current)=> res+current,0);
console.log('Сумма всех чисел равна (v2.0): ' + summary)