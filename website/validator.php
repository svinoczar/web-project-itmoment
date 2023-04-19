<?php
$link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT `id` FROM `profession_pqs`";
$result = mysqli_query($link, $query);
$expert_quantity = mysqli_num_rows(mysqli_query($link, "SELECT `id` FROM `users` WHERE `group_admin` = 1"));
$EXPERTS_COUNT = $expert_quantity;
$PRIMARY_ID = 55; // айдишник с которого начинается проверка таблицы с профессиями из панели эксперта.
$checked_professions = array();
$depth = (mysqli_num_rows($result));

while ($i = 0 < $depth) {
    $i++;
    // 1 запрос (получаем имя первой профессии)
    $query = "SELECT `profession_name` FROM `profession_pqs` WHERE `id` = '$PRIMARY_ID'";
    $PRIMARY_ID++;
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $primary_name = $row["profession_name"];
    }
    echo($primary_name);

    if (in_array($primary_name, $checked_professions)){
        break;
    }

    // 2 запрос (получаем список всех id данной профессии)
    $id_array = array();
    $query = "SELECT `id` FROM `profession_pqs` WHERE `profession_name` = '$primary_name'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($id_array, $row["id"]); 
        }
    }


    // ПРОВЕРКА НА КОЛИЧЕСТВО НАБОРОВ ПВК ДЛЯ ПРОФЕССИИ
    if (count($id_array) != $EXPERTS_COUNT) {
        break;
    }

    // 3 запрос (получаем список email профессии)
    $email_array = array();
    $query = "SELECT `expert_email` FROM `profession_pqs` WHERE `profession_name` = '$primary_name'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($email_array, $row["expert_email"]); // добавляем email в массив
        }
    }


    // ПРОВЕРКА НА УНИКАЛЬНОСТЬ EMAIL'ОВ ЭКСПЕРТОВ ДЛЯ ПРОФЕССИИ 
    $old_email = "░░░░░░░░░░░░░░░░░░░░░░";
    $flag = true;
    foreach($email_array as $email){
        if ($email == $old_email){
            $flag = false;
        }
        $old_email = $email;
    } if (!$flag) {break;}


    // СОРТИРОВКА ПВК ПО ВЕСУ
    $garbage_array = array();
    $query = "SELECT `pqs` FROM `profession_pqs` WHERE `profession_name` = '$primary_name'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($garbage_array, $row["pqs"]); // добавляем email в массив
        }
    }
    $first_array = str_split($garbage_array[0], 1);
    for ($index = 0; $index < count($first_array); $index++){
        $other = 
        (str_split($garbage_array[1], 1))[$index] + (str_split($garbage_array[2], 1))[$index] + 
        (str_split($garbage_array[3], 1))[$index] + (str_split($garbage_array[4], 1))[$index] + 
        (str_split($garbage_array[5], 1))[$index] + (str_split($garbage_array[6], 1))[$index];

        $first_array[$index] += $other;
    }


    $sorted_array = array();
    for ($counter = 0; $counter < 5; $counter++) {
        $max_number = max($first_array);
        $max_index = array_search($max_number, $first_array);
        $sorted_array[] = $max_index + 1;

        if ($max_index !== false) {
            unset($first_array[$max_index]);
        }
    }

    $query = "UPDATE profession_pqs SET status='checked' WHERE profession_name='$primary_name'";
    $stmt = mysqli_prepare($link, $query);

    $query = "SELECT `status` FROM `profession_pqs` WHERE `profession_name` = '$primary_name'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    // int to string
    if ($row["status"] == 'checked'){
        session_start();
        $_SESSION["pqs_id"] = $sorted_array;
        $_SESSION["profession_name"] = $primary_name;
        print_r($_SESSION["pqs_id"]);
        array_push($checked_professions, $primary_name);

        $checked_professions[] = $primary_name;
        require("nums-to-strings.php");
    }
}

mysqli_close($link);
?>