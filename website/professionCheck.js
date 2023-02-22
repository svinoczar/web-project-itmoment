function CheckForm(el){
    
    var profession = el.prof.value;
    var ans1 = el.que1.value; // Адекватная самооценка
    var ans2 = el.que2.value; // Самостоятельность
    var ans3 = el.que3.value; // Пунктуальность, педантичность  
    var ans4 = el.que4.value; // Дисциплинированность  
    var ans5 = el.que5.value; // Аккуратность в работе 
    var ans6 = el.que6.value; // Организованность, самодисциплина  
    var ans7 = el.que7.value; // Старательность, исполнительность     
    var ans8 = el.que8.value; // Ответственность 
    var ans9 = el.que9.value; // Трудолюбие   
    var ans10 = el.que10.value; // Инициативность  
    var ans11 = el.que11.value; // Самокритичность   
    var ans12 = el.que12.value; // Оптимизм, доминирование положительных эмоций
    var ans13 = el.que13.value; // Самообладание, эмоциональная уравновешенность, выдержка 
    var ans14 = el.que14.value; // Самоконтроль, способность к самонаблюдению 
    var ans15 = el.que15.value; // Предусмотрительность  
    var ans16 = el.que16.value; // Фрустрационная толерантность  
    var ans17 = el.que17.value; // Самомобилизующийся тип реакции на препятствия, возникающие на пути к достижению цели
    var ans18 = el.que18.value; // Интернальность 
    var ans19 = el.que19.value; // Экстернальность 
    var ans20 = el.que20.value; // Интрапунитивность  
    var ans21 = el.que21.value; // Экстрапунитивность 
    var ans22 = el.que22.value; // Способность планировать свою деятельность во времени   
    var ans23 = el.que23.value; // Способность брать на себя ответственность за принимаемые решения и действия 
    var ans24 = el.que24.value; // Способность принимать решение в нестандартных ситуациях 
    var ans25 = el.que25.value; // Способность рационально действовать в экстремальных ситуациях
    var ans26 = el.que26.value; // Способность эффективно действовать в условиях дефицита времени 
    var ans27 = el.que27.value; // Способность переносить неприятные ощущения без потрясений 
    var ans28 = el.que28.value; // Способность аргументировано отстаивать свое мнение
    var ans29 = el.que29.value; // Способность к переключениям с одной деятельности на другую 
    var ans30 = el.que30.value; // Способность преодолевать страх 
    var ans31 = el.que31.value; // Решительность
    var ans32 = el.que32.value; // Сильная воля  
    var ans33 = el.que33.value; // Смелость
    var ans34 = el.que34.value; // Чувство долга
    var ans35 = el.que35.value; // Честность  
    var ans36 = el.que36.value; // Порядочность
    var ans37 = el.que37.value; // Товарищество
    var ans38 = el.que38.value; // Аналитичность 
    var ans39 = el.que39.value; // Синтетичность  
    var ans40 = el.que40.value; // Транссонантность 
    var ans41 = el.que41.value; // Логичность   
    var ans42 = el.que42.value; // Креативность 
    var ans43 = el.que43.value; // Оперативность 
    var ans44 = el.que44.value; // Объектные свойства мышления 
    var ans45 = el.que45.value; // Предметность 
    var ans46 = el.que46.value; // Образность 
    var ans47 = el.que47.value; // Абстрактность  
    var ans48 = el.que48.value; // Вербальность  
    var ans49 = el.que49.value; // Калькулятивность 
    var ans50 = el.que50.value; // Умение подмечать незначительные (малозаметные) изменения в исследуемом объекте
    var string = "";

    var counter = 0


    
    if (ans1 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans2 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans3 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans4 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans5 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans6 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans7 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans8 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans9 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans10 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans11 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans12 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans13 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans14 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans15 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans16 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans17 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans18 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans19 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans20 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans21 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans22 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans23 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans24 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans25 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans26 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans27 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans28 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans29 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans30 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans31 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans32 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans33 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans34 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans35 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans36 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans37 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans38 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans39 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans40 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans41 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans42 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans43 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans44 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans45 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans46 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans47 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans48 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans49 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}

    if (ans50 == "yes"){
        counter++;
        string += "1";
    } else {string += "0";}


    console.log(counter);
    console.log(ans1);

    var fail = "";
    if (counter < 5 || counter > 10){
        fail = "Выберите от 5 до 10 качеств!";
    }
    if ( profession == ""){
        fail = "Введите название профессии!"
    }
    
    if(fail != ""){
        document.getElementById('error').innerHTML = fail;
        return false;
    }else{
        document.getElementById("pq-string").innerHTML = string;
        console.log(string);
        document.cookie = "pqs=" + string;
        document.cookie = "profession=" + profession;
        alert("Качества к професии " + profession + " успешно записаны!");

        return true;
    }
}