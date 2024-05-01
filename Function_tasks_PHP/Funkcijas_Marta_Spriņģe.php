<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    echo"1.Uzdevums";

    function parveidojumi_C_F($celsija_gradi){
      $farenheits_gradi = $celsija_gradi * 9 / 5 +32;
      echo"<p> $celsija_gradi C ir $farenheits_gradi F </p>";
    }

    parveidojumi_C_F(32);


    function parveidojumi_C_K($celsija_gradi){
      $kelvina_gradi = $celsija_gradi + 273.15 ;
      echo"<p> $celsija_gradi C ir $kelvina_gradi K </p>";
    }

    parveidojumi_C_K(32);

echo "<hr>";

    echo"2.Uzdevums";

    function gadsimts($gads){
      $gadsimts = $gads / 100;
      return ceil($gadsimts);
    }

    echo"<p> 1547 ir ". gadsimts(1547) . " .gadsimts! </p>";

  echo "<hr>";

    echo"3.Uzdevums";

  echo"<p>";

    $text = "Tava mamma";

      for($sk = 0; $sk <= strlen($text); $sk++){
        if($sk % 2 == 0){
          $rezultats= strtoupper($text[$sk]);
          echo "$rezultats";
          }
        else{
          Echo"$text[$sk]";
        }
      }
      echo"</p>";

     echo "<hr>";

    echo"4.Uzdevums";

    //$krava1 = array(["M","L","L","M"],[56,]

    $M = 100;
    $L = 200;
    $S = 50;

    $burti = array($M,$L,$L,$M);
    $skaitli = array(599,62,840,90);

echo"<p>";
  function kravas_aprekinasana ($burti, $skaitli){
    
    $burtu_summa = array_sum($burti);
    $skaitlu_summa = array_sum($skaitli);
    
    if($burtu_summa >= $skaitlu_summa){
      echo "Krava ietilpst kuģī!";
    }
    else {
      echo"Krava neietilpst kuģī!";
    }
  }

    kravas_aprekinasana($burti, $skaitli);

  echo"</p>";


?> 
  </body>
</html>