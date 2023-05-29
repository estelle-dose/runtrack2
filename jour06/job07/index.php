<!DOCTYPE html>
<html>
<head>
    <title>job07</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Chaine de caractère :</label>
        <input type="text" name="str" id="str" required>
        
        <label for="fonction">Transformation :</label>
        <select name="fonction" id="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        
        <button type="submit">Valider</button>
    </form>
    
    <?php
        if (isset($_POST['str']) && isset($_POST['fonction'])) {
            $str = $_POST['str'];
            $fonction = $_POST['fonction'];
        
            if ($fonction === "gras") {
                $str = mettreEnGrasMajuscules($str);
            } elseif ($fonction === "cesar") {
                $str = decalerCaracteres($str);
            } elseif ($fonction === "plateforme") {
                $str = ajouterUnderscore($str);
            }
        
            echo $str;
        }
        
        function mettreEnGrasMajuscules($str) {
            return preg_replace('/\b([A-Z][A-Za-z]*)\b/', '<strong>$1</strong>', $str);
        }
        
        function decalerCaracteres($str, $decalage = 2) {
            $resultat = "";
            $length = strlen($str);
        
            for ($i = 0; $i < $length; $i++) {
                $char = $str[$i];
                $ascii = ord($char);
        
                if (ctype_alpha($char)) {
                    $majuscule = ctype_upper($char);
                    $ascii += $decalage;
        
                    if ($majuscule && $ascii > ord('Z')) {
                        $ascii -= 26;
                    } elseif (!$majuscule && $ascii > ord('z')) {
                        $ascii -= 26;
                    }
        
                    $char = chr($ascii);
                }
        
                $resultat .= $char;
            }
        
            return $resultat;
        }
        
        function ajouterUnderscore($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }
        
    ?>
</body>
</html>