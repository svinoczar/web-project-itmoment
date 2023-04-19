const min = 10;
const max = 99;
const questionDiv = document.getElementById("question");
const resultDiv = document.getElementById("result");
const falseDiv = document.getElementById("resultFalse");
const expression = document.getElementById("expression");
const progressBar = document.getElementById("progress-bar");
const NUM_TRIALS = 30;
let startTime;
let falseTime = 0;
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
    resultDiv.innerText = `Тест завершен! Среднее время реакции: ${(averageReactionTime).toFixed(2)} ms, процент ошибок: ${((falseAnswers / 30).toFixed(2) * 100).toFixed(0)} %`;
    document.cookie = "result=" + averageReactionTime;
    document.cookie = "table=" ////НАЗВАНИЕ ТАБЛИЦЫ
    falseDiv.innerText = `\nСреднее время реакции неверных ответов: ${(falseTime / falseAnswers).toFixed(2)} ms`;
  }
}

function checkAnswer(answer) {
  if (answer === "even" && (a + b) % 2 === 0 || answer === "odd" && (a + b) % 2 !== 0) {
    //progress.textContent = `Ваш прогресс: ${(((trialNum + 1) / 30).toFixed(2) * 100).toFixed(0)} %`;
    progressBar.value = (((trialNum + 1) / 30).toFixed(2) * 100).toFixed(0);
    const time = performance.now() - startTime;
    totalReactionTime += time;
    trialNum++;
    resultDiv.innerText = `Правильно! Переходим к следующему вопросу.`;
    setTimeout(startTest, 1000);
  } else {
    //progress.textContent = `Ваш прогресс: ${(((trialNum + 1) / 30).toFixed(2) * 100).toFixed(0)} %`;
    progressBar.value = (((trialNum + 1) / 30).toFixed(2) * 100).toFixed(0);
    const time = performance.now() - startTime;
    falseAnswers = falseAnswers + 1;
    trialNum++;
    falseTime += time;
    resultDiv.innerText = "Неверно! Переходим к следующему вопросу.";
    setTimeout(startTest, 1000);
  }
}
