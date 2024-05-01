<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
 
    echo "Kalendārs";

     $nosaukumi = ["Pi", "Ot", "Tr", "Ce", "Pie", "Se", "Sv"];
     $kalendars = array();
     $diena = 1;
     $nedela = 1;

     for ($datums = 1; $datums <= 31; $datums++) {
       $kalendars [$nedela-1][$diena-1] = $datums;
       $diena++; 
       if ($diena > 7) {
         $nedela++; 
         $diena = 1;
       }
     }

echo"<pre>";
for($indekss = 0; $indekss < count($nosaukumi); $indekss++){
  Echo $nosaukumi[$indekss] . "\t";
}
echo"</pre>";

echo"<pre>";
  
 for ($nedela = 1; $nedela <= count($kalendars); $nedela++) { 
        for ($diena = 1; $diena <= count($kalendars[$nedela-1]); $diena++) {
          echo $kalendars[$nedela-1][$diena-1] . "\t";
         
        }
       echo "<br>";
      }

        echo "<br>";

echo"<br>Reizrēķina tabula līdz 10<br>";

      for ($rinda = 1; $rinda <=10; $rinda++) { 
        for ($kolonna = 1; $kolonna <= 10; $kolonna++) {
           $mas2d[$rinda][$kolonna] = $rinda * $kolonna;
        }
      }
       foreach ($mas2d as $rinda) {
        foreach ($rinda as $kolonna) {
          echo $kolonna . "\t";
        }
        echo "<br>";
      }
echo"</pre>";





      ?> 

   
    
  </body>
</html>