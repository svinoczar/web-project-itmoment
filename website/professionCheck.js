function CheckForm(el){
    
    var profession = el.prof.value;

    var ans1 = el.que1.value; // Готовность к защите Родины с оружием в руках
    var ans2 = el.que2.value; // Военно-профессиональная направленность
    var ans3 = el.que3.value; // Прямые внутренние мотивы военно-профессиональной деятельности
    var ans4 = el.que4.value; // Стремление к профессиональному совершенству
    var ans5 = el.que5.value; // Адекватная самооценка
    var ans6 = el.que6.value; // Самостоятельность
    var ans7 = el.que7.value; // Пунктуальность, педантичность
    var ans8 = el.que8.value; // Дисциплинированность
    var ans9 = el.que9.value; // Аккуратность в работе
    var ans10 = el.que10.value; // Организованность, самодисциплина
    var ans11 = el.que11.value; // Старательность, исполнительность
    var ans12 = el.que12.value; // Ответственность
    var ans13 = el.que13.value; // Трудолюбие
    var ans14 = el.que14.value; // Инициативность
    var ans15 = el.que15.value; // Самокритичность
    var ans16 = el.que16.value; // Оптимизм, доминирование положительных эмоций
    var ans17 = el.que17.value; // Самообладание, эмоциональная уравновешенность, выдержка
    var ans18 = el.que18.value; // Самоконтроль, способность к самонаблюдению
    var ans19 = el.que19.value; // Предусмотрительность
    var ans20 = el.que20.value; // Фрустрационная толерантность
    var ans21 = el.que21.value; // Самомобилизующийся тип реакции на препятствия, возникающие на пути к достижению цели
    var ans22 = el.que22.value; // Интернальность
    var ans23 = el.que23.value; // Экстернальность
    var ans24 = el.que24.value; // Интрапунитивность
    var ans25 = el.que25.value; // Экстрапунитивность
    var ans26 = el.que26.value; // Способность планировать свою деятельность во времени
    var ans27 = el.que27.value; // Способность организовывать свою деятельность в условиях большого потока информации и разнообразия поставленных задач
    var ans28 = el.que28.value; // Способность брать на себя ответственность за принимаемые решения и действия
    var ans29 = el.que29.value; // Способность принимать решение в нестандартных ситуациях
    var ans30 = el.que30.value; // Способность рационально действовать в экстремальных ситуациях
    var ans31 = el.que31.value; // Способность эффективно действовать (также быстро принимать решения) в условиях дефицита времени
    var ans32 = el.que32.value; // Способность переносить неприятные ощущения без потрясений
    var ans33 = el.que33.value; // Способность аргументировано отстаивать свое мнение
    var ans34 = el.que34.value; // Способность к переключениям с одной деятельности на другую
    var ans35 = el.que35.value; // Способность преодолевать страх
    var ans36 = el.que36.value; // Зрительная оценка размеров предметов
    var ans37 = el.que37.value; // Зрительное восприятие расстояний между предметами
    var ans38 = el.que38.value; // Глазомер: линейный, угловой, объемный
    var ans39 = el.que39.value; // Глазомер динамический
    var ans40 = el.que40.value; // Способность к различению фигуры на малоконтрастном фоне
    var ans41 = el.que41.value; // Способность различать и опознавать замаскированные объекты 
    var ans42 = el.que42.value; // Способность к восприятию пространственного соотношения предметов
    var ans43 = el.que43.value; // Точность и оценка направления на источник звука
    var ans44 = el.que44.value; // Способность узнавать и различать ритмы
    var ans45 = el.que45.value; // Речевой слух
    var ans46 = el.que46.value; // Различение отрезков времени
    var ans47 = el.que47.value; // Способность к распознаванию небольших отклонений параметров технологических процессов от заданных значений по визуальным признакам  
    var ans48 = el.que48.value; // Способность к распознаванию небольших отклонений параметров технологических процессов от заданных значений по акустическим признакам
    var ans49 = el.que49.value; // Способность к распознаванию небольших отклонений параметров технологических процессов от заданных значений по кинестетическим признакам
    var ans50 = el.que50.value; // Способность к зрительным представлениям
    var ans51 = el.que51.value; // Способность к пространственному воображению
    var ans52 = el.que52.value; // Способность к образному представлению предметов, процессов и явлений
    var ans53 = el.que53.value; // Способность наглядно представлять себе новое явление, ранее, не встречающееся в опыте, или старое, но в новых условиях 
    var ans54 = el.que54.value; // Способность к переводу образа в словесное описание
    var ans55 = el.que55.value; // Способность к воссозданию образа по словесному описанию
    var ans56 = el.que56.value; // Аналитичность
    var ans57 = el.que57.value; // Синтетичность   
    var ans58 = el.que58.value; // Транссонантность 
    var ans59 = el.que59.value; // Логичность  
    var ans60 = el.que60.value; // Креативность
    var ans61 = el.que61.value; // Оперативность
    var ans62 = el.que62.value; // Предметность
    var ans63 = el.que63.value; // Образность
    var ans64 = el.que64.value; // Абстрактность
    var ans65 = el.que65.value; // Вербальность
    var ans66 = el.que66.value; // Калькулятивность
    var ans67 = el.que67.value; // Энергичность, витальность
    var ans68 = el.que68.value; // Умственная работоспособность
    var ans69 = el.que69.value; // Физическая работоспособность
    var ans70 = el.que70.value; // Нервно-эмоциональная устойчивость, выносливость по отношению к эмоциональным нагрузкам
    var ans71 = el.que71.value; // Острота зрения
    var ans72 = el.que72.value; // Адаптация зрения к темноте, свету 
    var ans73 = el.que73.value; // Контрастная чувствительность монохроматического зрения
    var ans74 = el.que74.value; // Цветовая дифференциальная чувствительность
    var ans75 = el.que75.value; // Устойчивость зрительной чувствительности во времени
    var ans76 = el.que76.value; // Острота слуха
    var ans77 = el.que77.value; // Контрастная чувствительность слуха
    var ans78 = el.que78.value; // Слуховая дифференциальная чувствительность
    var ans79 = el.que79.value; // Переносимость длительно действующего звукового раздражителя
    var ans80 = el.que80.value; // Чувствительность (осязание) пальцев
    var ans81 = el.que81.value; // Вибрационная чувствительность
    var ans82 = el.que82.value; // Мышечно-суставная чувствительность усилий или сопротивления
    var ans83 = el.que83.value; // Ощущение равновесия
    var ans84 = el.que84.value; // Ощущение ускорения
    var ans85 = el.que85.value; // Обонятельная чувствительность
    var ans86 = el.que86.value; // Способность узнавать и различать вкусовые ощущения
    var ans87 = el.que87.value; // Объем внимания
    var ans88 = el.que88.value; // Концентрированность внимания
    var ans89 = el.que89.value; // Устойчивость внимания во времени  
    var ans90 = el.que90.value; // Переключаемость внимания
    var ans91 = el.que91.value; // Способность к распределению внимания между несколькими объектами или видами деятельности  
    var ans92 = el.que92.value; // Помехоустойчивость внимания
    var ans93 = el.que93.value; // Способность подмечать изменения в окружающей обстановке, не сосредотачивая сознательно на них внимание 
    var ans94 = el.que94.value; // Умение подмечать незначительные изменения в исследуемом объекте, в показаниях приборов
    var ans95 = el.que95.value; // Способность реагировать на неожиданный зрительный сигнал посредством определённых движений
    var ans96 = el.que96.value; // Способность реагировать на неожиданный слуховой сигнал посредством определённых движений
    var ans97 = el.que97.value; // Согласованность движений с процессами восприятия (сложноорганизованная деятельность)  
    var ans98 = el.que98.value; // Способность к сенсомоторному слежению за движущимся объектом 
    var ans99 = el.que99.value; // Способность к выполнению мелких точных движений
    var ans100 = el.que100.value; // Способность к выполнению сложных двигательных действий (актов)
    var ans101 = el.que101.value; // Способность к выполнению плавных соразмерных движений 
    var ans102 = el.que102.value; // Координация движений ведущей руки
    var ans103 = el.que103.value; // Координация движений обеих рук
    var ans104 = el.que104.value; // Координация движений рук и ног
    var ans105 = el.que105.value; // Координация работы кистей рук и пальцев
    var ans106 = el.que106.value; // Твердость руки, устойчивость кистей рук (низкий тремор)
    var ans107 = el.que107.value; // Умение быстро записывать   
    var ans108 = el.que108.value; // Красивый почерк
    var ans109 = el.que109.value; // Физическая сила  
    var ans110 = el.que110.value; // Способность к быстрой выработке сенсомоторных навыков 
    var ans111 = el.que111.value; // Способность к быстрой перестройке сенсомоторных навыков
    var ans112 = el.que112.value; // Пластичность и выразительность движений
    var ans113 = el.que113.value; // Отсутствие дефектов речи, хорошая дикция
    var ans114 = el.que114.value; // Способность речевого аппарата к интенсивной и длительной работе
    var ans115 = el.que115.value; // Способность к изменению тембра
    var ans116 = el.que116.value; // Способность к изменению силы звучания
    var ans117 = el.que117.value; // Переносимость динамических физических нагрузок
    var ans118 = el.que118.value; // Переносимость статических физических нагрузок
    var ans119 = el.que119.value; // Быстрый переход из состояния покоя к интенсивной работе 
    var ans120 = el.que120.value; // Сохранение работоспособности при недостатке сна 
    var ans121 = el.que121.value; // Сохранение работоспособности при развивающемся утомлении
    var ans122 = el.que122.value; // Сохранение бдительности в условиях однообразной деятельности (монотонии) 
    var ans123 = el.que123.value; // Сохранение бдительности в режиме ожидания
    var ans124 = el.que124.value; // Сохранение работоспособности в некомфортных температурных условиях
    var ans125 = el.que125.value; // Сохранение работоспособности в условиях знакопеременных перегрузок
    var ans126 = el.que126.value; // Сохранение работоспособности в условиях воздействия вибрации
    var ans127 = el.que127.value; // Сохранение работоспособности в условиях воздействия разнонаправленных перегрузок
    var ans128 = el.que128.value; // Сохранение работоспособности в условиях гипо(гипер) барометрических колебаний
    var ans129 = el.que129.value; // Сохранение работоспособности в условиях пониженного парциального давления кислорода
    var ans130 = el.que130.value; // Сохранение работоспособности в условиях пониженного парциального давления углекислого газа
    var ans131 = el.que131.value; // Сохранение работоспособности в условиях ограничения возможностей удовлетворения базовых жизненных потребностей
    var ans132 = el.que132.value; // Сохранение работоспособности в разных природно-климатических условиях
    var ans133 = el.que133.value; // Способность переадаптироваться к новым средовым условиям
    var ans134 = el.que134.value; // Антропометрические характеристики (в соответствии с требованиями профессии)
    var ans135 = el.que135.value; // Особенности телосложения (в соответствии с требованиями профессии)
    var ans136 = el.que136.value; // Хорошее общее физическое развитие – выносливость, координированность, сила, быстрота
    var ans137 = el.que137.value; // Физическая подготовленность к воздействию неблагоприятных факторов профессиональной деятельности
    var ans138 = el.que138.value; // Зрительная долговременная память на лица
    var ans139 = el.que139.value; // Зрительная долговременная память на образы предметного мира  
    var ans140 = el.que140.value; // Зрительная долговременная память на условные обозначения (знаки, символы, планы, схемы, графики)
    var ans141 = el.que141.value; // Зрительная долговременная память на цифры, даты  
    var ans142 = el.que142.value; // Зрительная долговременная память на слова и фразы
    var ans143 = el.que143.value; // Зрительная долговременная память на семантику текста 
    var ans144 = el.que144.value; // Зрительная оперативная память на лица
    var ans145 = el.que145.value; // Зрительная оперативная память на образы предметного мира
    var ans146 = el.que146.value; // Зрительная оперативная память на условные обозначения (знаки, символы, планы, схемы, графики)
    var ans147 = el.que147.value; // Зрительная оперативная память на цифры,  даты  
    var ans148 = el.que148.value; // Зрительная оперативная память на слова и фразы 
    var ans149 = el.que149.value; // Зрительная оперативная память на семантику текста
    var ans150 = el.que150.value; // Слуховая долговременная память на голоса
    var ans151 = el.que151.value; // Слуховая долговременная память на цифры
    var ans152 = el.que152.value; // Слуховая долговременная память на условные сигналы
    var ans153 = el.que153.value; // Слуховая долговременная память на мелодии  
    var ans154 = el.que154.value; // Слуховая долговременная память на семантику сообщений
    var ans155 = el.que155.value; // Слуховая оперативная память на цифры  
    var ans156 = el.que156.value; // Слуховая оперативная память на семантику сообщений
    var ans157 = el.que157.value; // Кинестетическая (моторная) память на простые движения 
    var ans158 = el.que158.value; // Кинестетическая (моторная) память на сложные движения
    var ans159 = el.que159.value; // Кинестетическая (моторная) память на положение и перемещение тела в пространстве
    var ans160 = el.que160.value; // Тактильная память
    var ans161 = el.que161.value; // Обонятельная память
    var ans162 = el.que162.value; // Вкусовая память

    var rate1 = el.inputField1.value; // Готовность к защите Родины с оружием в руках
    var rate2 = el.inputField2.value; // Военно-профессиональная направленность
    var rate3 = el.inputField3.value; // Прямые внутренние мотивы военно-профессиональной деятельности
    var rate4 = el.inputField4.value; // Стремление к профессиональному совершенству
    var rate5 = el.inputField5.value; // Адекватная самооценка
    var rate6 = el.inputField6.value; // Самостоятельность
    var rate7 = el.inputField7.value; // Пунктуальность, педантичность
    var rate8 = el.inputField8.value; // Дисциплинированность
    var rate9 = el.inputField9.value; // Аккуратность в работе
    var rate10 = el.inputField10.value; // Организованность, самодисциплина
    var rate11 = el.inputField11.value; // Старательность, исполнительность
    var rate12 = el.inputField12.value; // Ответственность
    var rate13 = el.inputField13.value; // Трудолюбие
    var rate14 = el.inputField14.value; // Инициативность
    var rate15 = el.inputField15.value; // Самокритичность
    var rate16 = el.inputField16.value; // Оптимизм, доминирование положительных эмоций
    var rate17 = el.inputField17.value; // Самообладание, эмоциональная уравновешенность, выдержка
    var rate18 = el.inputField18.value; // Самоконтроль, способность к самонаблюдению
    var rate19 = el.inputField19.value; // Предусмотрительность
    var rate20 = el.inputField20.value; // Фрустрационная толерантность
    var rate21 = el.inputField21.value; // Самомобилизующийся тип реакции на препятствия, возникающие на пути к достижению цели
    var rate22 = el.inputField22.value; // Интернальность
    var rate23 = el.inputField23.value; // Экстернальность
    var rate24 = el.inputField24.value; // Интрапунитивность
    var rate25 = el.inputField25.value; // Экстрапунитивность
    var rate26 = el.inputField26.value; // Способность планировать свою деятельность во времени
    var rate27 = el.inputField27.value; // Способность организовывать свою деятельность в условиях большого потока информации и разнообразия поставленных задач
    var rate28 = el.inputField28.value; // Способность брать на себя ответственность за принимаемые решения и действия
    var rate29 = el.inputField29.value; // Способность принимать решение в нестандартных ситуациях
    var rate30 = el.inputField30.value; // Способность рационально действовать в экстремальных ситуациях
    var rate31 = el.inputField31.value; // Способность эффективно действовать (также быстро принимать решения) в условиях дефицита времени
    var rate32 = el.inputField32.value; // Способность переносить неприятные ощущения без потрясений
    var rate33 = el.inputField33.value; // Способность аргументировано отстаивать свое мнение
    var rate34 = el.inputField34.value; // Способность к переключениям с одной деятельности на другую
    var rate35 = el.inputField35.value; // Способность преодолевать страх
    var rate36 = el.inputField36.value; // Зрительная оценка размеров предметов
    var rate37 = el.inputField37.value; // Зрительное восприятие расстояний между предметами
    var rate38 = el.inputField38.value; // Глазомер: линейный, угловой, объемный
    var rate39 = el.inputField39.value; // Глазомер динамический
    var rate40 = el.inputField40.value; // Способность к различению фигуры на малоконтрастном фоне
    var rate41 = el.inputField41.value; // Способность различать и опознавать замаскированные объекты 
    var rate42 = el.inputField42.value; // Способность к восприятию пространственного соотношения предметов
    var rate43 = el.inputField43.value; // Точность и оценка направления на источник звука
    var rate44 = el.inputField44.value; // Способность узнавать и различать ритмы
    var rate45 = el.inputField45.value; // Речевой слух
    var rate46 = el.inputField46.value; // Различение отрезков времени
    var rate47 = el.inputField47.value; // Способность к распознаванию небольших отклонений параметров технологических процессов от заданных значений по визуальным признакам  
    var rate48 = el.inputField48.value; // Способность к распознаванию небольших отклонений параметров технологических процессов от заданных значений по акустическим признакам
    var rate49 = el.inputField49.value; // Способность к распознаванию небольших отклонений параметров технологических процессов от заданных значений по кинестетическим признакам
    var rate50 = el.inputField50.value; // Способность к зрительным представлениям
    var rate51 = el.inputField51.value; // Способность к пространственному воображению
    var rate52 = el.inputField52.value; // Способность к образному представлению предметов, процессов и явлений
    var rate53 = el.inputField53.value; // Способность наглядно представлять себе новое явление, ранее, не встречающееся в опыте, или старое, но в новых условиях 
    var rate54 = el.inputField54.value; // Способность к переводу образа в словесное описание
    var rate55 = el.inputField55.value; // Способность к воссозданию образа по словесному описанию
    var rate56 = el.inputField56.value; // Аналитичность
    var rate57 = el.inputField57.value; // Синтетичность   
    var rate58 = el.inputField58.value; // Транссонантность 
    var rate59 = el.inputField59.value; // Логичность  
    var rate60 = el.inputField60.value; // Креативность
    var rate61 = el.inputField61.value; // Оперативность
    var rate62 = el.inputField62.value; // Предметность
    var rate63 = el.inputField63.value; // Образность
    var rate64 = el.inputField64.value; // Абстрактность
    var rate65 = el.inputField65.value; // Вербальность
    var rate66 = el.inputField66.value; // Калькулятивность
    var rate67 = el.inputField67.value; // Энергичность, витальность
    var rate68 = el.inputField68.value; // Умственная работоспособность
    var rate69 = el.inputField69.value; // Физическая работоспособность
    var rate70 = el.inputField70.value; // Нервно-эмоциональная устойчивость, выносливость по отношению к эмоциональным нагрузкам
    var rate71 = el.inputField71.value; // Острота зрения
    var rate72 = el.inputField72.value; // Адаптация зрения к темноте, свету 
    var rate73 = el.inputField73.value; // Контрастная чувствительность монохроматического зрения
    var rate74 = el.inputField74.value; // Цветовая дифференциальная чувствительность
    var rate75 = el.inputField75.value; // Устойчивость зрительной чувствительности во времени
    var rate76 = el.inputField76.value; // Острота слуха
    var rate77 = el.inputField77.value; // Контрастная чувствительность слуха
    var rate78 = el.inputField78.value; // Слуховая дифференциальная чувствительность
    var rate79 = el.inputField79.value; // Переносимость длительно действующего звукового раздражителя
    var rate80 = el.inputField80.value; // Чувствительность (осязание) пальцев
    var rate81 = el.inputField81.value; // Вибрационная чувствительность
    var rate82 = el.inputField82.value; // Мышечно-суставная чувствительность усилий или сопротивления
    var rate83 = el.inputField83.value; // Ощущение равновесия
    var rate84 = el.inputField84.value; // Ощущение ускорения
    var rate85 = el.inputField85.value; // Обонятельная чувствительность
    var rate86 = el.inputField86.value; // Способность узнавать и различать вкусовые ощущения
    var rate87 = el.inputField87.value; // Объем внимания
    var rate88 = el.inputField88.value; // Концентрированность внимания
    var rate89 = el.inputField89.value; // Устойчивость внимания во времени  
    var rate90 = el.inputField90.value; // Переключаемость внимания
    var rate91 = el.inputField91.value; // Способность к распределению внимания между несколькими объектами или видами деятельности  
    var rate92 = el.inputField92.value; // Помехоустойчивость внимания
    var rate93 = el.inputField93.value; // Способность подмечать изменения в окружающей обстановке, не сосредотачивая сознательно на них внимание 
    var rate94 = el.inputField94.value; // Умение подмечать незначительные изменения в исследуемом объекте, в показаниях приборов
    var rate95 = el.inputField95.value; // Способность реагировать на неожиданный зрительный сигнал посредством определённых движений
    var rate96 = el.inputField96.value; // Способность реагировать на неожиданный слуховой сигнал посредством определённых движений
    var rate97 = el.inputField97.value; // Согласованность движений с процессами восприятия (сложноорганизованная деятельность)  
    var rate98 = el.inputField98.value; // Способность к сенсомоторному слежению за движущимся объектом 
    var rate99 = el.inputField99.value; // Способность к выполнению мелких точных движений
    var rate100 = el.inputField100.value; // Способность к выполнению сложных двигательных действий (актов)
    var rate101 = el.inputField101.value; // Способность к выполнению плавных соразмерных движений 
    var rate102 = el.inputField102.value; // Координация движений ведущей руки
    var rate103 = el.inputField103.value; // Координация движений обеих рук
    var rate104 = el.inputField104.value; // Координация движений рук и ног
    var rate105 = el.inputField105.value; // Координация работы кистей рук и пальцев
    var rate106 = el.inputField106.value; // Твердость руки, устойчивость кистей рук (низкий тремор)
    var rate107 = el.inputField107.value; // Умение быстро записывать   
    var rate108 = el.inputField108.value; // Красивый почерк
    var rate109 = el.inputField109.value; // Физическая сила  
    var rate110 = el.inputField110.value; // Способность к быстрой выработке сенсомоторных навыков 
    var rate111 = el.inputField111.value; // Способность к быстрой перестройке сенсомоторных навыков
    var rate112 = el.inputField112.value; // Пластичность и выразительность движений
    var rate113 = el.inputField113.value; // Отсутствие дефектов речи, хорошая дикция
    var rate114 = el.inputField114.value; // Способность речевого аппарата к интенсивной и длительной работе
    var rate115 = el.inputField115.value; // Способность к изменению тембра
    var rate116 = el.inputField116.value; // Способность к изменению силы звучания
    var rate117 = el.inputField117.value; // Переносимость динамических физических нагрузок
    var rate118 = el.inputField118.value; // Переносимость статических физических нагрузок
    var rate119 = el.inputField119.value; // Быстрый переход из состояния покоя к интенсивной работе 
    var rate120 = el.inputField120.value; // Сохранение работоспособности при недостатке сна 
    var rate121 = el.inputField121.value; // Сохранение работоспособности при развивающемся утомлении
    var rate122 = el.inputField122.value; // Сохранение бдительности в условиях однообразной деятельности (монотонии) 
    var rate123 = el.inputField123.value; // Сохранение бдительности в режиме ожидания
    var rate124 = el.inputField124.value; // Сохранение работоспособности в некомфортных температурных условиях
    var rate125 = el.inputField125.value; // Сохранение работоспособности в условиях знакопеременных перегрузок
    var rate126 = el.inputField126.value; // Сохранение работоспособности в условиях воздействия вибрации
    var rate127 = el.inputField127.value; // Сохранение работоспособности в условиях воздействия разнонаправленных перегрузок
    var rate128 = el.inputField128.value; // Сохранение работоспособности в условиях гипо(гипер) барометрических колебаний
    var rate129 = el.inputField129.value; // Сохранение работоспособности в условиях пониженного парциального давления кислорода
    var rate130 = el.inputField130.value; // Сохранение работоспособности в условиях пониженного парциального давления углекислого газа
    var rate131 = el.inputField131.value; // Сохранение работоспособности в условиях ограничения возможностей удовлетворения базовых жизненных потребностей
    var rate132 = el.inputField132.value; // Сохранение работоспособности в разных природно-климатических условиях
    var rate133 = el.inputField133.value; // Способность переадаптироваться к новым средовым условиям
    var rate134 = el.inputField134.value; // Антропометрические характеристики (в соответствии с требованиями профессии)
    var rate135 = el.inputField135.value; // Особенности телосложения (в соответствии с требованиями профессии)
    var rate136 = el.inputField136.value; // Хорошее общее физическое развитие – выносливость, координированность, сила, быстрота
    var rate137 = el.inputField137.value; // Физическая подготовленность к воздействию неблагоприятных факторов профессиональной деятельности
    var rate138 = el.inputField138.value; // Зрительная долговременная память на лица
    var rate139 = el.inputField139.value; // Зрительная долговременная память на образы предметного мира  
    var rate140 = el.inputField140.value; // Зрительная долговременная память на условные обозначения (знаки, символы, планы, схемы, графики)
    var rate141 = el.inputField141.value; // Зрительная долговременная память на цифры, даты  
    var rate142 = el.inputField142.value; // Зрительная долговременная память на слова и фразы
    var rate143 = el.inputField143.value; // Зрительная долговременная память на семантику текста 
    var rate144 = el.inputField144.value; // Зрительная оперативная память на лица
    var rate145 = el.inputField145.value; // Зрительная оперативная память на образы предметного мира
    var rate146 = el.inputField146.value; // Зрительная оперативная память на условные обозначения (знаки, символы, планы, схемы, графики)
    var rate147 = el.inputField147.value; // Зрительная оперативная память на цифры,  даты  
    var rate148 = el.inputField148.value; // Зрительная оперативная память на слова и фразы 
    var rate149 = el.inputField149.value; // Зрительная оперативная память на семантику текста
    var rate150 = el.inputField150.value; // Слуховая долговременная память на голоса
    var rate151 = el.inputField151.value; // Слуховая долговременная память на цифры
    var rate152 = el.inputField152.value; // Слуховая долговременная память на условные сигналы
    var rate153 = el.inputField153.value; // Слуховая долговременная память на мелодии  
    var rate154 = el.inputField154.value; // Слуховая долговременная память на семантику сообщений
    var rate155 = el.inputField155.value; // Слуховая оперативная память на цифры  
    var rate156 = el.inputField156.value; // Слуховая оперативная память на семантику сообщений
    var rate157 = el.inputField157.value; // Кинестетическая (моторная) память на простые движения 
    var rate158 = el.inputField158.value; // Кинестетическая (моторная) память на сложные движения
    var rate159 = el.inputField159.value; // Кинестетическая (моторная) память на положение и перемещение тела в пространстве
    var rate160 = el.inputField160.value; // Тактильная память
    var rate161 = el.inputField161.value; // Обонятельная память
    var rate162 = el.inputField162.value; // Вкусовая память

    var counter = 0
    let res = [];

    if (ans1 == "yes"){
        counter++;
        res.push(rate1);
    }else{
        res.push(0);
    }
    if (ans2 == "yes"){
        counter++;
        res.push(rate2);
    }else{
        res.push(0);
    }
    if (ans3 == "yes"){
        counter++;
        res.push(rate3);
    }else{
        res.push(0);
    }
    if (ans4 == "yes"){
        counter++;
        res.push(rate4);
    }else{
        res.push(0);
    }
    if (ans5 == "yes"){
        counter++;
        res.push(rate5);
    }else{
        res.push(0);
    }
    if (ans6 == "yes"){
        counter++;
        res.push(rate6);
    }else{
        res.push(0);
    }
    if (ans7 == "yes"){
        counter++;
        res.push(rate7);
    }else{
        res.push(0);
    }
    if (ans8 == "yes"){
        counter++;
        res.push(rate8);
    }else{
        res.push(0);
    }
    if (ans9 == "yes"){
        counter++;
        res.push(rate9);
    }else{
        res.push(0);
    }
    if (ans10 == "yes"){
        counter++;
        res.push(rate10);
    }else{
        res.push(0);
    }
    if (ans11 == "yes"){
        counter++;
        res.push(rate11);
    }else{
        res.push(0);
    }
    if (ans12 == "yes"){
        counter++;
        res.push(rate12);
    }else{
        res.push(0);
    }
    if (ans13 == "yes"){
        counter++;
        res.push(rate13);
    }else{
        res.push(0);
    }
    if (ans14 == "yes"){
        counter++;
        res.push(rate14);
    }else{
        res.push(0);
    }
    if (ans15 == "yes"){
        counter++;
        res.push(rate15);
    }else{
        res.push(0);
    }
    if (ans16 == "yes"){
        counter++;
        res.push(rate16);
    }else{
        res.push(0);
    }
    if (ans17 == "yes"){
        counter++;
        res.push(rate17);
    }else{
        res.push(0);
    }
    if (ans18 == "yes"){
        counter++;
        res.push(rate18);
    }else{
        res.push(0);
    }
    if (ans19 == "yes"){
        counter++;
        res.push(rate19);
    }else{
        res.push(0);
    }
    if (ans20 == "yes"){
        counter++;
        res.push(rate20);
    }else{
        res.push(0);
    }
    if (ans21 == "yes"){
        counter++;
        res.push(rate21);
    }else{
        res.push(0);
    }
    if (ans22 == "yes"){
        counter++;
        res.push(rate22);
    }else{
        res.push(0);
    }
    if (ans23 == "yes"){
        counter++;
        res.push(rate23);
    }else{
        res.push(0);
    }
    if (ans24 == "yes"){
        counter++;
        res.push(rate24);
    }else{
        res.push(0);
    }
    if (ans25 == "yes"){
        counter++;
        res.push(rate25);
    }else{
        res.push(0);
    }
    if (ans26 == "yes"){
        counter++;
        res.push(rate26);
    }else{
        res.push(0);
    }
    if (ans27 == "yes"){
        counter++;
        res.push(rate27);
    }else{
        res.push(0);
    }
    if (ans28 == "yes"){
        counter++;
        res.push(rate28);
    }else{
        res.push(0);
    }
    if (ans29 == "yes"){
        counter++;
        res.push(rate29);
    }else{
        res.push(0);
    }
    if (ans30 == "yes"){
        counter++;
        res.push(rate30);
    }else{
        res.push(0);
    }
    if (ans31 == "yes"){
        counter++;
        res.push(rate31);
    }else{
        res.push(0);
    }
    if (ans32 == "yes"){
        counter++;
        res.push(rate32);
    }else{
        res.push(0);
    }
    if (ans33 == "yes"){
        counter++;
        res.push(rate33);
    }else{
        res.push(0);
    }
    if (ans34 == "yes"){
        counter++;
        res.push(rate34);
    }else{
        res.push(0);
    }
    if (ans35 == "yes"){
        counter++;
        res.push(rate35);
    }else{
        res.push(0);
    }
    if (ans36 == "yes"){
        counter++;
        res.push(rate36);
    }else{
        res.push(0);
    }
    if (ans37 == "yes"){
        counter++;
        res.push(rate37);
    }else{
        res.push(0);
    }
    if (ans38 == "yes"){
        counter++;
        res.push(rate38);
    }else{
        res.push(0);
    }
    if (ans39 == "yes"){
        counter++;
        res.push(rate39);
    }else{
        res.push(0);
    }
    if (ans40 == "yes"){
        counter++;
        res.push(rate40);
    }else{
        res.push(0);
    }
    if (ans41 == "yes"){
        counter++;
        res.push(rate41);
    }else{
        res.push(0);
    }
    if (ans42 == "yes"){
        counter++;
        res.push(rate42);
    }else{
        res.push(0);
    }
    if (ans43 == "yes"){
        counter++;
        res.push(rate43);
    }else{
        res.push(0);
    }
    if (ans44 == "yes"){
        counter++;
        res.push(rate44);
    }else{
        res.push(0);
    }
    if (ans45 == "yes"){
        counter++;
        res.push(rate45);
    }else{
        res.push(0);
    }
    if (ans46 == "yes"){
        counter++;
        res.push(rate46);
    }else{
        res.push(0);
    }
    if (ans47 == "yes"){
        counter++;
        res.push(rate47);
    }else{
        res.push(0);
    }
    if (ans48 == "yes"){
        counter++;
        res.push(rate48);
    }else{
        res.push(0);
    }
    if (ans49 == "yes"){
        counter++;
        res.push(rate49);
    }else{
        res.push(0);
    }
    if (ans50 == "yes"){
        counter++;
        res.push(rate50);
    }else{
        res.push(0);
    }
    if (ans51 == "yes"){
        counter++;
        res.push(rate51);
    }else{
        res.push(0);
    }
    if (ans52 == "yes"){
        counter++;
        res.push(rate52);
    }else{
        res.push(0);
    }
    if (ans53 == "yes"){
        counter++;
        res.push(rate53);
    }else{
        res.push(0);
    }
    if (ans54 == "yes"){
        counter++;
        res.push(rate54);
    }else{
        res.push(0);
    }
    if (ans55 == "yes"){
        counter++;
        res.push(rate55);
    }else{
        res.push(0);
    }
    if (ans56 == "yes"){
        counter++;
        res.push(rate56);
    }else{
        res.push(0);
    }
    if (ans57 == "yes"){
        counter++;
        res.push(rate57);
    }else{
        res.push(0);
    }
    if (ans58 == "yes"){
        counter++;
        res.push(rate58);
    }else{
        res.push(0);
    }
    if (ans59 == "yes"){
        counter++;
        res.push(rate59);
    }else{
        res.push(0);
    }
    if (ans60 == "yes"){
        counter++;
        res.push(rate60);
    }else{
        res.push(0);
    }
    if (ans61 == "yes"){
        counter++;
        res.push(rate61);
    }else{
        res.push(0);
    }
    if (ans62 == "yes"){
        counter++;
        res.push(rate62);
    }else{
        res.push(0);
    }
    if (ans63 == "yes"){
        counter++;
        res.push(rate63);
    }else{
        res.push(0);
    }
    if (ans64 == "yes"){
        counter++;
        res.push(rate64);
    }else{
        res.push(0);
    }
    if (ans65 == "yes"){
        counter++;
        res.push(rate65);
    }else{
        res.push(0);
    }
    if (ans66 == "yes"){
        counter++;
        res.push(rate66);
    }else{
        res.push(0);
    }
    if (ans67 == "yes"){
        counter++;
        res.push(rate67);
    }else{
        res.push(0);
    }
    if (ans68 == "yes"){
        counter++;
        res.push(rate68);
    }else{
        res.push(0);
    }
    if (ans69 == "yes"){
        counter++;
        res.push(rate69);
    }else{
        res.push(0);
    }
    if (ans70 == "yes"){
        counter++;
        res.push(rate70);
    }else{
        res.push(0);
    }
    if (ans71 == "yes"){
        counter++;
        res.push(rate71);
    }else{
        res.push(0);
    }
    if (ans72 == "yes"){
        counter++;
        res.push(rate72);
    }else{
        res.push(0);
    }
    if (ans73 == "yes"){
        counter++;
        res.push(rate73);
    }else{
        res.push(0);
    }
    if (ans74 == "yes"){
        counter++;
        res.push(rate74);
    }else{
        res.push(0);
    }
    if (ans75 == "yes"){
        counter++;
        res.push(rate75);
    }else{
        res.push(0);
    }
    if (ans76 == "yes"){
        counter++;
        res.push(rate76);
    }else{
        res.push(0);
    }
    if (ans77 == "yes"){
        counter++;
        res.push(rate77);
    }else{
        res.push(0);
    }
    if (ans78 == "yes"){
        counter++;
        res.push(rate78);
    }else{
        res.push(0);
    }
    if (ans79 == "yes"){
        counter++;
        res.push(rate79);
    }else{
        res.push(0);
    }
    if (ans80 == "yes"){
        counter++;
        res.push(rate80);
    }else{
        res.push(0);
    }
    if (ans81 == "yes"){
        counter++;
        res.push(rate81);
    }else{
        res.push(0);
    }
    if (ans82 == "yes"){
        counter++;
        res.push(rate82);
    }else{
        res.push(0);
    }
    if (ans83 == "yes"){
        counter++;
        res.push(rate83);
    }else{
        res.push(0);
    }
    if (ans84 == "yes"){
        counter++;
        res.push(rate84);
    }else{
        res.push(0);
    }
    if (ans85 == "yes"){
        counter++;
        res.push(rate85);
    }else{
        res.push(0);
    }
    if (ans86 == "yes"){
        counter++;
        res.push(rate86);
    }else{
        res.push(0);
    }
    if (ans87 == "yes"){
        counter++;
        res.push(rate87);
    }else{
        res.push(0);
    }
    if (ans88 == "yes"){
        counter++;
        res.push(rate88);
    }else{
        res.push(0);
    }
    if (ans89 == "yes"){
        counter++;
        res.push(rate89);
    }else{
        res.push(0);
    }
    if (ans90 == "yes"){
        counter++;
        res.push(rate90);
    }else{
        res.push(0);
    }
    if (ans91 == "yes"){
        counter++;
        res.push(rate91);
    }else{
        res.push(0);
    }
    if (ans92 == "yes"){
        counter++;
        res.push(rate92);
    }else{
        res.push(0);
    }
    if (ans93 == "yes"){
        counter++;
        res.push(rate93);
    }else{
        res.push(0);
    }
    if (ans94 == "yes"){
        counter++;
        res.push(rate94);
    }else{
        res.push(0);
    }
    if (ans95 == "yes"){
        counter++;
        res.push(rate95);
    }else{
        res.push(0);
    }
    if (ans96 == "yes"){
        counter++;
        res.push(rate96);
    }else{
        res.push(0);
    }
    if (ans97 == "yes"){
        counter++;
        res.push(rate97);
    }else{
        res.push(0);
    }
    if (ans98 == "yes"){
        counter++;
        res.push(rate98);
    }else{
        res.push(0);
    }
    if (ans99 == "yes"){
        counter++;
        res.push(rate99);
    }else{
        res.push(0);
    }
    if (ans100 == "yes"){
        counter++;
        res.push(rate100);
    }else{
        res.push(0);
    }
    if (ans101 == "yes"){
        counter++;
        res.push(rate101);
    }else{
        res.push(0);
    }
    if (ans102 == "yes"){
        counter++;
        res.push(rate102);
    }else{
        res.push(0);
    }
    if (ans103 == "yes"){
        counter++;
        res.push(rate103);
    }else{
        res.push(0);
    }
    if (ans104 == "yes"){
        counter++;
        res.push(rate104);
    }else{
        res.push(0);
    }
    if (ans105 == "yes"){
        counter++;
        res.push(rate105);
    }else{
        res.push(0);
    }
    if (ans106 == "yes"){
        counter++;
        res.push(rate106);
    }else{
        res.push(0);
    }
    if (ans107 == "yes"){
        counter++;
        res.push(rate107);
    }else{
        res.push(0);
    }
    if (ans108 == "yes"){
        counter++;
        res.push(rate108);
    }else{
        res.push(0);
    }
    if (ans109 == "yes"){
        counter++;
        res.push(rate109);
    }else{
        res.push(0);
    }
    if (ans110 == "yes"){
        counter++;
        res.push(rate110);
    }else{
        res.push(0);
    }
    if (ans111 == "yes"){
        counter++;
        res.push(rate111);
    }else{
        res.push(0);
    }
    if (ans112 == "yes"){
        counter++;
        res.push(rate112);
    }else{
        res.push(0);
    }
    if (ans113 == "yes"){
        counter++;
        res.push(rate113);
    }else{
        res.push(0);
    }
    if (ans114 == "yes"){
        counter++;
        res.push(rate114);
    }else{
        res.push(0);
    }
    if (ans115 == "yes"){
        counter++;
        res.push(rate115);
    }else{
        res.push(0);
    }
    if (ans116 == "yes"){
        counter++;
        res.push(rate116);
    }else{
        res.push(0);
    }
    if (ans117 == "yes"){
        counter++;
        res.push(rate117);
    }else{
        res.push(0);
    }
    if (ans118 == "yes"){
        counter++;
        res.push(rate118);
    }else{
        res.push(0);
    }
    if (ans119 == "yes"){
        counter++;
        res.push(rate119);
    }else{
        res.push(0);
    }
    if (ans120 == "yes"){
        counter++;
        res.push(rate120);
    }else{
        res.push(0);
    }
    if (ans121 == "yes"){
        counter++;
        res.push(rate121);
    }else{
        res.push(0);
    }
    if (ans122 == "yes"){
        counter++;
        res.push(rate122);
    }else{
        res.push(0);
    }
    if (ans123 == "yes"){
        counter++;
        res.push(rate123);
    }else{
        res.push(0);
    }
    if (ans124 == "yes"){
        counter++;
        res.push(rate124);
    }else{
        res.push(0);
    }
    if (ans125 == "yes"){
        counter++;
        res.push(rate125);
    }else{
        res.push(0);
    }
    if (ans126 == "yes"){
        counter++;
        res.push(rate126);
    }else{
        res.push(0);
    }
    if (ans127 == "yes"){
        counter++;
        res.push(rate127);
    }else{
        res.push(0);
    }
    if (ans128 == "yes"){
        counter++;
        res.push(rate128);
    }else{
        res.push(0);
    }
    if (ans129 == "yes"){
        counter++;
        res.push(rate129);
    }else{
        res.push(0);
    }
    if (ans130 == "yes"){
        counter++;
        res.push(rate130);
    }else{
        res.push(0);
    }
    if (ans131 == "yes"){
        counter++;
        res.push(rate131);
    }else{
        res.push(0);
    }
    if (ans132 == "yes"){
        counter++;
        res.push(rate132);
    }else{
        res.push(0);
    }
    if (ans133 == "yes"){
        counter++;
        res.push(rate133);
    }else{
        res.push(0);
    }
    if (ans134 == "yes"){
        counter++;
        res.push(rate134);
    }else{
        res.push(0);
    }
    if (ans135 == "yes"){
        counter++;
        res.push(rate135);
    }else{
        res.push(0);
    }
    if (ans136 == "yes"){
        counter++;
        res.push(rate136);
    }else{
        res.push(0);
    }
    if (ans137 == "yes"){
        counter++;
        res.push(rate137);
    }else{
        res.push(0);
    }
    if (ans138 == "yes"){
        counter++;
        res.push(rate138);
    }else{
        res.push(0);
    }
    if (ans139 == "yes"){
        counter++;
        res.push(rate139);
    }else{
        res.push(0);
    }
    if (ans140 == "yes"){
        counter++;
        res.push(rate140);
    }else{
        res.push(0);
    }
    if (ans141 == "yes"){
        counter++;
        res.push(rate141);
    }else{
        res.push(0);
    }
    if (ans142 == "yes"){
        counter++;
        res.push(rate142);
    }else{
        res.push(0);
    }
    if (ans143 == "yes"){
        counter++;
        res.push(rate143);
    }else{
        res.push(0);
    }
    if (ans144 == "yes"){
        counter++;
        res.push(rate144);
    }else{
        res.push(0);
    }
    if (ans145 == "yes"){
        counter++;
        res.push(rate145);
    }else{
        res.push(0);
    }
    if (ans146 == "yes"){
        counter++;
        res.push(rate146);
    }else{
        res.push(0);
    }
    if (ans147 == "yes"){
        counter++;
        res.push(rate147);
    }else{
        res.push(0);
    }
    if (ans148 == "yes"){
        counter++;
        res.push(rate148);
    }else{
        res.push(0);
    }
    if (ans149 == "yes"){
        counter++;
        res.push(rate149);
    }else{
        res.push(0);
    }
    if (ans150 == "yes"){
        counter++;
        res.push(rate150);
    }else{
        res.push(0);
    }
    if (ans151 == "yes"){
        counter++;
        res.push(rate151);
    }else{
        res.push(0);
    }
    if (ans152 == "yes"){
        counter++;
        res.push(rate152);
    }else{
        res.push(0);
    }
    if (ans153 == "yes"){
        counter++;
        res.push(rate153);
    }else{
        res.push(0);
    }
    if (ans154 == "yes"){
        counter++;
        res.push(rate154);
    }else{
        res.push(0);
    }
    if (ans155 == "yes"){
        counter++;
        res.push(rate155);
    }else{
        res.push(0);
    }
    if (ans156 == "yes"){
        counter++;
        res.push(rate156);
    }else{
        res.push(0);
    }
    if (ans157 == "yes"){
        counter++;
        res.push(rate157);
    }else{
        res.push(0);
    }
    if (ans158 == "yes"){
        counter++;
        res.push(rate158);
    }else{
        res.push(0);
    }
    if (ans159 == "yes"){
        counter++;
        res.push(rate159);
    }else{
        res.push(0);
    }
    if (ans160 == "yes"){
        counter++;
        res.push(rate160);
    }else{
        res.push(0);
    }
    if (ans161 == "yes"){
        counter++;
        res.push(rate161);
    }else{
        res.push(0);
    }
    if (ans162 == "yes"){
        counter++;
        res.push(rate162);
    }else{
        res.push(0);
    }

    for (let i = 0; i < res.length; i++){
        var chng = Number(res[i]);
        res[i] = chng;
    }
    
    
    var itg = "";
    var fail = "";
    if (counter < 5 || counter > 10){
        fail = "Выберите от 5 до 10 качеств!";
    }
    if ( profession == ""){
        fail = "Введите название профессии!"
    }

    for (let i = 0; i < res.length; i++){
        if (res[i] > 10 || res[i] < 0){
            fail = "Неправильно расставлены рейтинги!"
        }
        itg = itg + res[i].toString() + " ";
    }

    console.log(itg);
    console.log(res);

    if(fail != ""){
        document.getElementById('error').innerHTML = fail;
        return false;
    }else{
        
        alert("Рейтиговые качества к професии " + profession + " успешно записаны!");

        return true;
    }
}