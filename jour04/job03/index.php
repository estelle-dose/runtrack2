<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    <form method="POST">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">Âge :</label>
        <input type="text" name="age" id="age"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
        $argumentsCount = count($_POST);

        echo "Le nombre d'arguments POST envoyé est : $argumentsCount";
    ?>
</body>
</html>