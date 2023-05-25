<!DOCTYPE html>
<html>
<head>
    <title>job03</title>
</head>
<body>
    <form method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password"><br>
        
        <input type="submit" value="Envoyer">
    </form>

    <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === 'John' && $password === 'Rambo') {
                echo "C'est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }
    ?>
</body>
</html>