<!DOCTYPE html>
<html>
<head>
    <title>job01</title>
</head>
<body>
    <?php
    $argumentsCount = count($_GET);

    echo "Le nombre d'arguments GET envoyé est : $argumentsCount";
    ?>

    <form method="GET">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">Age :</label>
        <input type="text" name="age" id="age"><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>