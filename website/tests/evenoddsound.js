const min = 10;
const max = 99;
const questionDiv = document.getElementById("question");
const resultDiv = document.getElementById("result");
const audioElement = document.getElementById("audio");
let startTime;
let a;
let b;

function generateNumbers() {
  a = Math.floor(Math.random() * (max - min)) + min;
  b = Math.floor(Math.random() * (max - min)) + min;
  return [a, b];
}

function playAudio(src) {
  audioElement.src = src;
  audioElement.play();
}

function startTest() {
  const [a, b] = generateNumbers();
  playAudio(`https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&q=${a}+плюс+${b}&tl=ru`);
  startTime = performance.now();
  return [a, b];
}

function checkAnswer(answer) {
  if (answer === "even" && (a + b) % 2 === 0 || answer === "odd" && (a + b) % 2 !== 0) {
    time = performance.now() - startTime;
    if ((time - 2500).toFixed(2) < 0){
        resultDiv.innerText = "Дослушайте текст до конца, не пытайтесь обмануть тест!";
    }else{
        resultDiv.innerText = `Правильно! Ваше время реакции: ${(time - 2600).toFixed(2)} ms.`;
    }
  } else {
    time = performance.now() - startTime;
    if ((time - 2500).toFixed(2) < 0){
        resultDiv.innerText = "Дослушайте текст до конца, не пытайтесь обмануть тест!";
    }else{
        resultDiv.innerText = "Неверно!";
    }
  }
}
