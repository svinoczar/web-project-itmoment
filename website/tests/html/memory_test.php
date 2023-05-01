<!DOCTYPE html>
<html>
<head>
    <title>Память</title>
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
<h1>Тест: "Оценка памяти"</h1>
<p>Постарайтесь запомнить цвет предметов, которые вам озвучит сайт. После этого пройдите небольшое тестирование.</p>
<p>Для запуска теста нажмите кнопку.</p>
<button id="startButton">Запуск теста</button>
<div id="questionContainer" style="display: none;">
    <h2>Выберите цвет и объект:</h2>
    <form id="questionForm">
        <p>
            <label for="blackInput">Черный:</label>
            <select id="blackInput" name="black">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="blueInput">Синий:</label>
            <select id="blueInput" name="blue">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="brownInput">Коричневый:</label>
            <select id="brownInput" name="brown">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="greenInput">Зеленый:</label>
            <select id="greenInput" name="green">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="purpleInput">Фиолетовый:</label>
            <select id="purpleInput" name="purple">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="redInput">Красный:</label>
            <select id="redInput" name="red">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="whiteInput">Белый:</label>
            <select id="whiteInput" name="white">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <label for="yellowInput">Желтый:</label>
            <select id="yellowInput" name="yellow">
                <option value=""></option>
                <option value="building">Здание</option>
                <option value="tree">Дерево</option>
                <option value="dog">Собака</option>
                <option value="sun">Солнце</option>
                <option value="monkey">Обезьяна</option>
                <option value="sky">Небо</option>
                <option value="kangaroo">Кенгуру</option>
                <option value="photo">Фотография</option>
            </select>
        </p>
        <p>
            <button type="submit">Проверить ответы</button>
        </p>
        <!-- FIX -->
        <p>
            <button onclick="document.location=\'test-res.php\'" class="btnSnE">Завершить выполнение теста и сохранить результат</button>
        </p>
    </form>

</div>

<div id="result"></div>
<script>

    let blackDog = new Audio('../mp3/black_dog.mp3');
    let blueSun = new Audio('../mp3/blue_sun.mp3');
    let brownPhoto = new Audio('../mp3/brown_photo.mp3');
    let greenKang = new Audio('../mp3/green_keng.mp3');
    let purpleSky = new Audio('../mp3/purple_sky.mp3');
    let redMonkey = new Audio('../mp3/red_monkey.mp3');
    let whiteTree = new Audio('../mp3/white_tree.mp3');
    let yellowBuilding = new Audio('../mp3/yellow_building.mp3');

    let startTime;
        let endTime;

        const blockBlack = document.getElementById('blackInput');
        const blackLabel = document.querySelector("label[for='blackInput']");
        const blockBlue = document.getElementById('blueInput');
        const blueLabel = document.querySelector("label[for='blueInput']");
        const blockBrown = document.getElementById('brownInput');
        const brownLabel = document.querySelector("label[for='brownInput']");
        const blockGreen = document.getElementById('greenInput');
        const greenLabel = document.querySelector("label[for='greenInput']");
        const blockPurple = document.getElementById('purpleInput');
        const purpleLabel = document.querySelector("label[for='purpleInput']");
        const blockRed = document.getElementById('redInput');
        const redLabel = document.querySelector("label[for='redInput']");
        const blockWhite = document.getElementById('whiteInput');
        const whiteLabel = document.querySelector("label[for='whiteInput']");
        const blockYellow = document.getElementById('yellowInput');
        const yellowLabel = document.querySelector("label[for='yellowInput']");

        blockBlack.style.display = "none";
        blackLabel.style.display = "none";
        blockBlack.style.display = "block";
        blackLabel.style.display = "block";
        blockBlue.style.display = "none";
        blueLabel.style.display = "none";
        blockBrown.style.display = "none";
        brownLabel.style.display = "none";
        blockGreen.style.display = "none";
        greenLabel.style.display = "none";
        blockPurple.style.display = "none";
        purpleLabel.style.display = "none";
        blockRed.style.display = "none";
        redLabel.style.display = "none";
        blockWhite.style.display = "none";
        whiteLabel.style.display = "none";
        blockYellow.style.display = "none";
        yellowLabel.style.display = "none";

    let mp3Files = [
        blackDog,
        blueSun,
        brownPhoto,
        greenKang,
        purpleSky,
        redMonkey,
        whiteTree,
        yellowBuilding
    ];

    const usedAnswers = [];

    function playMp3(file) {
        const audio = file;
        audio.play();
    }

    function disableButton(button) {
        button.disabled = true;
    }

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    function onSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const selects = form.getElementsByTagName('select');
        var countRightAnswers = 0;
        endTime = new Date().getTime();
        const timeDiff = endTime - startTime;
        const answers = [];
        for (let i = 0; i < selects.length; i++) {
            const select = selects[i];
            const answer = select.value;
            if (answer === '') {
                alert('Пожалуйста, выберите ответ для всех полей!');
                return;
            }
            if (answers.includes(answer)) {
                alert('Пожалуйста, выберите уникальные ответы!');
                return;
            }
            if (timeDiff > 100000){
                alert('Скорее всего вы нечестно решали тест, ваш результат аннулирован');
                return;
            }
            answers.push(answer);
        }
        if (answers[0] === "dog"){
            countRightAnswers++;
        }
        if (answers[1] === "sun"){
            countRightAnswers++;
        }
        if (answers[2] === "photo"){
            countRightAnswers++;
        }
        if (answers[3] === "kangaroo"){
            countRightAnswers++;
        }
        if (answers[4] === "sky"){
            countRightAnswers++;
        }
        if (answers[5] === "monkey"){
            countRightAnswers++;
        }
        if (answers[6] === "tree"){
            countRightAnswers++;
        }
        if (answers[7] === "building"){
            countRightAnswers++;
        }
        console.log(countRightAnswers);
        //alert(`Ваш процент правильных ответов: ${((countRightAnswers / 8) * 100).toFixed(2)}%`);
        document.getElementById('result').innerText =`Ваш процент правильных ответов: ${((countRightAnswers / 8) * 100).toFixed(2)}%`;
        //startButton.disabled = false
        document.cookie = "result=" + ((countRightAnswers / 8) * 100).toFixed(2);
                document.cookie = "test=11"

        const submitButton = form.getElementsByTagName('button')[0];
        disableButton(submitButton);
    }

    async function onStartClick() {
        mp3Files = mp3Files.sort(() => Math.random() - 0.5);
        for (let i = 0; i < mp3Files.length; i++) {
            playMp3(mp3Files[i]);
            await sleep(2300);
        }

        startTime = new Date().getTime();

        const startButton = document.getElementById('startButton');
        disableButton(startButton);

        const questionContainer = document.getElementById('questionContainer');
        questionContainer.style.display = 'block';
    }

    function loop() {
            if (blockBlack.value != ""){
                blockBlue.style.display = "block";
                blueLabel.style.display = "block";
            }
            if (blockBlue.value != ""){
                blockBrown.style.display = "block";
                brownLabel.style.display = "block";
            }
            if (blockBrown.value != ""){
                blockGreen.style.display = "block";
                greenLabel.style.display = "block";
            }
            if (blockGreen.value != ""){
                blockPurple.style.display = "block";
                purpleLabel.style.display = "block";
            }
            if (blockPurple.value != ""){
                blockRed.style.display = "block";
                redLabel.style.display = "block";
            }
            if (blockRed.value != ""){
                blockWhite.style.display = "block";
                whiteLabel.style.display = "block";
            }
            if (blockWhite.value != ""){
                blockYellow.style.display = "block";
                yellowLabel.style.display = "block";
            }

            requestAnimationFrame(loop);
        }

    loop();

    const startButton = document.getElementById('startButton');
    startButton.addEventListener('click', onStartClick);

    const questionForm = document.getElementById('questionForm');
    questionForm.addEventListener('submit', onSubmit);

</script>
</body>
</html>