<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that";
        $vowels = "aeiouAEIOU";
        $vowelString = "";

        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (strpos($vowels, $char) !== false) {
                $vowelString .= $char;
            }
        }

        echo $vowelString;
    ?>
</body>
</html>