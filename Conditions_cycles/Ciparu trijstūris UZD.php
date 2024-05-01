<html>
  <head>
    <title>PHP Test</title>
     <meta charset="uft-8">
    
  </head>
  <body>
    <?php  
for ($row = 1; $row <= 5; $row++){ 
     for ($col = 1; $col <= 6 - $row; $col++){
      echo "$col";}
     echo"  <br>";}
   


?> 
    
  </body>
</html>