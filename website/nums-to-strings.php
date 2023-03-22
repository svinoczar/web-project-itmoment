<?php
// САНЯ ВПИХНИ ЭТО КУДА НАДО 

// Антон, я сам был в культурном шоке, но здесь подключаться к бд не надо, тк я подключаюсь к ней в валидаторе и запускаю этот файл оттуда.
// Пока я это не закомментил, сайт матерился и говорил, что подключение уже закрыто в другом файле (в этом) 
// $link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

$input_arr = $_SESSION["pqs_id"];
$name = $_SESSION["profession_name"];
$pqs_array = array();

foreach ($input_arr as $input){
  $query = "SELECT `kind` FROM `PQ` WHERE `id` = '$input'";
  $result = mysqli_query($link, $query);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $pqs_array[] = $row["kind"];
  }
}
$pqs = implode(", ", $pqs_array);
//ЗАПИСЬ НЕ РАБОТАЕТ(((
$query = "INSERT INTO `professions` (name, pqs)
  VALUES ('$name', '$pqs')";
mysqli_query($link, $query);
// ну собсна вот оно и закрывается.
// mysqli_close($link);

//КАК ПРОЧИТАЕШЬ КОММЕНТЫ - СОТРИ (все в этом файле)
?>