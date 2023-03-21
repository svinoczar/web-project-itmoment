<?php
// САНЯ ВПИХНИ ЭТО КУДА НАДО 
$link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = "knopkipoehali"; // !!ЭТО ДЛЯ ТЕСТА . В ЭТУ ПЕРЕМЕННУЮ НАДО ЗАГОНЯТЬ НАЗВАНИЕ ПРОФЕССИИ

$query = "SELECT `pqs` FROM `profession_pqs` WHERE `profession_name` = '$name'";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
  $input = $row["pqs"];
}

$names = array();


for ($i = 0; $i < strlen($input); $i++) {
  $digit = $input[$i]; // это вес, здесь только проверка на больше меньше нуля

  $id = $i + 1;
  if ($id >= 0  && $digit!=0) {
    $query = "SELECT `kind` FROM `PQ` WHERE `id` = '$id'";
    $result = mysqli_query($link, $query);
    
    if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);
      $names[] = $row["kind"];
    }
  }
}


mysqli_close($link);


echo implode(", " ,$names)
?>