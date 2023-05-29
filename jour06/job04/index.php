<!DOCTYPE html>
<html>
<head>
    <title>job04</title>
</head>
<body>
    <?php
        function calcule($nombre1, $operateur, $nombre2) {
            $resultat = 0;
            
            switch ($operateur) {
                case '+':
                    $resultat = $nombre1 + $nombre2;
                    break;
                case '-':
                    $resultat = $nombre1 - $nombre2;
                    break;
                case '*':
                    $resultat = $nombre1 * $nombre2;
                    break;
                case '/':
                    $resultat = $nombre1 / $nombre2;
                    break;
                case '%':
                    $resultat = $nombre1 % $nombre2;
                    break;
                default:
                    echo "Opérateur invalide.";
                    return null;
            }
            
            return $resultat;
        }

        $res = calcule(10, '+', 9);  // Appel de la fonction avec les valeurs 10, '+', 9
        echo $res;  // Affichage du résultat (19)
        
    ?>
</body>
</html>