<!DOCTYPE html>
<html>
<head>
    <title>job04</title>
</head>
<body>
    <?php
        $str = "Dans l'espace, personne ne vous entend crier";
        $characterCount = 0;

        for ($i = 0; isset($str[$i]); $i++) {
            $characterCount++;
        }

        echo "Le nombre de caractères dans la chaîne est : " . $characterCount;
    ?>
</body>
</html>