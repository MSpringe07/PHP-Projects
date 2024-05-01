<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["number"])) {
    echo "<p> Nav ievadīts grāmatu skaits!</p>";
  } else {
    $number = $_POST["number"];
    $amount = $_POST["book"];

    if ($number > $array[$amount][4]) {
      echo "<br> Nevar nopirkt $number grāmatas. I pieejamas tikai" . $array[$amount][4] . ".";
      if ($array[$amount][4] == 0) {
        echo "<br> Nepieciešamas" . $array[$amount][2] . "grāmatas";
      }
    } else {
      $left = $array[$amount][4] - $number;
      $array[$amount][4] = $left;
      $fails_csv = fopen("casv_fails.csv", "w") or die("Nevar ierakstīt failā!");

      foreach ($array as $row) {
        fputcsv($fails_csv, $row);
      }
      fclose($fails_csv);

      $cena = $array[$amount][6] * $number;
      echo "<br> Cena ir " . $cena . " euro </br>";

      if($left == 0) {
        echo "<br> Nepieciešamas " . $array[$amount][2] . "</br>";
      }
      
    }
  }
}

?>