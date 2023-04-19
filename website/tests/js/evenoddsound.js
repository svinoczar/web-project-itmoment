const min = 10;
const max = 99;
const questionDiv = document.getElementById("question");
const resultDiv = document.getElementById("result");
const falseDiv = document.getElementById("resultFalse");
const audioElement = document.getElementById("audio");
const progressBar = document.getElementById("progress-bar");
let startTime;
let a;
let b;
let turnCount = 0;
let totalTime = 0;
let falseTime = 0;
let falseAnswers = 0;
let audio1184 = new Audio("../mp3/1184.mp3");
let audio1255 = new Audio("../mp3/1255.mp3");
let audio1766 = new Audio("../mp3/1766.mp3");
let audio2891 = new Audio("../mp3/2891.mp3");
let audio3476 = new Audio("../mp3/3476.mp3");
let audio4994 = new Audio("../mp3/4994.mp3");
let audio5533 = new Audio("../mp3/5533.mp3");
let audio5610 = new Audio("../mp3/5610.mp3");
let audio6789 = new Audio("../mp3/6789.mp3");
let audio7388 = new Audio("../mp3/7388.mp3");
let sound;


function generateNumbers() {
  if (turnCount % 10 === 0){
    a = 11;
    b = 84;
    sound = audio1184;
  }else if(turnCount % 10 === 1){
    a = 12;
    b = 55;
    sound = audio1255;
  }else if(turnCount % 10 === 2){
    a = 17;
    b = 66;
    sound = audio1766;
  }else if(turnCount % 10 === 3){
    a = 28;
    b = 91;
    sound = audio2891;
  }else if(turnCount % 10 === 4){
    a = 34;
    b = 76;
    sound = audio3476;
  }else if(turnCount % 10 === 5){
    a = 49;
    b = 94;
    sound = audio4994;
  }else if(turnCount % 10 === 6){
    a = 55;
    b = 33;
    sound = audio5533;
  }else if(turnCount % 10 === 7){
    a = 56;
    b = 10;
    sound = audio5610;
  }else if(turnCount % 10 === 8){
    a = 67;
    b = 89;
    sound = audio6789;
  }else if(turnCount % 10 === 9){
    a = 73;
    b = 88;
    sound = audio7388;
  }
  
  return [a, b];
}

function playAudio(src) {
  audioElement.src = src;
  audioElement.play();
}

function startTest() {
  console.log(turnCount);
  [a, b] = generateNumbers();
  sound.play();
  console.log(a, b)
  startTime = performance.now();
  return [a, b];
}

function checkAnswer(answer) {
  //progress.textContent = `Ваш прогресс: ${(((turnCount + 1) / 30).toFixed(2) * 100).toFixed(0)} %`;
  progressBar.value = (((turnCount + 1) / 30).toFixed(2) * 100).toFixed(0);
  if (answer === "even" && (a + b) % 2 === 0 || answer === "odd" && (a + b) % 2 !== 0) {
    time = performance.now() - startTime;
    if ((time - 2500).toFixed(2) < 0){
        resultDiv.innerText = "Дослушайте текст до конца, не пытайтесь обмануть тест!";
    }else{
        resultDiv.innerText = `Правильно! Переходим к следующему выражению.`;
        totalTime += time - 2500;
        turnCount++;
        if (turnCount >= 30) {
          const averageTime = (totalTime / (30 - falseAnswers)).toFixed(2);
          document.cookie = "result=" + averageTime;
          document.cookie = "table=result_even_odd_voice"
          resultDiv.innerText = `\nСреднее время реакции: ${averageTime} ms, процент ошибок: ${(falseAnswers / 30).toFixed(2) * 100} %`; 
          falseDiv.innerText = `Среднее время реакции неверных ответов: ${(falseTime / falseAnswers).toFixed(2)} ms`;
          totalTime = 0;
        } else {
          startTest();
        }
    }
  } else {
    time = performance.now() - startTime;
    if ((time - 2500).toFixed(2) < 0){
        resultDiv.innerText = "Дослушайте текст до конца, не пытайтесь обмануть тест!";
    }else{
        resultDiv.innerText = "Неверно! Переходим к следующему выражению.";
        turnCount++;
        falseAnswers = falseAnswers + 1;
        falseTime += time - 2500;
        if (turnCount >= 30) {
          const averageTime = (totalTime / (30 - falseAnswers)).toFixed(2); /// or это
          resultDiv.innerText = `\nСреднее время реакции: ${averageTime} ms, процент ошибок: ${((falseAnswers / 30).toFixed(2) * 100).toFixed(0)} %`;
          falseDiv.innerText = `Среднее время реакции неверных ответов: ${(falseTime / falseAnswers).toFixed(2)} ms`;
          totalTime = 0;
        } else {
          startTest();
        }
    }
  }
}
