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

  // Requête SQL pour sélectionner les informations des salles triées par capacité décroissante
  $sql = "SELECT * FROM salles ORDER BY capacite DESC";
  $result = $conn->query($sql);

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>id</th><th>nom</th><th>id_etage</th><th>capacite</th></tr></thead>";
  echo "<tbody>";
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['id_etage'] . "</td>";
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
