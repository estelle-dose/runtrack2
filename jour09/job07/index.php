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

  // Requête SQL pour récupérer la superficie totale des étages
  $sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
  $result = $conn->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC);
  $superficieTotale = $row['superficie_totale'];

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>superficie totale des étages</th></tr></thead>";
  echo "<tbody>";
  echo "<tr><td>" . $superficieTotale . "</td></tr>";
  echo "</tbody>";
  echo "</table>";

} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
