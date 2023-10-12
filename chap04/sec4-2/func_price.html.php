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

?>
<?php
$kingaku1 = price(2400, 2);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  2400円を2個購入した場合の金額は


  <?php

  echo "{$kingaku1}円";
  ?>

  <br>
  1200円を5個購入した場合の金額は
  <?php
  $kingaku2 = price(1200, 5);
  echo "{$kingaku2}円";
  ?>



</body>

</html>