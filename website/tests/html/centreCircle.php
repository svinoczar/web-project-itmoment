<!DOCTYPE html>
<html>
<head>
    <title>Аналоговое слежение</title>
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
<h1>Тест: "Аналоговое слежение"</h1>
<p>Нажимайте на стрелочки, пытайтесь удержать шар в центре.</p>
<p>Для запуска теста нажмите кнопку.</p>
<progress id="progress-bar" value="0" max="30"></progress><br></br>
<button id="startButton">Запуск теста</button>
<?php
session_start();
if(isset($_SESSION["logged_in"])){
  if($_SESSION["logged_in"]==true){
    echo '<button onclick="document.location=\'test-res.php\'" class="btnSnE">Завершить выполнение теста и сохранить результат</button>';
  }
}
?>
<br></br>
<canvas id="canvas" width="400" height="200"></canvas>
<div id="result1"></div>
<div id="result2"></div>
<script>
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    const progressBar = document.getElementById("progress-bar");
    const startButton = document.getElementById("startButton");


    const pointRadius = 15;
    const startX = 20;
    const startY = 100;
    const endX = 380;
    const endY = 100;

    const point = {
        x: 200,
        y: 100
    };

    let startTime;
    let count = 0;
    let totalDistance = 0;
    let theResult = 0;
    let direction = 1;
    let elementRandom = 0;
    let pressCounter = 0;
    let avgDistance = 0;
    let flg = 0;
    let allTime = 0;


    function drawLine1() {
        context.beginPath();
        context.moveTo(startX, startY);
        context.lineTo(endX, endY);
        context.strokeStyle="#6a5acd";
        context.stroke();
    }

    function drawLine2() {
        context.beginPath();
        context.moveTo(200, 0);
        context.lineTo(200, 200);
        context.strokeStyle="#6a5acd";
        context.stroke();
    }

    function drawPoint() {
        context.beginPath();
        context.arc(point.x, point.y, pointRadius, 0, Math.PI * 2);
        context.fillStyle="#ff0000";
        context.fill();
    }

    function randomModule() {
        elementRandom = elementRandom + 1;
        if (elementRandom > 233){
            direction = direction * -1;
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

    function pressRight() {
        direction = 1;
        pressCounter = pressCounter + 1;
        avgDistance = avgDistance + Math.abs(point.x - 200);
        if (flg === 1){
            allTime = allTime + (performance.now() - startTime);
            count = count + 1;
            flg = 0;
        }
        progressBar.value = count;
        if (count === 30){
            document.getElementById('result1').innerText = `Процент отклонения от средней линии: ${((avgDistance / pressCounter) / 180 * 100).toFixed(2)}%`;
            document.cookie = "result=" + ((avgDistance / pressCounter) / 180 * 100).toFixed(2);
            document.cookie = "test=8";
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
            document.getElementById('result1').innerText = `Процент отклонения от средней линии: ${((avgDistance / pressCounter) / 180 * 100).toFixed(2)}%`;
            document.cookie = "result=" + ((avgDistance / pressCounter) / 180 * 100).toFixed(2);
            document.cookie = "test=8";
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
        drawLine1();
        drawLine2();
        randomModule();
        updatePointPosition();
        drawPoint();
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