<?php
function shell_sort($masivs_kartosanai) {
  $n = count($masivs_kartosanai);
  for($gap = floor($n/2); $gap > 0 ; $gap = floor($gap / 2)) {
    for($i = $gap; $i < $n; $i++){
      $new = $masivs_kartosanai[$i];
      for($j = $i; $j >= $gap && $masivs_kartosanai[$j-$gap] > $new; $j -= $gap) {
        $masivs_kartosanai[$j] = $masivs_kartosanai[$j-$gap];
      }
      $masivs_kartosanai[$j] = $new;
    }
  }
  return $masivs_kartosanai;
}


?>