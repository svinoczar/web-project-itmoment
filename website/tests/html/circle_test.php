<!DOCTYPE html>
<html>
<head>
    <title>Тест движ. объект</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/styletest.css">

    <style>
        canvas {
            border: 0px solid black;
        }
    </style>
</head>
<body>
<h1>Тест: "Оценка реакции на движущийся объект"</h1>
<p>Нажмите пробел, когда черный шар зайдет в область (30 раз).</p>
<p>Для запуска теста нажмите кнопку.</p>
<progress id="progress-bar" value="0" max="100"></progress><br></br>
<button id="startButton">Запуск теста</button>
<br></br>
<canvas id="canvas" width="400" height="400"></canvas>
<div id="result"></div>
<script>
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    const progressBar = document.getElementById("progress-bar");
    const startButton = document.getElementById("startButton");

    const circleX = canvas.width / 2;
    const circleY = canvas.height / 2;
    const circleRadius = 150;
    const pointRadius = 10;

    const point = {
        x: circleX + circleRadius,
        y: circleY
    };
    let fixedPointX;
    let fixedPointY;

    let startTime;
    let count = 0;
    let totalDistance = 0;
    let theResult = 0;

    function calculateFixedPoint() {
        const angle = Math.random() * Math.PI * 2;
        fixedPointX = circleX + Math.cos(angle) * circleRadius;
        fixedPointY = circleY + Math.sin(angle) * circleRadius;
    }

    function drawCircle() {
        context.beginPath();
        context.arc(circleX, circleY, circleRadius, 0, Math.PI * 2);
        context.strokeStyle="#6a5acd";
        context.stroke();
    }

    function drawPoint() {
        context.beginPath();
        context.arc(point.x, point.y, pointRadius, 0, Math.PI * 2);
        context.fillStyle="#ff0000";
        context.fill();
    }

    function drawFixedPoint() {
        context.beginPath();
        context.arc(fixedPointX, fixedPointY, pointRadius, 0, Math.PI * 2);
        context.stroke();
    }

    function updatePointPosition() {
        const angle = performance.now() / 1000;
        point.x = circleX + Math.cos(angle) * circleRadius;
        point.y = circleY + Math.sin(angle) * circleRadius;
    }

    function handleSpacebarPress() {
        const distance = Math.sqrt((point.x - fixedPointX) ** 2 + (point.y - fixedPointY) ** 2);
        totalDistance += distance;
        count++;
        progressBar.value = ((count / 30).toFixed(2) * 100).toFixed(0);
         showResult();
    }

    function showResult() {
        const averageDistance = totalDistance;
        totalDistance = 0;
        var accuracy;
        accuracy = 100 - (averageDistance / circleRadius * 100);
        if (accuracy < 0) {
            accuracy = 0;
            document.getElementById('result').innerText = `Результат последней попытки: ${accuracy.toFixed(2)}%`;
            theResult = theResult + accuracy;
        }else{
            document.getElementById('result').innerText = `Результат последней попытки: ${accuracy.toFixed(2)}%`;
            theResult = theResult + accuracy;
        }
        if (count == 30){
            theAnswer = (theResult / 30).toFixed(0)
            document.getElementById('result').innerText = `Ваш итоговый результат: ${theAnswer}%`;
            document.cookie = "result=" + theAnswer;
            document.cookie = "table=result_circle"
            startButton.disabled = false;
        }
    }

    function loop() {
        context.clearRect(0, 0, canvas.width, canvas.height);
        drawCircle();
        drawFixedPoint();
        updatePointPosition();
        drawPoint();
        requestAnimationFrame(loop);
    }

    calculateFixedPoint();
    loop();

    startButton.addEventListener("click", function() {
        startButton.disabled = true;
        count = 0;
        theResult = 0;
    });

    document.addEventListener('keydown', (event) => {
        if (event.code === 'Space' && count < 30 && startButton.disabled === true) {
            handleSpacebarPress();
        }
    });
</script>
<?php
session_start();
if(isset($_SESSION["logged_in"])){
  if($_SESSION["logged_in"]==true){
    echo '<a href="test-res.php">Завершить выполнение теста и сохранить результат</a>';
  }
}
?>
</body>
</html>
