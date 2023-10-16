<?php

$pattern = "/[^青赤]木/u";
if (preg_match($pattern, "大木")) {
  echo "マッチしました";
} else {
  echo "マッチしません";
}
