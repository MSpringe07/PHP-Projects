<html>
  <head>
    <title>Marta Spriņģe</title>
  </head>
  <body>
    <?php 
//     /* Failu lasīšanas un rakstīšanas režīmi
//     r - read - atver failu lasīšanai
//     w - write - atver failu rakstīšanani un pārraksta tajā esošo saturu
//     a - append - atver failu tikai rakstīšanai un pievieno jauno saturu beigās
//     x - create - atver un izveido failu rakstīšani, bet ja fails jau eksistē parāda kļūdu
//     */

//     // Iegūstam vissu faila saturu bez režīma - lai pārbaudītu ka fails eksistē
//       echo readfile("teksts.txt"); // Izvada arī faila izmēru Baitos // izmanto tikai pārbaudēm
// echo "<hr>";

//     // Atveram failu vai izvadām kļūdu
//       $fails = fopen("teksts.txt", "r") or die("Nevar nolasīt failu!");

//     // Izvada pa rindām līdz faila beigām
//     while(!feof($fails)) { // ! - not ; feof - end of file
//       // hile not found end of file..
//       echo fgets($fails); // fgets - nolasa 1 faila rindu
//       echo "<br>";
//     }
//     fclose($fails); // Aizver failu

//     // Datu ierakstīšana failā
//     $fails_r = fopen("ierakstits.txt", "a") or die("Nevar ierakstīt failā!");
//     $txt = "Kaut kāds texts!\n";
//       fwrite($fails_r , $txt);
//     fclose($fails_r); 
//     echo "<hr>";

//     // CSV failu apstrāde
//     // CSV - comma seperated values
//     // Masīvs ar datiem ko ieraksta CSV failā
//     $saraksts = [
//       ["Jānis", "Ziguis"],
//       ["1738467", "wiry82hnwir"],
//       ["tava mamma"],
//     ];
//     // Izveido un atver CSV failu
//     $csv_fails = fopen("casv_fails.csv", "w") or die("Nevar izveidot CSV failu!");
//     // ar ciklu ieraksta masīvā daus csv failā
//     foreach($saraksts as $rinda) {
//      fputcsv($csv_fails, $rinda);  
//     }
//     fclose($csv_fails);

//     //CSV faila nolasīšana
//     $fails_csv = fopen("casv_fails.csv", "r") or die("Nevar izveidot CSV failu!");
//     $masivs = [];
//     while(!feof($fails_csv)) {
//       $csv_rinda = fgetcsv($fails_csv);
//       if ($csv_rinda != ""){
//       array_push ($masivs, $csv_rinda);
//       }
//     }
//     fclose($fails_csv);
//     print_r($masivs);
//   	echo "<hr>";

    require_once "SimpleXLSX (1).php";

    if (!file_exists("casv_fails.csv")) {
     //izvade no Excel uz HTML / PHP tabulu
    if ($xlsx  = SimpleXLSX::parse("grāmatas.xlsx")){
       //ja excel failu var nolasīt tad simplexlsx parse izsauc funkciju no simple xlsx klases nolasīs un parādīs excel failu apstrādājamu php
      $array = $xlsx -> rows();
      
    } else {
      echo SimpleXLSX::parseError();
    }

  // print_r($array);

    $csv_fails = fopen("casv_fails.csv", "w") or die("Nevar izveidot CSV failu!");
   //ar ciklu ieraksta masīvā daus csv failā
  foreach($array as $rinda) {
   fputcsv($csv_fails, $rinda);  
  }
  fclose($csv_fails);

    } else {
      $array = [];
  $csv_fails = fopen("casv_fails.csv", "r") or die("Nevar izveidot CSV failu!");
  while(!feof($csv_fails)) {
    $csv_rinda = fgetcsv($csv_fails);
    if ($csv_rinda != ""){
    array_push ($array, $csv_rinda);
    }
  }
  fclose($csv_fails);
    }

    $isFirst = true;
      echo "<table border = '1' cellpadding = '3' style = 'border-colapse';>";
      foreach($array as $rinda) {
        if($isFirst == true){
          
          echo"<tr><th>" . implode('</th><th>', $rinda) . "</tr></th>";
          $isFirst = false;
        } else {
          echo"<tr><td>" . implode('</td><td>', $rinda) . "</td></tr>";
        }
      }
      echo "</table>";
include "forma.php";

?> 

  <br>

    <form action="index.php" method="POST">
    <lable for="book"> </lable>
    <select name="book" id="book">

      <?php
      foreach ($array as $item){
        echo "<option value='$item[0]'> $item[2]</option>";
      }
      ?>

  <br>
    <lable for="amount1"> Grāmatu skaits: </lable>  
    <input type="number" name="number" id="amount1">
  <br>
      <input type="submit" value= "submit"> 





    
  </body>
</html>