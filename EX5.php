<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>document</title>
  </head>
 
  <body>
    <h1>calcul sur les variables</h1>
  </body>
  <?phP
        $TVA = 0.2;
        $PRIX = 150;
        $Nombre = 10;
        $PrixHT = $PRIX * $Nombre;
        $PrixTTC = $PrixHT * (1 + $TVA);
        echo "Prix HT pour $Nombre articles : $PrixHT dt";
        echo "Prix TTC pour $Nombre articles : $PrixTTC dt";
    ?>
