<!DOCTYPE html>
<html>
<head>
    <title>job01</title>
</head>
<body>
    <?php
        session_start();

        if (isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites']++;
        } else {
            $_SESSION['nbvisites'] = 1;
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
            unset($_SESSION['nbvisites']);
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
        
        echo "Nombre de visites : " . $_SESSION['nbvisites'];              
    ?>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

</body>
</html>