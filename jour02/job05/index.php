<!DOCTYPE html>
<html>
<head>
    <title>job05</title>
</head>
<body>
    <?php
        function estPremier($nombre) {
            if ($nombre < 2) {
                return false;
            }
            
            for ($i = 2; $i <= sqrt($nombre); $i++) {
                if ($nombre % $i === 0) {
                    return false;
                }
            }
            
            return true;
        }
        
        for ($i = 2; $i <= 1000; $i++) {
            if (estPremier($i)) {
                echo $i . "<br />";
            }
        }
    ?>
</body>
</html>