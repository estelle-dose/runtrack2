<!DOCTYPE html>
<html>
<head>
    <title>job06</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possède finissent par nous posséder.";
        $reversedString = "";

        for ($i = mb_strlen($str, 'UTF-8') - 1; $i >= 0; $i--) {
            $reversedString .= mb_substr($str, $i, 1, 'UTF-8');
        }

        echo $reversedString;
    ?>
</body>
</html>