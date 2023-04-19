<?php

$link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
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
echo($pqs_array);
$pqs = implode(", ", $pqs_array);
$query = "INSERT INTO `professions` (name, pqs)
  VALUES ('$name', '$pqs')";
mysqli_query($link, $query);
// ну собсна вот оно и закрывается.
// mysqli_close($link);


?>