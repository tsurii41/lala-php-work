
<?php
function countup()
{
  static $count = 0;
  $count += 1;
  return $count;
}

for ($i = 1; $i <= 10; $i++) {
  $sum = countup();
  echo "{$sum}回目。<br>";
}
