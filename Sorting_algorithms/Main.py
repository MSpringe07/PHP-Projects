<html>
  <head>
    <title>sorting_algoritms_m_springe_10.e1</title>
  </head>
  <body>
    <?php 

include "dati.php";
include "bubble_sort.php";
include "insertion_sort.php";
include "shell_sort.php";
include "bisection_sort.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["Masīvs"])) {
        echo "<p>Masīvs nav izvēlēts!</p>";
  }  else {
  if ($_POST["Masīvs"]=="Skaitļi") {
     $masivs = $skaitli;
  } else if ($_POST["Masīvs"]=="Vārdi") {
      $masivs = $vardi;
  } else {
        echo "<p>Masīva tips nav pareizs!</p>";
  }

  if (empty($_POST["Sakārtošanas_sistēma"])) {
        echo "<p>Sakārtošanas sistēma nav izvēlēta!</p>";
  } else {
    $Sak_sistema = $_POST["Sakārtošanas_sistēma"];
  }

  if (!empty($Sak_sistema) && !empty($masivs)) {
      
    echo"<pre>";

    if ($Sak_sistema == "BUBBLE_SORT"){
      
      echo"Bubble_sort: " . $_POST["Masīvs"] . "<br>";
      $start_time1 = microtime(true);
      print_r(bubbleSort($masivs));
      $end_time1 = microtime(true);
      
    } else if($Sak_sistema == "INSERTION_SORT") {
      
      echo"Insertion_sort: " . $_POST["Masīvs"] . "<br>";
      $start_time1 = microtime(true);
      print_r(insertion($masivs));
      $end_time1 = microtime(true);
      
    } else if($Sak_sistema == "SHELL_SORT") {
      
      echo"Shell_sort: " . $_POST["Masīvs"] . "<br>";
      $start_time1 = microtime(true);
      print_r(shell_sort($masivs));
      $end_time1 = microtime(true);
      
    } else if($Sak_sistema == "BISECTION_SORT") {
      
      echo"Bisection_sort: " . $_POST["Masīvs"] . "<br>";
      $start_time1 = microtime(true);
      print_r(bisection_sort($masivs));
      $end_time1 = microtime(true);

    }

  }
  echo"</pre>";  
  }  echo "<br> Kārtošnas algoritma izpildes laiks " . ($end_time1 - $start_time1) . " mirkosekundes. <br>";
  
function sort_sort($masivs){
  $x = $masivs;
  sort($x);
  return $x;
}

$start_time = microtime(true);
sort_sort($masivs);
$end_time = microtime(true);
} 


if (($end_time - $start_time) < ($end_time1 - $start_time1)) {
  echo "<br> Iebūvētā funkcija sort() ir par " . (($end_time1 - $start_time1)-($end_time - $start_time)) . " mikrosekundēm ātrāka nekā izveidotais kārtošanas algoritms. <br>";
} else {
  echo "<br> Izveidotā kārtošanas algoritma izpildes laiks ir par " . (($end_time - $start_time)-($end_time1 - $start_time1)) . " mikrosekundēm ātrāks nekā iebūvētā funkcija sort(). <br>";
}
echo"<br>";

  
?> 
  <body>
    <form action= "index.php" method="post">
      <lable for ="Masīvs"> Masīvs: </lable>
      <select name="Masīvs" id="Masīvs">
         <option ></option>
         <option value= "Skaitļi">Skaitļi</option>
         <option value= "Vārdi">Vārdi</option>
      </select>
      <br>
      <br>
      <lable for="Sakārtošanas sistēma"> Sakārtošanas sistēma:</lable>
      <select name="Sakārtošanas sistēma" id="Sakārtošanas sistēma">
         <option ></option>
         <option value= "BUBBLE_SORT">BUBBLE_SORT</option>
         <option value= "INSERTION_SORT">INSERTION_SORT</option>
         <option value= "SHELL_SORT">SHELL_SORT</option>
         <option value= "BISECTION_SORT">BISECTION_SORT</option>
      </select>
      <br>
      <br>
      <input type="submit" value= "Iesniegt">
    </form>
  </body>
</html>
