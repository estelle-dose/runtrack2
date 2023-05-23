<!DOCTYPE html>
<html>
<head>
    <title>job06</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possède finissent par nous posséder.";

        mb_internal_encoding('UTF-8');

        $length = mb_strlen($str);
        for ($i = $length - 1; $i >= 0; $i--) {
            echo mb_substr($str, $i, 1);
        }
    ?>
</body>
</html>