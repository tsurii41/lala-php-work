
<?php
$pattern = "/^山/u";
if (preg_match($pattern, "山田建設")) {
  echo "マッチする";
} else {
  echo "マッチしない";
}
