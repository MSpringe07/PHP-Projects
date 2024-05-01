<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
      if (empty($_POST["Skaitlis"])) {
        echo "<p>Skaitļa lauks nav aizpildīts!</p>";
      } else {
        // echo $_POST["Skaitlis"];  "<br>";
      }
    
      if (empty($_POST["Skaitisanas_sistema"])) {
        echo "<p>Skaitīšanas sistēma nav izvēlēta!</p>";
      } else {
        $skaitisanassist = $_POST["Skaitisanas_sistema"];
    
        if ($skaitisanassist == "DEC-->BIN") {
          $SK =  $_POST["Skaitlis"] ;
          $REZ = "";
          while ($SK > 0) {
            $ATL = $SK % 2 ;
            $SK = floor($SK / 2);
            $REZ = $REZ . $ATL;
          }
          echo "Rezultāts: " . strrev($REZ);
        }
        else if ($skaitisanassist == "DEC-->OCT") {
          $SK =  $_POST["Skaitlis"] ;
          $Rez = "";
    
          while ($SK > 0) {
            $Atl = $SK % 8 ;
            $SK = floor($SK / 8);
            $Rez = $Rez . $Atl;
          }
          echo "Rezultāts: " . strrev ($Rez);
        }
        else if ($skaitisanassist == "DEC-->HEX") {
          $SK =  $_POST["Skaitlis"] ;
          $rez = "";
    
          while ($SK % 16 > 0 ) {
            $atl = $SK % 16 ;
            $SK = floor($SK / 16);
    
            if ($atl == 10) {
              $rez = "A" . $rez;
            }
            else if ($atl == 11) {
              $rez ="B" . $rez ;
            }
            else if ($atl == 12) {
              $rez ="C". $rez  ;
            }
            else if ($atl == 13) {
              $rez = "D" . $rez ;
            }
            else if ($atl == 14) {
              $rez = "E" . $rez ;
            }
            else if ($atl == 15) {
              $rez ="F" . $rez ;
            }
            else {
              $rez = $atl . $rez   ;
            }
          } echo"Rezultāts: $rez";
        }
        else if ($skaitisanassist == "BIN-->DEC") {
          $SK =  $_POST["Skaitlis"] ;
    
          $garums = strlen($SK); $Summa = 0;
    
    
          for ($PAk = $garums - 1; $PAk >= 0; $PAk--) {
            $DeC = substr($SK, -($PAk + 1), 1);
            $Summa = $Summa + $DeC * pow(2, $PAk);
          }
          echo "Rezultāts: $Summa";
        }
        else if ($skaitisanassist == "OCT-->DEC") {
          $SK =  $_POST["Skaitlis"] ;
    
          $garums = strlen($SK); $summa = 0;
    
          for ($PAK = $garums - 1; $PAK >= 0; $PAK--) {
            $DEc = substr($SK, -($PAK + 1), 1);
            $summa = $summa + $DEc * pow(8, $PAK);
          }
          echo "Rezultāts: $summa";
        }
        else if ($skaitisanassist == "HEX-->DEC") {
          $SK =  $_POST["Skaitlis"] ;
          $garums = strlen($SK);
          $summa = 0;
    
          for ($PAK = $garums - 1; $PAK >= 0; $PAK--) {
            $DEc = substr($SK, -($PAK + 1), 1);
            if ($DEc == "A") {
              $DEc = 10 ;
            }
            else if ($DEc == "B") {
              $DEc = 11;
            }
            else if ($DEc == "C") {
              $DEc = 12;
            }
            else if ($DEc == "D") {
              $DEc = 13;
            }
            else if ($DEc == "E") {
              $DEc = 14;
            }
            else if ($DEc == "F") {
              $DEc = 15;
            }
            $summa = $summa + $DEc * pow(16, $PAK);
            // echo $DEc." ^ ";
            // echo $PAK."<br>";
            // echo ">".$summa."<br>";
          }
          echo "Rezultāts: $summa";
        }
      }
    }

 ?> 
    
<form action= "index.php" method="post">
  <lable for ="Skaitlis1"> Skaitlis: </lable>
  <input type = "text" name="Skaitlis" id="Skaitlis1">
  <br>
  <br>
  <lable for="Skaitīšanas sistēma"> Skaitīšanas sistēma:</lable>
  <select name="Skaitisanas_sistema" id="Skaitīšanas sistēma1">
     <option value="PĀRVEIDOJUMI">PĀRVEIDOJUMI</option>
    <option value="DEC-->BIN">DEC-->BIN</option>
     <option value="DEC-->OCT">DEC-->OCT</option>
     <option value="DEC-->HEX">DEC-->HEX</option>
     <option value="HEX-->DEC">HEX-->DEC</option>
     <option value="OCT-->DEC">OCT-->DEC</option>
     <option value="BIN-->DEC">BIN-->DEC</option>
  </select>
  <br>
  <br>
  <input type="submit" value= "Iesniegt">
</form>
    
  
  </body>
</html>