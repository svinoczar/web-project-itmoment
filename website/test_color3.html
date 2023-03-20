<!DOCTYPE html>
<html>
  <head>
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
    <p>Нажмите на пробел, когда круг поменяет свой цвет (круг поменяет цвет 3 раза)</p>
    <button id="startButton">Запуск теста</button>
    <p id="result"></p>
    
    <div id="circle"></div>
    
    <script>
      startButton = document.getElementById("startButton");
      result = document.getElementById("result");
      circle = document.getElementById("circle");
      
      let colorChanges = 0;
      let startTime, endTime, sumOfReactionTime = 0;
      
      startButton.addEventListener("click", function() {
        startButton.disabled = true;
        
        delay = Math.floor(Math.random() * 3000) + 1000;
        setTimeout(changeColor, delay);
      });
      
      function changeColor() {
        if (colorChanges < 3) {
          colors = ["red", "yellow", "blue", "green", "brown"];
          let randomColor;
          
          randomColor = colors[colorChanges];
          
          circle.style.backgroundColor = randomColor;
          
          startTime = new Date().getTime();
          
          colorChanges++;
        }
      }
      
      document.addEventListener("keydown", function(event) {
        if (event.code === "Space" && startTime) {
          endTime = new Date().getTime();
          
          reactionTime = endTime - startTime;
          sumOfReactionTime += reactionTime;
          
          startTime = null;
          endTime = null;
          
          if (colorChanges === 3) {
            averageReactionTime = sumOfReactionTime / 3;
            
            result.textContent = `Ваше время реакции: ${averageReactionTime.toFixed(2)} ms`;
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
  </body>
</html>