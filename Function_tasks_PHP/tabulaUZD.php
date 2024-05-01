<html>
  <head>
    <title>PHP Test</title>
    <meta charset="uft-8">
  </head>
  <body>
    <?php
    $sk = 1;
    echo"<pre>";
      for ($row = 1; $row <= 10; $row++ ){ 
     for ($col = 1; $col <= 10; $col++ ){ 
       $roc= $row * $col; echo "$roc \t";}
      echo"  <br>"; }
      echo"</pre>";

      
  ?> 

    
  </body>
</html>