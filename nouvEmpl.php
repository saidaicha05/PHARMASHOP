<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel employé</title>
    <link rel="stylesheet" href="nouvEmpl.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dash-head">
        <div class="slide-menu">
            <div class="session-user">
                <i class='bx bxs-cart-add' style="color: rgba(252, 247, 248, 0.692);"></i>
                <h1 style="font-size: 28px; color: rgba(252, 247, 248, 0.692);">PHARMA<span class="span-logo">Shop</span></h1>
            </div>
            <div class="menu">
                <ul>
                    <a href="dashboard.php"><li><i class='bx bxs-home' ></i>&nbsp;Dashboard</li></a>
                    <a href="panelEmploye.php"><li class="active-link"><i class='bx bx-user-circle' ></i>&nbsp;Employés</li></a>
                    <a href="panelClients.php"><li><i class='bx bxs-message-alt-detail'></i>&nbsp;Clients suivis</li></a>
                    <a href="panelMedoc.php"><li><i class='bx bx-customize'></i>&nbsp;Médicaments</li></a>
                    <a href="panelRapport.php"><li><i class='bx bxs-user-detail' ></i>&nbsp;Rapports</li></a>
                    <a href="panelFacture.php"><li><i class='bx bx-money-withdraw'></i>&nbsp;Factures</li></a>
                    <a href="panelStock.php"><li><i class='bx bxs-layer' ></i>&nbsp;Stocks</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="dash-container">
        <div class="head-menu">
            <div class="title">
                <i class='bx bx-user-circle' ></i>&nbsp;Nouveau employé
            </div>
            <div class="tools">
                <div class="search">
                    <input type="search" name="" id="" placeholder="Search...">
                    <i class='bx bx-search' ></i>
                </div>
                <div class="tool">
                    <i class='bx bx-bell'></i>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </div>

        <div class="content">
            <form action="#" method="post">
                <div class="boxes">
                    <!-- <div class="box-matricule">
                        <label for="">Matricule</label>
                        <input type="text" name="matricule" id="">
                    </div> -->
                    <div class="box">
                        <label for="">Nom & prénom</label>
                        <input type="text" name="nom_prenom" id="" required>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" required>
                    </div>
                    <div class="box">
                        <label for="">N° CNI</label>
                        <input type="text" name="cni" id="" required>
                    </div>
                    <div class="box">
                        <label for="">Contact</label>
                        <input type="text" name="contact" id="" required>
                    </div>
                    <div class="box">
                        <label for="">Mot de passe</label>
                        <input type="password" name="password" id="">
                    </div>
                    <div class="box">
                        <label for="">Confirmez mot de passe</label>
                        <input type="password" name="confpassword" id="">
                    </div>
                </div>
                <div class="boxes">
                    <div class="box">
                        <label for="">Poste à occuper</label>
                        <select name="poste" id="" required>
                            <option value="Conseiller">Conseiller</option>
                            <option value="Responsable marketing">Responsable marketing</option>
                            <option value="Caissier(e)">Caissier(e)</option>
                            <option value="Responsable assurance">Responsable assurance</option>
                        </select>
                    </div>
                </div>
                <button type="submit">Ajouter</button>
                <?php
                    if ($resultat) {
                        ?>
                        <p style="color: #fff; font-size: 14px;">l'employe a ete ajoute</p>
                        <?php
                    } else {
                        # code...
                    }
                    
                ?>
            </form>
        </div>
    </div>
</body>
</html>

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
    // echo "Vos données ont été enrégistrées";
?>