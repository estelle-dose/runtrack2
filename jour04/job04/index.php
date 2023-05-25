<!DOCTYPE html>
<html>
<head>
    <title>job04</title>
</head>
<body>
    <form method="POST">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">Age :</label>
        <input type="text" name="age" id="age"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $arguments = $_POST;
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arguments as $argument => $value) { ?>
                        <tr>
                            <td><?php echo $argument; ?></td>
                            <td><?php echo $value; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php
        }
    ?>

</body>
</html>