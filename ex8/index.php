<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 8</title>
    </head>
    <body>
        <h2>Exercice 8</h2>
        <h3>Enoncé de l'exercice : Créer 3 variables.
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.</h3>
        <p>
            <?php
            $numberOne = 3 + 4;  // nbre prends la valeur de 7
            $numberTwo =5 * 20; // nbre prends la valeur de 100 
            $numberThree =  45 / 5; // nbre prends la valeur de 9
            echo $numberOne;
            echo nl2br(PHP_EOL);
            echo $numberTwo;
            echo nl2br(PHP_EOL);
            echo $numberThree;
            ?>
        </p>
        <a href="http://partie1ex7"><button type="button" name="button">Exercice précédent</button></a>
    </body>
</html>
