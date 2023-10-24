<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Nom d'hôte (peut être "localhost" en local)
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$baseDeDonnees = "pharmashop"; // Nom de la base de données

// Créer une connexion à la base de données
$mysqli = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
} else {
    echo "Connexion réussie!";
}

// Vous pouvez maintenant effectuer des opérations sur la base de données en utilisant l'objet $mysqli.
// N'oubliez pas de fermer la connexion lorsque vous avez terminé :


// Fonction pour insérer un tableau d'éléments dans la base de données
function insert($elements, $mysqli) {
    // Vérifier que la connexion est établie
    if ($mysqli->connect_error) {
        return false; // La connexion a échoué
    }

    // Préparer une instruction d'insertion
    $requete = $mysqli->prepare("INSERT INTO nom_de_la_table (colonne1, colonne2, colonne3) VALUES (?, ?, ?)");

    // Vérifier si la préparation de la requête a réussi
    if (!$requete) {
        return false; // La préparation de la requête a échoué
    }

    // Liens les paramètres de la requête
    $requete->bind_param("sss", $valeur1, $valeur2, $valeur3);

    foreach ($elements as $element) {
        // Assurez-vous que le tableau d'éléments contient les valeurs nécessaires
        if (count($element) < 3) {
            continue; // Ignorez les éléments qui ne contiennent pas suffisamment de valeurs
        }

        // Décomposez l'élément en valeurs individuelles
        list($valeur1, $valeur2, $valeur3) = $element;

        // Exécutez la requête
        if ($requete->execute() === false) {
            return false; // L'insertion a échoué
        }
    }

    // Fermez la requête
    $requete->close();

    return true; // Insertion réussie
}


$elements = [
    ["valeur1_1", "valeur2_1", "valeur3_1"],
    ["valeur1_2", "valeur2_2", "valeur3_2"],
    // ... Ajoutez autant d'éléments que nécessaire
];

if (insert($elements, $mysqli)) {
    echo "Insertion réussie.";
} else {
    echo "Échec de l'insertion.";
}

$mysqli->close(); // Fermez la connexion lorsque vous avez terminé

?>
