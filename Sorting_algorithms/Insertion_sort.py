<?php
function insertion($masivs_kartosanai){
  for ($i = 0; $i < count($masivs_kartosanai); $i++) {
    $key = $masivs_kartosanai[$i];
    $j = $i - 1;
    while ($j >= 0 && $masivs_kartosanai[$j] > $key) {
      $masivs_kartosanai[$j + 1] = $masivs_kartosanai[$j];
      $j--;
    }
    $masivs_kartosanai[$j + 1] = $key;
  }
  return $masivs_kartosanai;
}

?>
