const min = 10;
const max = 99;
const questionDiv = document.getElementById("question");
const resultDiv = document.getElementById("result");
const expression = document.getElementById("expression");
const NUM_TRIALS = 30;
let startTime;
let a;
let b;
let trialNum = 0;
let totalReactionTime = 0;
let falseAnswers = 0;

function generateNumbers() {
  a = Math.floor(Math.random() * (max - min)) + min;
  b = Math.floor(Math.random() * (max - min)) + min;
  return [a, b];
}

function startTest() {
  if (trialNum < NUM_TRIALS) {
    resultDiv.innerText = ``;
    [a, b] = generateNumbers();
    expression.innerText = `${a} + ${b}`;
    startTime = performance.now();
    return [a, b];
  } else {
    averageReactionTime = totalReactionTime / (NUM_TRIALS - falseAnswers);
    resultDiv.innerText = `Тест завершен! Среднее время реакции: ${(averageReactionTime).toFixed(2)} ms, процент ошибок: ${(falseAnswers / 30).toFixed(2)} %`;
  }
}

function checkAnswer(answer) {
  if (answer === "even" && (a + b) % 2 === 0 || answer === "odd" && (a + b) % 2 !== 0) {
    const time = performance.now() - startTime;
    totalReactionTime += time;
    trialNum++;
    resultDiv.innerText = `Правильно! Переходим к следующему вопросу.`;
    setTimeout(startTest, 1000);
  } else {
    falseAnswers = falseAnswers + 1;
    trialNum++;
    resultDiv.innerText = "Неверно! Переходим к следующему вопросу.";
    setTimeout(startTest, 1000);
  }
}
