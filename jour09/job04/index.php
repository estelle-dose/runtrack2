<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

try {
  // Connexion à la base de données avec PDO
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Requête SQL pour récupérer les informations des étudiants dont le prénom commence par "T"
  $sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
  $result = $conn->query($sql);

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>id</th><th>prenom</th><th>nom</th><th>naissance</th><th>sexe</th><th>email</th></tr></thead>";
  echo "<tbody>";
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['naissance'] . "</td>";
    echo "<td>" . $row['sexe'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";

} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
