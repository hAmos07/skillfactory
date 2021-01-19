<?php

$fake_data_json = file_get_contents('https://api.namefake.com/');

$fake = json_decode($fake_data_json);
?>

<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = 40;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
  else {
      $d = 'Это число НЕ находится между 15 и 20';
}
?>
