<!DOCTYPE html>
<html>
<head>
    <title>job01</title>
</head>
<body>
    <?php
        for ($i = 0; $i <= 1337; $i++) {
            if ($i == 42) {
                echo "<b><u>" . $i . "</u></b><br />";
            } else {
                echo $i . "<br />";
            }
        }
    ?>
</body>
</html>
