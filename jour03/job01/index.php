<!DOCTYPE html>
<html>
<head>
    <title>job01</title>
</head>
<body>
    <?php
        $nombres = [200, 204, 173, 98, 171, 404, 459];

        foreach ($nombres as $nombre) {
            if ($nombre % 2 == 0) {
                echo $nombre . " est paire<br />";
            } else {
                echo $nombre . " est impaire<br />";
            }
        }
    ?>
</body>
</html>