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

  // Requête SQL pour récupérer le nom et la capacité de chaque salle
  $sql = "SELECT nom, capacite FROM salles";
  $result = $conn->query($sql);

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>Nom de la salle</th><th>Capacité</th></tr></thead>";
  echo "<tbody>";
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['capacite'] . "</td>";
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
