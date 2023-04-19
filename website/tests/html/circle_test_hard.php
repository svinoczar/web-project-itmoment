<!DOCTYPE html>
<html>
<head>
    <title>Тест движ. объект про</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/styletest.css">

    <style>
        canvas {
            border: 0px solid black;
        }
    </style>
</head>
<body>
<h1>Тест: "Оценка реакции на движущиеся объекты (осложненная версия)"</h1>
<span>
    Нажмите Z, когда красный кружок зайдет в область (30 раз).<br>
    Нажмите X, когда зеленый кружок зайдет в область (30 раз).<br>
    Нажмите C, когда синий кружок зайдет в область (30 раз).<br>
    Для запуска теста нажмите кнопку.
</span><br>
<br>
<nobr>Прогресс для красного кружочка: </nobr><progress id="progress-bar1" value="0" max="100">Прогресс для красного шарика</progress><br></br>
<nobr>Прогресс для зеленого кружочка: </nobr><progress id="progress-bar2" value="0" max="100"></progress><br></br>
<nobr>Прогресс для синего кружочка: </nobr><progress id="progress-bar3" value="0" max="100"></progress><br></br>
<button id="startButton">Запуск теста</button>
<br></br>
<canvas id="canvas" width="1200" height="400"></canvas>
<div id="result"></div>
<script>
    const canvas = document.getElementById('canvas');
    const context1 = canvas.getContext('2d');
    const context2 = canvas.getContext('2d');
    const context3 = canvas.getContext('2d');
    const progressBar1 = document.getElementById("progress-bar1");
    const progressBar2 = document.getElementById("progress-bar2");
    const progressBar3 = document.getElementById("progress-bar3");
    const startButton = document.getElementById("startButton");

    const circleX1 = 200;
    const circleY1 = 200;
    const circleX2 = 600;
    const circleY2 = 200;
    const circleX3 = 1000;
    const circleY3 = 200;
    const circleRadius = 150;
    const pointRadius = 10;

    const point1 = {
        x: circleX1 + circleRadius,
        y: circleY1
    };
    const point2 = {
        x: circleX2 + circleRadius,
        y: circleY2
    };
    const point3 = {
        x: circleX3 + circleRadius,
        y: circleY3
    };
    let fixedPointX1;
    let fixedPointY1;
    let fixedPointX2;
    let fixedPointY2;
    let fixedPointX3;
    let fixedPointY3;

    let startTime;
    let count1 = 0;
    let totalDistance1 = 0;
    let theResult1 = 0;
    let count2 = 0;
    let totalDistance2 = 0;
    let theResult2 = 0;
    let count3 = 0;
    let totalDistance3 = 0;
    let theResult3 = 0;

    function calculateFixedPoint() {
        const angle1 = Math.random() * Math.PI * 2;
        const angle2 = Math.random() * Math.PI * 2;
        const angle3 = Math.random() * Math.PI * 2;
        fixedPointX1 = circleX1 + Math.cos(angle1) * circleRadius;
        fixedPointY1 = circleY1 + Math.sin(angle1) * circleRadius;
        fixedPointX2 = circleX2 + Math.cos(angle2) * circleRadius;
        fixedPointY2 = circleY2 + Math.sin(angle2) * circleRadius;
        fixedPointX3 = circleX3 + Math.cos(angle3) * circleRadius;
        fixedPointY3 = circleY3 + Math.sin(angle3) * circleRadius;
    }

    function drawCircle() {
        context1.beginPath();
        context1.arc(circleX1, circleY1, circleRadius, 0, Math.PI * 2);
        context1.strokeStyle="#6a5acd";
        context1.stroke();
        context2.beginPath();
        context2.arc(circleX2, circleY2, circleRadius, 0, Math.PI * 2);
        context2.strokeStyle="#6a5acd";
        context2.stroke();
        context3.beginPath();
        context3.arc(circleX3, circleY3, circleRadius, 0, Math.PI * 2);
        context3.strokeStyle="#6a5acd";
        context3.stroke();
    }

    function drawPoint() {
        context1.beginPath();
        context1.arc(point1.x, point1.y, pointRadius, 0, Math.PI * 2);
        context1.fillStyle = 'red';
        context1.fill();
        context2.beginPath();
        context2.arc(point2.x, point2.y, pointRadius, 0, Math.PI * 2);
        context2.fillStyle = 'green';
        context2.fill();
        context3.beginPath();
        context3.arc(point3.x, point3.y, pointRadius, 0, Math.PI * 2);
        context3.fillStyle = 'blue';
        context3.fill();
    }

    function drawFixedPoint() {
        context1.beginPath();
        context1.arc(fixedPointX1, fixedPointY1, pointRadius, 0, Math.PI * 2);
        context1.stroke();
        context2.beginPath();
        context2.arc(fixedPointX2, fixedPointY2, pointRadius, 0, Math.PI * 2);
        context2.stroke();
        context3.beginPath();
        context3.arc(fixedPointX3, fixedPointY3, pointRadius, 0, Math.PI * 2);
        context3.stroke();
    }

    function updatePointPosition() {
        const angle1 = performance.now() / 1000;
        const angle2 = performance.now() / 1000;
        const angle3 = performance.now() / 1000;
        point1.x = circleX1 + Math.cos(angle1) * circleRadius;
        point1.y = circleY1 + Math.sin(angle1) * circleRadius;
        point2.x = circleX2 + Math.cos(angle2) * circleRadius;
        point2.y = circleY2 + Math.sin(angle2) * circleRadius;
        point3.x = circleX3 + Math.cos(angle3) * circleRadius;
        point3.y = circleY3 + Math.sin(angle3) * circleRadius;
    }

    function firstCircle() {
        const distance = Math.sqrt((point1.x - fixedPointX1) ** 2 + (point1.y - fixedPointY1) ** 2);
        totalDistance1 += distance;
        count1++;
        progressBar1.value = ((count1 / 30).toFixed(2) * 100).toFixed(0);
        showResult1();
    }

    function secondCircle() {
        const distance = Math.sqrt((point2.x - fixedPointX2) ** 2 + (point2.y - fixedPointY2) ** 2);
        totalDistance2 += distance;
        count2++;
        progressBar2.value = ((count2 / 30).toFixed(2) * 100).toFixed(0);
        showResult2();
    }

    function thirdCircle() {
        const distance = Math.sqrt((point3.x - fixedPointX3) ** 2 + (point3.y - fixedPointY3) ** 2);
        totalDistance3 += distance;
        count3++;
        progressBar3.value = ((count3 / 30).toFixed(2) * 100).toFixed(0);
        showResult3();
    }

    function showResult1() {
        const averageDistance1 = totalDistance1;
        totalDistance1 = 0;
        var accuracy;
        accuracy = 100 - (averageDistance1 / circleRadius * 100);
        if (accuracy < 0) {
            accuracy = 0;
        }
        theResult1 = theResult1 + accuracy;
        if (count1 == 30 && count2 == 30 && count3 == 30){
            theAnswer = ((theResult1 + theResult2 + theResult3) / 90).toFixed(0)
            document.getElementById('result').innerText = `Ваш итоговый процент реакции: ${theAnswer}%`;
            document.cookie = "result=" + theAnswer;
            document.cookie = "table=" ////НАЗВАНИЕ ТАБЛИЦЫ 
            startButton.disabled = false;
        }
    }

    function showResult2() {
        const averageDistance2 = totalDistance2;
        totalDistance2 = 0;
        var accuracy;
        accuracy = 100 - (averageDistance2 / circleRadius * 100);
        if (accuracy < 0) {
            accuracy = 0;
        }
        theResult2 = theResult2 + accuracy;
        if (count1 == 30 && count2 == 30 && count3 == 30){
            theAnswer = ((theResult1 + theResult2 + theResult3) / 90).toFixed(0)
            document.getElementById('result').innerText = `Ваш итоговый процент реакции: ${theAnswer}%`;
            document.cookie = "result=" + theAnswer;
            document.cookie = "table=" ////НАЗВАНИЕ ТАБЛИЦЫ //!!!!!!!!!!
            startButton.disabled = false;
        }
    }

    function showResult3() {
        const averageDistance1 = totalDistance3;
        totalDistance3 = 0;
        var accuracy;
        accuracy = 100 - (averageDistance1 / circleRadius * 100);
        if (accuracy < 0) {
            accuracy = 0;
        }
        theResult3 = theResult3 + accuracy;
        if (count1 == 30 && count2 == 30 && count3 == 30){
            theAnswer = ((theResult1 + theResult2 + theResult3) / 90).toFixed(0)
            document.getElementById('result').innerText = `Ваш итоговый процент реакции: ${theAnswer}%`;
            document.cookie = "result=" + theAnswer;
            document.cookie = "table=" ////НАЗВАНИЕ ТАБЛИЦЫ  //!!!!!!!!!
            startButton.disabled = false;
        }
    }

    function loop() {
        context1.clearRect(0, 0, 400, canvas.height);
        context2.clearRect(400, 0, 800, canvas.height);
        context3.clearRect(800, 0, 1200, canvas.height);
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
        if (event.code === 'KeyZ' && count1 < 30 && startButton.disabled === true) {
            firstCircle();
        }
        if (event.code === 'KeyX' && count2 < 30 && startButton.disabled === true) {
            secondCircle();
        }
        if (event.code === 'KeyC' && count3 < 30 && startButton.disabled === true) {
            thirdCircle();
        }
    });
</script>
<?php
    session_start();
    if(isset($_SESSION["logged_in"])){
      if($_SESSION["logged_in"]==true){
        echo '<button href="test-res.php">Завершить выполнение теста и сохранить результат</button>';
      }
    }
    ?>
</body>
</html>
