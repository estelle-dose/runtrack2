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

        $res = calcule(5, '+', 3);  // Appel de la fonction avec les valeurs 5, '+', 3
        echo $res;  // Affichage du résultat (8)
        
    ?>
</body>
</html>