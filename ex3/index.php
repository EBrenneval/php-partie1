<html>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <head>
        <title>Exercice3</title>
    </head>
    <body>
        
        <h2>Exercice 3</h2>     
        <h3>  L'énonce de l'exercice :  Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu.</h3>
  <p>        
<?php
$km = 1;
echo  $km;             // affiche la variable
echo nl2br(PHP_EOL);   // permet le saut de ligne
$km = 3;
echo $km;
echo nl2br(PHP_EOL);  // permet le saut de ligne
$km= 125;
echo $km;
?>
  </p>
        <a href="http://partie1ex2"><button type="button" name="button">Exercice précédent</button></a>
        <a href="http://partie1ex4/"><button type="button" name="button">Exercice suivant</button></a>
    </body>
</html>
