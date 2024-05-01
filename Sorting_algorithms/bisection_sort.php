<?php
function bisection_sort($masivs_kartosanai) {
  $n = count($masivs_kartosanai);
  
  for($i = 1; $i < $n; $i++) {
    $key = $masivs_kartosanai[$i];
    $left = 0;
    $right = $i - 1;

    while($left <= $right) {
      $mid = floor(($left + $right) / 2);
      if($masivs_kartosanai[$mid] > $key ) {
        $right = $mid - 1;
      } else {
        $left = $mid + 1;
      }
    }
    for($j = $i -1; $j >= $left; $j--){
      $masivs_kartosanai[$j+1] = $masivs_kartosanai[$j];
    }
    $masivs_kartosanai[$left] = $key;
  }
  
  return $masivs_kartosanai;
}



?>