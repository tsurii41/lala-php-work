<?php
function mysum(...$number)
{
  $gokei = 0;
  for ($i = 0; $i < count($number); $i++) {
    $gokei += $number[$i];
  }
  return $gokei;
}
echo mysum(2, 4, 5, 4, 5, 4, 5);
