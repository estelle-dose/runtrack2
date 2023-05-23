<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that";

        $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            $caractere = $str[$i];
            if (in_array($caractere, $voyelles)) {
                echo $caractere;
            }
        }
    ?>
</body>
</html>