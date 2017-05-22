<html>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <head>
        <title>Exercice2</title>
    </head>
    <body>
        <!--intitulé de l'exo : Créer trois variables 
            nom , prenom et age et les initialiser avec les valeurs de votre choix.
            Attention age est de type entier. Afficher leur contenu.-->
        <h2>Exercice2</h2>     
        <h3>  L'énonce de l'exercice : Afficher le contenu de 3 variables : votre nom, prénom et votre age.</h3>
        
  <p>        
<?php
$name = "Coadic";
$firstName = "Elodie";
$age = 33;
echo 'mon nom est: '.$name. ' mon prénom est: '. $firstName. ' jai '. $age. 'ans';
?>
  </p>
  <a href="http://partie1ex1"><button type="button" name="button">Exercice précédent</button></a>
        <a href="http://partie1ex3/"><button type="button" name="button">Exercice suivant</button></a>
  
    </body>
</html>


AUTRE MANIERE 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 1 exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 2 Partie 1 Php</h1>
        <div>
            <p>Voici mes variables :</p>
            <?php
            // Déclaration des variables nom, prenom et age
            $nom = 'Lefebvre';
            $prenom = 'Priscillia';
            $age = 23;
             ?>
            <p>Je m'appelle <?php echo $nom . ' ' . $prenom ?></p>
            <p>J'ai <?php echo $age ?> ans.</p>
        </div>
    </body>
</html>