<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../css/styletest.css">
    <meta charset="UTF-8" />
    <title>Цвет3</title>
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
    <h1>Тест: "Реакция на цвет(3 цвета)"</h1>
    <p>Нажмите на кнопку, когда будете готовы начать</p>
    <p>Нажмите на пробел, когда круг поменяет свой цвет (круг поменяет цвет 90 раз)</p>
    <p>Красный цвет - Z, Желтый цвет - X, Синий цвет - С</p>
    <p id="progress"></p>
    <progress id="progress-bar" value="0" max="100"></progress><br></br>
    <button id="startButton">Запуск теста</button>
    <p id="result1"></p>
    <p id="result2"></p>
    <p id="result3"></p>
    <p id="result4"></p>
    <p id="resultFalse"></p>
    <div id="circle"></div>

    <script>
      startButton = document.getElementById("startButton");
      result1 = document.getElementById("result1");
      result2 = document.getElementById("result2");
      result3 = document.getElementById("result3");
      result4 = document.getElementById("result4");
      resultFalse = document.getElementById("resultFalse");
      const progressBar = document.getElementById("progress-bar");
      let circle = document.getElementById("circle");

      let colorChanges = 0;
      let startTime, endTime, sumOfReactionTime = 0;
      let sumOfReactionTimeBlue = 0;
      let sumOfReactionTimeRed = 0;
      let sumOfReactionTimeYellow = 0;
      let sumOfReactionTimeFalse = 0;
      let falseRed = 0;
      let numberRed = 0;
      let falseYellow = 0;
      let numberYellow = 0;
      let falseBlue = 0;
      let numberBlue = 0;

      startButton.addEventListener("click", function() {
        startButton.disabled = true;

        delay = Math.floor(Math.random() * 3000) + 1000;
        setTimeout(changeColor, delay);
      });

      function changeColor() {
        if (colorChanges < 90) {
          colors = ["red", "yellow", "blue"];
          let randomColor;

          randomColor = colors[Math.floor(Math.random() * 3)];

          circle.style.backgroundColor = randomColor;

          startTime = new Date().getTime();

          colorChanges++;
        }
      }

      document.addEventListener("keydown", function(event) {
        if ((event.code === "KeyZ" || event.code === "KeyX" || event.code === "KeyC" ) && startTime) {
          endTime = new Date().getTime();

          reactionTime = endTime - startTime;
          
          if (circle.style.backgroundColor === "red"){
            if (event.code === "KeyZ"){
              sumOfReactionTimeRed += reactionTime;
              numberRed = numberRed + 1;
            }else{
              falseRed = falseRed + 1;
              sumOfReactionTimeFalse += reactionTime;
            }
          }
          if (circle.style.backgroundColor === "yellow"){
            if (event.code === "KeyX"){
              sumOfReactionTimeYellow += reactionTime;
              numberYellow = numberYellow + 1;
            }else{
              falseYellow = falseYellow + 1;
              sumOfReactionTimeFalse += reactionTime;
            }
          }
          if (circle.style.backgroundColor === "blue"){
            if (event.code === "KeyC"){
              sumOfReactionTimeBlue += reactionTime;
              numberBlue = numberBlue + 1;
            }else{
              falseBlue = falseBlue + 1;
              sumOfReactionTimeFalse += reactionTime;
            }
            
          }
          

          console.log(circle.style.backgroundColor); 
          console.log(sumOfReactionTimeRed);
          console.log(sumOfReactionTimeYellow);
          console.log(sumOfReactionTimeBlue);

          circle.style.backgroundColor = "black";
          
          startTime = null;
          endTime = null;

          //progress.textContent = `Ваш прогресс: ${((colorChanges / 90).toFixed(2) * 100).toFixed(0)} %`;
          progressBar.value = ((colorChanges / 90).toFixed(2) * 100).toFixed(0);

          if (colorChanges === 90) {
            averageReactionTime = (sumOfReactionTimeRed + sumOfReactionTimeYellow + sumOfReactionTimeBlue) / (numberRed + numberYellow + numberBlue);

            result1.textContent = `Реакция на красные: ${(sumOfReactionTimeRed / numberRed).toFixed(2)} ms, количество ошибок: ${((falseRed / (numberRed + falseRed)).toFixed(2) * 100).toFixed(0)} %`;
            result2.textContent = `Реакция на желтые: ${(sumOfReactionTimeYellow / numberYellow).toFixed(2)} ms, количество ошибок: ${((falseYellow / (numberYellow + falseYellow)).toFixed(2) * 100).toFixed(0)} %`;
            result3.textContent = `Реакция на синие: ${(sumOfReactionTimeBlue / numberBlue).toFixed(2)} ms, количество ошибок: ${((falseBlue / (numberBlue + falseBlue)).toFixed(2) * 100).toFixed(0)} %`;
            result4.textContent = `Ваше время реакции: ${averageReactionTime.toFixed(2)} ms, количество ошибок: ${(((falseBlue + falseYellow + falseRed) / 90).toFixed(2) * 100).toFixed(0)} %`;
            document.cookie = "result=" + averageReactionTime;
            document.cookie = "table=result_color3"
            resultFalse.textContent = `Ваше время реакции на неверные ответы: ${(sumOfReactionTimeFalse / (falseBlue + falseYellow + falseRed)).toFixed(2)} ms`;
            circle.style.backgroundColor = "black";

            colorChanges = 0;
            sumOfReactionTime = 0;

            startButton.disabled = false;
          } else {
            delay = Math.floor(Math.random() * 3000) + 1000;
            setTimeout(changeColor, delay);
          }
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
