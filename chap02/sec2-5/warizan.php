<?php
$a = 13;
$b = 0;
// $c = $a / $b;
try {
  $c = $a / $b;
  //$c = intdiv($a, $b);
  echo $c;
} catch (DivisionByZeroError $e) {
  echo "無理";
}
