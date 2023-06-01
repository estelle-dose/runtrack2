SELECT etage.nom AS NomEtage, salles.nom AS `Biggest Room`, salles.capacite AS Capacite
FROM etage
INNER JOIN salles ON etage.id = salles.etage_id
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);