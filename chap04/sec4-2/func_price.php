<?php
function price($tanka, $kosu)
{
  $souryou = 250;
  $ryoukin = $tanka * $kosu;
  if ($ryoukin < 5000) {
    return $ryoukin += $souryou;
  }
  return $ryoukin;
}
$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);
echo "金額は1は{$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額は2は{$kingaku2}円";
