const min = 10;
const max = 99;
const questionDiv = document.getElementById("question");
const resultDiv = document.getElementById("result");
const expression = document.getElementById("expression");
let startTime;
let a;
let b;

function generateNumbers() {
  a = Math.floor(Math.random() * (max - min)) + min;
  b = Math.floor(Math.random() * (max - min)) + min;
  return [a, b];
}

function startTest() {
  const [a, b] = generateNumbers();
  expression.innerText = `${a} + ${b}`;
  startTime = performance.now();
  return [a, b];
}

function checkAnswer(answer) {
  if (answer === "even" && (a + b) % 2 === 0 || answer === "odd" && (a + b) % 2 !== 0) {
    time = performance.now() - startTime;
    resultDiv.innerText = `Правильно! Ваше время реакции: ${(time).toFixed(2)} ms.`;
  } else {
    resultDiv.innerText = "Неверно!";
  }
}
