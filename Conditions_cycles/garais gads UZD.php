<html>
  <head>
    <title>PHP Test</title>
    <meta charset="uft-8">
  </head>
  <body>
    <?php  

    $gads = 2020 ; //maina pēc vajadzības

    if ($gads % 4 > 0 ) {echo "Īsais gads! <br>";}
    else if ($gads % 100 > 0) {echo "Garais gads! <br>";}
    else if ($gads % 400 == 0) {echo "Garais gads! <br>";}
    else {echo"Īsais gads! <br>";}


    ?> 

    
  </body>
</html>