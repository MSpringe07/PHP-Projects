<html>
  <head>
    <title>PHP Test</title>
     <meta charset="utf-8">
  </head>
  <body>
<?php 
   $Skaitlis = 1;
   $Tris = 3;
   $Pieci = 5;
   $PiecPac = 15;

    While ($Skaitlis <= 100) {
      
      if ($Skaitlis % $PiecPac == 0 ) {echo"<p> FizzBuzz!</p>";}
        
      else if ($Skaitlis % $Tris == 0) {echo"<p> Fizz!</p>";} 
      
      else if ($Skaitlis % $Pieci == 0) {echo"<p> Buzz!</p>";} 
    
      else {echo "<p>$Skaitlis</p>";}
      
      $Skaitlis = $Skaitlis + 1;}
   
  ?>
  </body>
</html>