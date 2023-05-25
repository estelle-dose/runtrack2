<!DOCTYPE html>
<html>
<head>
    <title>job06</title>
</head>
<body>
    <h2>Vérification de nombre pair/impair</h2>
    <form method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <input type="submit" value="Vérifier">
    </form>

    <?php
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];

            if (ctype_digit($nombre)) {
                if ($nombre % 2 == 0) {
                    echo "Nombre pair";
                } else {
                    echo "Nombre impair";
                }
            } else {
                echo "La valeur entrée n'est pas un nombre valide.";
            }
        }
    ?>
</body>
</html>