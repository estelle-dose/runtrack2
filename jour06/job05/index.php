<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    <?php
        function occurrences($str, $char) {
            $count = 0;
            $length = strlen($str);
            
            for ($i = 0; $i < $length; $i++) {
                if ($str[$i] === $char) {
                    $count++;
                }
            }
            
            return $count;
        }
        
        $str = "Bonjour";
        $char = "o";

        $res = occurrences($str, $char);
        echo $res;  // Affiche le nombre d'occurrences du caractère "o" dans la chaîne "Bonjour" (2)

    ?>
</body>
</html>