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

  // Requête SQL pour récupérer le prénom, le nom et la date de naissance des étudiants de sexe féminin
  $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
  $result = $conn->query($sql);

  // Affichage du tableau HTML
  echo "<table>";
  echo "<thead><tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th></tr></thead>";
  echo "<tbody>";
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['naissance'] . "</td>";
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
