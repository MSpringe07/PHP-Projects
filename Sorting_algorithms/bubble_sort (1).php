<?php 
function bubbleSort($masivs_kartosanai) {
  
  for($i = 1; $i < count($masivs_kartosanai); $i++) { 
    for($j = 0; $j < count($masivs_kartosanai) - 1; $j++) {
      if($masivs_kartosanai[$j] > $masivs_kartosanai[$j + 1]) {
        $a = $masivs_kartosanai[$j];
        $masivs_kartosanai[$j] = $masivs_kartosanai[$j + 1];
        $masivs_kartosanai[$j+1] = $a;
      }
    }   
  }
  return $masivs_kartosanai;
}

?>