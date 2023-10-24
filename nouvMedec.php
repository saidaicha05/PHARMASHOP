<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel employé</title>
    <link rel="stylesheet" href="nouvMedoc.css">
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
                    <a href="panelEmploye.php"><li><i class='bx bx-user-circle' ></i>&nbsp;Employés</li></a>
                    <a href="panelClients.php"><li><i class='bx bxs-message-alt-detail'></i>&nbsp;Clients suivis</li></a>
                    <a href="panelMedoc.php"><li class="active-link"><i class='bx bx-customize'></i>&nbsp;Médicaments</li></a>
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
                <i class='bx bx-customize'></i>&nbsp;Nouveau Médicament
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
            <form action="" method="post">
                <div class="boxes">
                    <div class="box">
                        <label for="">Référence</label>
                        <input type="text" name="" id="" required>
                    </div>
                    <div class="box">
                        <label for="">Désignation</label>
                        <input type="text" name="" id="" required>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box">
                        <label for="">Catégorie</label>
                        <select name="" id="" required>
                            <option value="">Fièvre & Douleur</option>
                            <option value="">Grossesse</option>
                            <option value="">Toux & Grippe</option>
                            <option value="">Muscles & Articulation</option>
                        </select>
                    </div>
                    <div class="box">
                        <label for="">Grammage</label>
                        <input type="text" name="" id="" required>
                    </div>
                    
                </div>
                <div class="boxes">
                    <div class="box">
                        <label for="">Fournisseur</label>
                        <input type="text" name="" id="" required>
                    </div>
                    <div class="box">
                        <label for="">Prix unitaire</label>
                        <input type="text" name="" id="" required>
                    </div>
                </div>
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>