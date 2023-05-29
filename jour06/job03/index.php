<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    <?php
        function getHello() {
            return "Hello LaPlateforme!";
        }
        
        $helloMessage = getHello();  // Appel de la fonction et récupération de la valeur de retour
        echo $helloMessage;  // Affichage de la valeur de retour

    ?>
</body>
</html>