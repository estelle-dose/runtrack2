<!DOCTYPE html>
<html>
<head>
    <title>job02</title>
</head>
<body>
    <?php
        function bonjour($jour) {
            if ($jour === true) {
                echo "Bonjour<br>";
            } elseif ($jour === false) {
                echo "Bonsoir<br>";
            }
        }

        bonjour(true);  // Affiche "Bonjour"
        bonjour(false); // Affiche "Bonsoir"

    ?>
</body>
</html>