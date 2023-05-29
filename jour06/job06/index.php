<!DOCTYPE html>
<html>
<head>
    <title>job06</title>
</head>
<body>
    <?php
        function leetSpeak($str) {
            $str = str_ireplace(['A', 'B', 'E', 'G', 'L', 'S', 'T'], ['4', '8', '3', '6', '1', '5', '7'], $str);
            return $str;
        }

        $input = "Hello World!";
        $output = leetSpeak($input);
        echo $output;  // Affiche la chaîne "H3110 W0r1d!" (leet speak de "Hello World!")

    ?>
</body>
</html>