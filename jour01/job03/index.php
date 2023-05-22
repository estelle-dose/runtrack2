<!DOCTYPE html>
<html>
<head>
    <title>Job 03</title>
</head>
<body>
    <?php
        // Création des variables de différents types avec des valeurs
        $booleanVar = true;
        $integerVar = 42;
        $stringVar = "Hello World!";
        $floatVar = 3.14;

        // Tableau HTML pour afficher les informations des variables
        echo "<table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Nom</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>boolean</td>
                        <td>booleanVar</td>
                        <td>$booleanVar</td>
                    </tr>
                    <tr>
                        <td>integer</td>
                        <td>integerVar</td>
                        <td>$integerVar</td>
                    </tr>
                    <tr>
                        <td>string</td>
                        <td>stringVar</td>
                        <td>$stringVar</td>
                    </tr>
                    <tr>
                        <td>float</td>
                        <td>floatVar</td>
                        <td>$floatVar</td>
                    </tr>
                </tbody>
            </table>";
    ?>
</body>
</html>
