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

  // Requête SQL pour récupérer la somme des capacités des salles
  $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
  $result = $conn->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC);
  $capaciteTotale = $row['capacite_totale'];

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>Somme des capacités totale des salles</th></tr></thead>";
  echo "<tbody>";
  echo "<tr><td>" . $capaciteTotale . "</td></tr>";
  echo "</tbody>";
  echo "</table>";

} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
