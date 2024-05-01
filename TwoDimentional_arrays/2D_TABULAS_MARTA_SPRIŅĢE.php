<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php  

      echo"1.UZD";
        $mas = array();

        for($rinda = 0;$rinda < 10; $rinda++){
          array_push($mas, []); //rindas ievietošana
          for ($kolonna = 0; $kolonna < 10; $kolonna++){
            array_push($mas[$rinda],0); //atkārto 10 reizes rindā
              }
        }

        for($rinda = 0;$rinda < 10; $rinda++){
          for ($kolonna = 0; $kolonna < 10; $kolonna++){
            if($rinda==$kolonna){
              break;
          }
            $mas [$rinda][$kolonna]= count($mas)-$rinda + $kolonna; //ko dara šis?
        }
       }
      echo "<pre>";

      foreach($mas as $rinda){
        foreach($rinda as $kolonna){
          echo $kolonna . "\t";
        }
        echo "<br>";
      }
      echo"</pre>";

      Echo "2.UZD";

      $mas = array();

        for($rinda = 0;$rinda < 10; $rinda++){
          array_push($mas, []); //rindas ievietošana
          for ($kolonna = 0; $kolonna < 10; $kolonna++){
            array_push($mas[$rinda],0); //atkārto 10 reizes rindā
              }
        }

    	   $mainīgais = 1;

        for($rinda = 9;$rinda >= 0; $rinda--){
          for ($kolonna = 9-$rinda; $kolonna < 9-$rinda+4; $kolonna++){
            if($kolonna >= 10){
              break;
            }
            $mas [$rinda][$kolonna]= $mainīgais; //ko dara šis?
            $mainīgais++;
          
        }
       }
      echo "<pre>";
    
      foreach($mas as $rinda){
        foreach($rinda as $kolonna){
          echo $kolonna . "\t";
        }
        echo "<br>";
      }
      echo"</pre>";













      ?> 
  </body>
</html>