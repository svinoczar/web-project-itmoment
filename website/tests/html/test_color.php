<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../../css/styletest.css">

    <title>Цвет</title>
    <style>
      #circle {
        width: 300px;
        height: 300px;
        background-color: black;
        border-radius: 50%;
        margin: 50px auto;
      }
    </style>
  </head>
  <body>
    <h1>Тест: "Реакция на цвет"</h1>
    <p>Нажмите на кнопку, когда будете готовы начать</p>
    <p>Нажмите на пробел, когда круг поменяет свой цвет</p>
    <p id="progress"></p>
    <progress id="progress-bar" value="0" max="100"></progress><br></br>
    <button id="startButton">Запуск теста</button>
    <p id="result"></p>
    <div id="resultFalse"></div>
    <div id="circle"></div>

    <script>
      const startButton = document.getElementById("startButton");
      const result = document.getElementById("result");
      const circle = document.getElementById("circle");
      const progressBar = document.getElementById("progress-bar");

      let startTime, endTime, reactionTime, totalReactionTime = 0, count = 0;

      startButton.addEventListener("click", function() {
        startButton.disabled = true;
        count = 0;
        totalReactionTime = 0;
        runTest();
      });

      function runTest() {
        if(count < 30) {
          count++;
          delay = Math.floor(Math.random() * 3000) + 1000;
          setTimeout(function() {
            colors = ["red", "yellow", "blue", "green", "brown"];
            randomIndex = Math.floor(Math.random() * colors.length);
            randomColor = colors[randomIndex];
            circle.style.backgroundColor = randomColor;
            startTime = new Date().getTime();
          }, delay);
        }
      }

      document.addEventListener("keydown", function(event) {
        if (event.code === "Space" && startTime) {
            endTime = new Date().getTime();
            reactionTime = endTime - startTime;
            totalReactionTime += reactionTime;
            circle.style.backgroundColor = "black";
            startTime = null;
            endTime = null;
            //progress.textContent = `Ваш прогресс: ${((count / 30).toFixed(2) * 100).toFixed(0)} %`;
            progressBar.value = ((count / 30).toFixed(2) * 100).toFixed(0);


            if(count == 30) {
              let averageReactionTime = totalReactionTime / 30;
              result.textContent = `Среднее время реакции: ${averageReactionTime.toFixed(2)} ms`;
              document.cookie = "result=" + averageReactionTime;
            document.cookie = "test=4"
              startButton.disabled = false;
            } else {
              runTest();
            }
        }
      });
    </script>
        <?php
        session_start();
        if(isset($_SESSION["logged_in"])){
          if($_SESSION["logged_in"]==true){
            echo ' <button onclick="document.location=\'test-res.php\'" class="btnSnE">Завершить выполнение теста и сохранить результат</button> ';
          }
        }
        ?>
  </body>
</html>
