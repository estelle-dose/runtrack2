<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <br>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <br>

    <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prenom'])) {
            $prenom = $_POST['prenom'];
        
            if (!isset($_SESSION['prenoms'])) {
                $_SESSION['prenoms'] = array();
            }
        
            $_SESSION['prenoms'][] = $prenom;
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
            unset($_SESSION['prenoms']);
        }
        
        $prenoms = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : array();
        
        echo "Liste des prénoms :<br>";
        foreach ($prenoms as $prenom) {
            echo $prenom . "<br>";
        }               
    ?>

</body>
</html>