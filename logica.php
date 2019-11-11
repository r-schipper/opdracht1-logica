<?php
  for ($i = 1; $i <= 100; $i++) {
    switch($i) {
      case $i % 3 == 0 && $i % 5 == 0:
        echo "wintersport";
        break;
      case $i % 3 == 0:
        echo "winter";
        break;
      case $i % 5 == 0:
        echo "sport";
        break;
      default:
        echo $i;
    }

    echo "\n";
  }
?>