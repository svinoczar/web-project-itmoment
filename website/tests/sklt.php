<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>ITMO.TEST</title>
  <style>
   article, aside, details, figcaption, figure, footer,header,
   hgroup, menu, nav, section { display: block; }
  </style>
 </head>
 <body>
    <form id="test1" onsubmit="return CheckForm(this)" method="post">
        
        <span>Профессии и качества (Выберите от 5 до 10 самых важных качеств для профессии).</span><br></br>

        <label for="prof">Профессия:</label>
        <input type="text" name="prof" placeholder="" value=""><br></br>

        <span>1) Адекватная самооценка</span><br></br>
        <input type="radio" name="que1" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que1" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>2) Самостоятельность</span><br></br>
        <input type="radio" name="que2" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que2" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>3) Пунктуальность, педантичность</span><br></br>
        <input type="radio" name="que3" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que3" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>4) Дисциплинированность</span><br></br>
        <input type="radio" name="que4" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que4" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>5) Аккуратность в работе</span><br></br>
        <input type="radio" name="que5" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que5" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>6) Организованность, самодисциплина</span><br></br>
        <input type="radio" name="que6" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que6" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>7) Старательность, исполнительность</span><br></br>
        <input type="radio" name="que7" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que7" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>8) Ответственность</span><br></br>
        <input type="radio" name="que8" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que8" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>9) Трудолюбие</span><br></br>
        <input type="radio" name="que9" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que9" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>10) Инициативность</span><br></br>
        <input type="radio" name="que10" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que10" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>11) Самокритичность</span><br></br>
        <input type="radio" name="que11" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que11" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>12) Оптимизм, доминирование положительных эмоций</span><br></br>
        <input type="radio" name="que12" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que12" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>13) Самообладание, эмоциональная уравновешенность, выдержка</span><br></br>
        <input type="radio" name="que13" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que13" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>14) Самоконтроль, способность к самонаблюдению</span><br></br>
        <input type="radio" name="que14" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que14" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>15) Предусмотрительность</span><br></br>
        <input type="radio" name="que15" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que15" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>16) Фрустрационная толерантность</span><br></br>
        <input type="radio" name="que16" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que16" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>17) Самомобилизующийся тип реакции на препятствия, возникающие на пути к достижению цели</span><br></br>
        <input type="radio" name="que17" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que17" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>18) Интернальность</span><br></br>
        <input type="radio" name="que18" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que18" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>19) Экстернальность</span><br></br>
        <input type="radio" name="que19" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que19" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>20) Интрапунитивность</span><br></br>
        <input type="radio" name="que20" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que20" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>21) Экстрапунитивность</span><br></br>
        <input type="radio" name="que21" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que21" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>22) Способность планировать свою деятельность во времени</span><br></br>
        <input type="radio" name="que22" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que22" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>23) Способность брать на себя ответственность за принимаемые решения и действия</span><br></br>
        <input type="radio" name="que23" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que23" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>24) Способность принимать решение в нестандартных ситуациях</span><br></br>
        <input type="radio" name="que24" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que24" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>25) Способность рационально действовать в экстремальных ситуациях</span><br></br>
        <input type="radio" name="que25" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que25" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>26) Способность эффективно действовать в условиях дефицита времени</span><br></br>
        <input type="radio" name="que26" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que26" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>27) Способность переносить неприятные ощущения без потрясений</span><br></br>
        <input type="radio" name="que27" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que27" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>28) Способность аргументировано отстаивать свое мнение</span><br></br>
        <input type="radio" name="que28" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que28" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>29) Способность к переключениям с одной деятельности на другую</span><br></br>
        <input type="radio" name="que29" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que29" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>30) Способность преодолевать страх</span><br></br>
        <input type="radio" name="que30" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que30" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>31) Решительность</span><br></br>
        <input type="radio" name="que31" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que31" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>32) Сильная воля</span><br></br>
        <input type="radio" name="que32" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que32" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>33) Смелость</span><br></br>
        <input type="radio" name="que33" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que33" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>34) Чувство долга</span><br></br>
        <input type="radio" name="que34" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que34" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>35) Честность</span><br></br>
        <input type="radio" name="que35" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que35" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>36) Порядочность</span><br></br>
        <input type="radio" name="que36" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que36" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>37) Товарищество</span><br></br>
        <input type="radio" name="que37" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que37" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>38) Аналитичность</span><br></br>
        <input type="radio" name="que38" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que38" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>39) Синтетичность</span><br></br>
        <input type="radio" name="que39" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que39" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>40) Транссонантность</span><br></br>
        <input type="radio" name="que40" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que40" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>41) Логичность</span><br></br>
        <input type="radio" name="que41" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que41" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>42) Креативность</span><br></br>
        <input type="radio" name="que42" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que42" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>43) Оперативность</span><br></br>
        <input type="radio" name="que43" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que43" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>44) Объектные свойства мышления</span><br></br>
        <input type="radio" name="que44" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que44" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>45) Предметность</span><br></br>
        <input type="radio" name="que45" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que45" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>46) Образность</span><br></br>
        <input type="radio" name="que46" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que46" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>47) Абстрактность</span><br></br>
        <input type="radio" name="que47" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que47" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>48) Вербальность</span><br></br>
        <input type="radio" name="que48" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que48" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>49) Калькулятивность</span><br></br>
        <input type="radio" name="que49" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que49" id="no" value="no">
        <label for="no">Не нужно</label><br></br>

        <span>50) Умение подмечать незначительные (малозаметные) изменения в исследуемом объекте</span><br></br>
        <input type="radio" name="que50" id="yes" value="yes">
        <label for="yes">Нужно</label>
        <input type="radio" name="que50" id="no" value="no">
        <label for="no">Не нужно</label><br></br>


        <div id="error" style="color:crimson"></div>
        <input type="submit" name="submit" value="Готово">

    </form>

    <script src="professionCheck.js"></script>

</body>
</html>