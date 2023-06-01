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

  // Requête SQL pour calculer la capacité moyenne des salles
  $sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
  $result = $conn->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC);

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>capacite moyenne des salles</th></tr></thead>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td>" . $row['capacite_moyenne'] . "</td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";

} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
