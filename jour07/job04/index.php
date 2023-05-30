<!DOCTYPE html>
<html>
<head>
    <title>job04</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['prenom'])) {
            $prenom = $_COOKIE['prenom'];
            $connected = true;
        } else {
            $prenom = '';
            $connected = false;
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
            $prenom = $_POST['prenom'];
            setcookie('prenom', $prenom, time() + 3600 * 24 * 30); // Définit le cookie avec une durée de vie de 30 jours
            $connected = true;
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deco'])) {
            setcookie('prenom', '', time() - 3600); // Supprime le cookie en définissant une date d'expiration passée
            $connected = false;
        }
        
        if ($connected) {
            echo "Bonjour $prenom !<br>";
            echo '<form method="post" action="">';
            echo '<button type="submit" name="deco">Déconnexion</button>';
            echo '</form>';
        } else {
            echo '<form method="post" action="">';
            echo '<label for="prenom">Prénom :</label>';
            echo '<input type="text" name="prenom" id="prenom" required>';
            echo '<button type="submit" name="connexion">Connexion</button>';
            echo '</form>';
        }        
    ?>
</body>
</html>