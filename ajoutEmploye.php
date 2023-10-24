<?php
    //Connexion à la base de données
    $db = mysqli_connect("localhost", "root", "", "pharmashop");

    //Verification de la connexion etablie
    if(!$db){
        die("Echec de la connexion à la base de donnée".mysqli_connect_error());
    }

    //Récupération des données du formulaire
    $nom_prenom = $_POST['nom_prenom'];
    $email = $_POST['email'];
    $cni = $_POST['cni'];
    $contact = $_POST['contact'];
    // $pwd = $_POST['pwd'];
    // $confpwd = $_POST['confpwd'];
    $poste = $_POST['poste'];
    //generation du matricule
    $matricule=rand(0, 9).rand(0, 9)."PH".rand(0, 9).rand(0, 9).rand(0, 9);
    echo "Votre matricule est ".$matricule;

    //Insertion des donnees dans la bd
    $sql = "INSERT INTO administrateur(matricule,nomprenom, email, cni, contact, poste) VALUES('$matricule', '$nom_prenom', 
                                                                                            '$email', '$cni', '$contact', '$poste' )";
    $resultat = mysqli_query($db, $sql);
    echo "Vos données ont été enrégistrées";
?>