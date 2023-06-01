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

  // Requête SQL pour récupérer le nombre total d'étudiants
  $sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
  $result = $conn->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC);
  $nbEtudiants = $row['nb_etudiants'];

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>Nombre d'étudiants</th></tr></thead>";
  echo "<tbody>";
  echo "<tr><td>" . $nbEtudiants . "</td></tr>";
  echo "</tbody>";
  echo "</table>";

} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
