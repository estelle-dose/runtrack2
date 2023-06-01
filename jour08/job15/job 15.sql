SELECT salles.nom AS NomSalle, etage.nom AS NomEtage
FROM salles
INNER JOIN etage ON salles.etage_id = etage.id;