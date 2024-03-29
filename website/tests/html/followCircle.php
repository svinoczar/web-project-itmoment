<!DOCTYPE html>
<html>
<head>
  <title>Аналоговое преследование</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../css/styletest.css">

  <style>
    canvas {
      border: 5px solid purple;
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
<h1>Тест: "Аналоговое преследование"</h1>
<p>Нажимайте на стрелочки(вы играете за красный шарик), пытайтесь удержать его как можно ближе к зеленому.</p>
<p>Для запуска теста нажмите кнопку.</p>
<progress id="progress-bar" value="0" max="30"></progress><br></br>
<button id="startButton">Запуск теста</button>
<br></br>
<?php
session_start();
if(isset($_SESSION["logged_in"])){
  if($_SESSION["logged_in"]==true){
    echo '<br><br><br><br><button onclick="document.location=\'test-res.php\'" class="btnSnE">Завершить выполнение теста и сохранить результат</button>';
  }
}
?>
<canvas id="canvas" width="400" height="140"></canvas>
<div id="result1"></div>
<div id="result2"></div>
<script>
  const canvas = document.getElementById('canvas');
  const context = canvas.getContext('2d');
  const progressBar = document.getElementById("progress-bar");
  const startButton = document.getElementById("startButton");


  const pointRadius1 = 27;
  const pointRadius2 = 23;
  const startX = 20;
  const startY = 100;
  const endX = 380;
  const endY = 100;

  const point = {
    x: 100,
    y: 70
  };

  const pointFollow = {
    x: 300,
    y: 70
  };

  let startTime;
  let count = 0;
  let totalDistance = 0;
  let theResult = 0;
  let theBest = 0;
  let direction = 1;
  let directionFollow = 1
  let elementRandom = 0;
  let pressCounter = 0;
  let avgDistance = 0;
  let flg = 0;
  let allTime = 0;

  function drawPoint1() {
    context.beginPath();
    context.arc(point.x, point.y, pointRadius2, 0, Math.PI * 2);
    context.fillStyle="#ff0000";
    context.fill();
  }

  function drawPoint2() {
    context.beginPath();
    context.arc(pointFollow.x, pointFollow.y, pointRadius1, 0, Math.PI * 2);
    context.fillStyle="#00FF80";
    context.fill();
  }

  function randomModule() {
    elementRandom = elementRandom + 1;
    var min = 350;
    var max = 700;
    var randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
    if (elementRandom > randomNumber){
      directionFollow = directionFollow * -1;
      elementRandom = 0;
      startTime = performance.now();
      flg = 1;
    }
  }

  function updatePointPosition() {
    if (direction === 1){
      point.x = point.x + 2;
      if (point.x > 380){
        direction = -1
      }
    }else{
      point.x = point.x - 2;
      if (point.x < 20){
        direction = 1
      }
    }
  }

  function updatePointPositionFollow() {
    if (directionFollow === 1){
      pointFollow.x = pointFollow.x + 2;
      if (pointFollow.x > 380){
        directionFollow = -1
      }
    }else{
      pointFollow.x = pointFollow.x - 2;
      if (pointFollow.x < 20){
        directionFollow = 1
      }
    }
  }

  function pressRight() {
    direction = 1;
    pressCounter = pressCounter + 1;
    avgDistance = avgDistance + Math.abs(pointFollow.x - pointFollow.x);
    if (flg === 1){
      allTime = allTime + (performance.now() - startTime);
      count = count + 1;
      flg = 0;
    }
    progressBar.value = count;
    if (count === 30){
      document.getElementById('result1').innerText = `Процент отклонения от зеленого шарика: ${((avgDistance / pressCounter) / 360 * 100).toFixed(2)}%`;
      document.cookie = "result=" + ((avgDistance / pressCounter) / 360 * 100).toFixed(2);
      document.cookie = "test=9";
      document.getElementById('result2').innerText = `Ваше среднее время реакции на отклонения: ${(allTime / 30).toFixed(2)} ms.`;
      startButton.disabled = false;
      count = 0;
      allTime = 0;
      avgDistance = 0;
      pressCounter = 0;
    }
  }

  function pressLeft() {
    direction = -1;
    pressCounter = pressCounter + 1;
    avgDistance = avgDistance + Math.abs(point.x - 200);
    if (flg === 1){
      allTime = allTime + (performance.now() - startTime);
      count = count + 1;
      flg = 0;
    }
    progressBar.value = count;
    if (count === 30){
      document.getElementById('result1').innerText = `Процент отклонения от зеленого шарика: ${((avgDistance / pressCounter) / 360 * 100).toFixed(2)}%`;
      document.cookie = "result=" + ((avgDistance / pressCounter) / 360 * 100).toFixed(2);
      document.cookie = "test=9";
      document.getElementById('result2').innerText = `Ваше среднее время реакции на отклонения: ${(allTime / 30).toFixed(2)} ms.`;
      startButton.disabled = false;
      count = 0;
      allTime = 0;
      avgDistance = 0;
      pressCounter = 0;
    }
  }

  function loop() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    randomModule();
    updatePointPosition();
    updatePointPositionFollow();
    drawPoint2();
    drawPoint1();
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
  });
</script>
</body>
</html>