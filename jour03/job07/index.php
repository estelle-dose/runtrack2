<!DOCTYPE html>
<html>
<head>
    <title>job07</title>
</head>
<body>
    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $length = strlen($str);

        if ($length > 0) {
            $firstChar = $str[0];
            
            for ($i = 0; $i < $length - 1; $i++) {
                $str[$i] = $str[$i + 1];
            }
            
            $str[$length - 1] = $firstChar;
        }

        echo $str;
    ?>
</body>
</html>