<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

    echo"1.Uzdevums";

    echo"<p>";
    function parbaude($mas, $number){
      for($i = 0; $i < count($mas); $i++ ){
        for($j = 0; $j < count($mas); $j++ ){
          if(($i != $j) && ($mas[$i] * $mas[$j] == $number)){
            return array($mas[$i],$mas[$j]);
          } 
        }
      } 
      return NULL;
    }

    print_r(parbaude([1,2,9,4], 39));

    echo"</p>";



    echo"2.Uzdevums";

    echo"<p>";

    function spelesRezultats($mas){
      $punkti = array(0, 0, 0);
      for ($i = 0; $i < strlen($mas); $i++){
       if ($mas[$i] == "A") {
         $punkti[0]++;
       } else if ($mas[$i] == "B") {
         $punkti[1]++;
       } else if ($mas[$i] == "C") {
         $punkti[2]++;
       } 
      } 
      return $punkti;
    }
    print_r(spelesRezultats("ABCBACC"));

     echo"</p>";


     echo"3.Uzdevums";

     echo"<p>";


    function derigsPIN($PIN){
       if(strlen($PIN) <> 4){ 
         return false;
        }
        for ($i = 0; $i < strlen($PIN); $i++){
          if(!is_numeric($PIN[$i])){
            return false;
          }
        }
      return true;
    }

    $testPIN="1234";
    echo $testPIN . "=";
  
     if(derigsPIN($testPIN)) {
       echo "true";
     } else {
       echo "false";
     }
  
     echo"</p>";

?> 
   
  </body>
</html>