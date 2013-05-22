<?php

$years = array(date('Y')-1, date('Y'));
$months = array(1,2,3,4,5,6,7,8,9,10,11,12);
foreach ($years as $year) {
  foreach ($months as $month) {
    echo "$month, $year\n";
  }
}
echo "done";
?>

