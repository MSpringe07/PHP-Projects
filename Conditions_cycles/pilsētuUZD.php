<html>
  <head>
    <title>algas bonuss </title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php 
    $ALGAS_B = 0.15; //%
    $NOST_GADI = 5; 
    $MENESA_ALGA = 1000; //Eur
    $MIN_GADI = 2; //minimālais strādāto gadu daudzums lai saņemtu algu

    IF ($NOST_GADI > $MIN_GADI) {echo"<p> Nostrādātie gadi ir $NOST_GADI </p>";} 
    else if ($NOST_GADI < $MIN_GADI) {echo"<p> Bonussu nesaņem</p>";} 
    else {echo"<p> Bonussu nesaņem</p>";}

    // Cik liels bonus bija darbiniekam?
    $Bonussa_gadi = $NOST_GADI - $MIN_GADI;
     if ($Bonussa_gadi < 0) {echo"<p> Bonussu nav</p>";} 
     else {$Bonuss = $ALGAS_B * $Bonussa_gadi * $MENESA_ALGA; 
   echo "<p> Algas Bonuss ir $Bonuss EUR </p> ";}
    
    ?>
  </body>
</html>