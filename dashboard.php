<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
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
                    <a href="dashboard.php"><li class="active-link"><i class='bx bxs-home' ></i>&nbsp;Dashboard</li></a>
                    <a href="panelEmploye.php"><li><i class='bx bx-user-circle' ></i>&nbsp;Employés</li></a>
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
                <i class='bx bxs-home' ></i>&nbsp;Dashboard
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
            <div class="boxes">
                <a href="panelEmploye.php">
                    <div class="box">
                        <div class="name">
                            <h2>Employés</h2>
                            <h3>75</h3>
                        </div>
                        <div class="icon">
                            <i class='bx bx-user-circle' ></i>
                        </div>
                    </div>
                </a>
                <a href="panelClients.php">
                    <div class="box">
                        <div class="name">
                            <h2>Clients</h2>
                            <h3>75</h3>
                        </div>
                        <div class="icon">
                            <i class='bx bxs-message-alt-detail'></i>
                        </div>
                    </div>
                </a>
                <a href="panelRapport.php">
                    <div class="box">
                        <div class="name">
                            <h2>Rapports</h2>
                            <h3>75</h3>
                        </div>
                        <div class="icon">
                            <i class='bx bxs-user-detail' ></i>
                        </div>
                    </div>
                </a>
                <a href="panelStock.php">
                    <div class="box">
                        <div class="name">
                            <h2>Stocks</h2>
                            <h3>75</h3>
                        </div>
                        <div class="icon">
                            <i class='bx bxs-layer' ></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tab">
                <div class="medoc">
                    <div class="head-table">
                        <h2>Médicaments récents</h2>
                        <a href="panelMedoc.php" class="btn">Plus</a>
                    </div>
                    <hr>
                    <table>
                        <tr>
                            <th>Réf</th>
                            <th>Désignation</th>
                            <th>Grammage</th>
                            <th>Catégorie</th>
                            <th>PU</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                    </table>
                </div>
                <div class="facture">
                    <div class="head-table">
                        <h2>Factures récents</h2>
                        <a href="panelFacture.php" class="btn">Plus</a>
                    </div>
                    <hr>
                    <table>
                        <tr>
                            <th>N°</th>
                            <th>De</th>
                            <th>A</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>