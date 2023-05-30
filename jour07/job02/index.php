<!DOCTYPE html>
<html>
<head>
    <title>job02</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['nbvisites'])) {
            $nbVisites = $_COOKIE['nbvisites'] + 1;
        } else {
            $nbVisites = 1;
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
            setcookie('nbvisites', '', time() - 3600); // Supprime le cookie en définissant une date d'expiration passée
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
        
        setcookie('nbvisites', $nbVisites, time() + 3600 * 24 * 30); // Définit le cookie avec une durée de vie de 30 jours
        
        echo "Nombre de visites : " . $nbVisites;
    ?>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

</body>
</html>