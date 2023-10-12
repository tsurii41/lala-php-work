
<?php
$kuji = mt_rand(1, 6);
switch ($kuji) {
  case 1:
  case 2:
    $kekka = "大吉";
    break;
  case 3:
    $kekka = "吉";
    break;
  default:
    $kekka = "凶";
    break;
}

echo $kekka;
