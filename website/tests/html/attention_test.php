<!DOCTYPE html>
<html>
<head>
  <title>Внимание</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../css/styletest.css">

  <style>
    canvas {
      border: 0px solid black;
    }
  </style>
</head>
<body>
    <div class="header">
      <div class="header logo">
        <a href="../../index.php">
          <img src="./../../img/ITMOMENT_logo.png" alt="Кнопка «input»">
        </a>  
      </div>
    </div>
<h1>Тест: "Внимание"</h1>
<p>Нажимайте на стрелочки, пытайтесь удержать шарики(красный - вверх, зеленый - вправо, синий - вниз, фиолетовый - влево).</p>
<progress id="progress-bar" value="0" max="30"></progress>
<button id="startButton">Запуск теста</button>
<br></br>
<?php
    session_start();
    if(isset($_SESSION["logged_in"])){
      if($_SESSION["logged_in"]==true){
        echo '<button onclick="document.location=\'test-res.php\'" class="btnSnE">Завершить выполнение теста и сохранить результат</button>';
      }
    }
    ?>
<canvas id="canvas" width="500" height="500"></canvas>
<div id="result1"></div>
<div id="result2"></div>
<script>
  const canvas = document.getElementById('canvas');
  const context = canvas.getContext('2d');
  const progressBar = document.getElementById("progress-bar");
  const startButton = document.getElementById("startButton");


  const circleRadius = 150;
  const pointRadius = 15;

  const point1 = {
    x: 250,
    y: 20
  };

  const point2 = {
    x: 480,
    y: 250
  };

  const point3 = {
    x: 250,
    y: 480
  };

  const point4 = {
    x: 20,
    y: 250
  };

  let startTime;
  let count = 0;
  let totalDistance = 0;
  let theResult = 0;
  let theBest = 0;
  let direction = 0;
  let elementRandom = 0;
  let pressCounter = 0;
  let avgDistance = 0;
  let flg = 0;
  let allTime = 0;


  function drawLine1() {
    context.beginPath();
    context.moveTo(250, 20);
    context.lineTo(250, 480);
    context.strokeStyle="#6a5acd";
    context.stroke();
  }

  function drawLine2() {
    context.beginPath();
    context.moveTo(480, 250);
    context.lineTo(20, 250);
    context.strokeStyle="#6a5acd";
    context.stroke();
  }

  function drawPoint1() {
    context.beginPath();
    context.arc(point1.x, point1.y, pointRadius, 0, Math.PI * 2);
    context.fillStyle="#ff0000";
    context.fill();
  }
  function drawPoint2() {
    context.beginPath();
    context.arc(point2.x, point2.y, pointRadius, 0, Math.PI * 2);
    context.fillStyle="#36FF00";
    context.fill();
  }
  function drawPoint3() {
    context.beginPath();
    context.arc(point3.x, point3.y, pointRadius, 0, Math.PI * 2);
    context.fillStyle="#0032FF";
    context.fill();
  }
  function drawPoint4() {
    context.beginPath();
    context.arc(point4.x, point4.y, pointRadius, 0, Math.PI * 2);
    context.fillStyle="#FB00FF";
    context.fill();
  }

  function randomModule() {
    if (startButton.disabled === true){
      elementRandom = elementRandom + 1;
    }
    if (elementRandom > 233){
      var min = 1;
      var max = 4;
      var randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
      direction = randomNumber
      elementRandom = 0;
      startTime = performance.now();
      flg = 1;
    }
  }

  function updatePointPosition() {
    if (direction === 1){
      point1.y = point1.y + 0.25;
      if (point1.y > 580){
        point1.y = point1.y - 0.25;
      }
    }
    if (direction === 2){
      point2.x = point2.x - 0.25;
      if (point2.x < 20){
        point2.x = point2.x + 0.25;
      }
    }
    if (direction === 3){
      point3.y = point3.y - 0.25;
      if (point3.y < 20){
        point3.y = point3.y + 0.25;
      }
    }
    if (direction === 4){
      point4.x = point4.x + 0.25;
      if (point4.x > 580){
        point4.x = point4.x - 0.25;
      }
    }
  }

  function pressUp() {
    if (direction === 1){
      count = count + 1;
      direction = 0;
    }
    progressBar.value = count;
    if (count === 30){
      document.getElementById('result1').innerText = `Ваш процент внимательности: ${(100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2)}%`;
      document.cookie = "result=" + (100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2);
      document.cookie = "test=10"
      console.log(point1.y);
      console.log(point2.x);
      console.log(point3.y);
      console.log(point4.x);
      startButton.disabled = false;
      count = 0;
    }
  }

  function pressRight() {
    if (direction === 2){
      count = count + 1;
      direction = 0;
    }
    progressBar.value = count;
    if (count === 30){
      document.getElementById('result1').innerText = `Ваш процент внимательности: ${(100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2)}%`;
      document.cookie = "result=" + (100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2);
      document.cookie = "test=10"
      console.log(point1.y);
      console.log(point2.x);
      console.log(point3.y);
      console.log(point4.x);
      startButton.disabled = false;
      count = 0;
    }
  }

  function pressDown() {
    if (direction === 3){
      count = count + 1;
      direction = 0;
    }
    progressBar.value = count;
    if (count === 30){
      document.getElementById('result1').innerText = `Ваш процент внимательности: ${(100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2)}%`;
      document.cookie = "result=" + (100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2);
      document.cookie = "test=10"
      console.log(point1.y);
      console.log(point2.x);
      console.log(point3.y);
      console.log(point4.x);
      startButton.disabled = false;
      count = 0;
    }
  }

  function pressLeft() {
    if (direction === 4){
      count = count + 1;
      direction = 0;
    }
    progressBar.value = count;
    if (count === 30){
      document.getElementById('result1').innerText = `Ваш процент внимательности: ${(100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2)}%`;
      document.cookie = "result=" + (100 -((((point1.y - 20) + Math.abs(point2.x - 480) + Math.abs(point3.y - 480) + (point4.x - 20) ) / 1840) * 100)).toFixed(2);
      document.cookie = "test=10"
      console.log(point1.y);
      console.log(point2.x);
      console.log(point3.y);
      console.log(point4.x);
      startButton.disabled = false;
      count = 0;
    }
  }

  function loop() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    drawLine1();
    drawLine2();
    randomModule();
    updatePointPosition();
    drawPoint1();
    drawPoint2();
    drawPoint3();
    drawPoint4();
    requestAnimationFrame(loop);
  }

  loop();

  startButton.addEventListener("click", function() {
    startButton.disabled = true;
    count = 0;
    theResult = 0;
  });

  document.addEventListener('keydown', (event) => {
    if (event.code === 'ArrowLeft' && count < 30 && startButton.disabled === true) {
      pressLeft();
    }
    if (event.code === 'ArrowRight' && count < 30 && startButton.disabled === true) {
      pressRight();
    }
    if (event.code === 'ArrowUp' && count < 30 && startButton.disabled === true) {
      pressUp();
    }
    if (event.code === 'ArrowDown' && count < 30 && startButton.disabled === true) {
      pressDown();
    }
  });
</script>
</body>
</html>