<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHARMA Shop</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="logo">
            <i class='bx bxs-cart-add'></i>
            <h1>PHARMA<span class="span-logo">Shop</span></h1>
        </div>

        <section class="mainContent">
            <div class="content">
                <h1>Avec <span>PHARMA<span class="span-logo">Shop</span></span>, <br> obtenez tout à prix réduit !</h1>
                <div class="btn">Connexion</div>
            </div>
            <div class="login">
                <!-- <div class="point"></div> -->
                <div class="close">X</div>
                <div class="form-login">
                    <form action="" method="post">
                        <h1>Connexion</h1>
                        <div class="box">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" placeholder="Your email..." required>
                        </div>
                        <div class="box">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" placeholder="Your password..." required>
                        </div>
                        <div class="box-remember">
                            <input type="checkbox" name="" id="">
                            <p><a href="">Remember me</a></p>
                        </div>
                        <input type="submit" value="Login" name="login">
                        <div class="register">
                            <p>You don't have an account ?</p>
                            <div class="register-link">Register</div>
                        </div>
                    </form>
                </div>
    
                <div class="form-register">
                    <form action="" method="post">
                        <h1>Inscription</h1>
                        <div class="box">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" placeholder="Your name..." required>
                        </div>
                        <div class="box">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" placeholder="Your email..." required>
                        </div>
                        <div class="box">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" placeholder="Your password..." required>
                        </div>
                        <div class="box">
                            <label for="">Confirm password</label>
                            <input type="password" name="confpassword" id="" placeholder="Confirm your password..." required>
                        </div>
                        <input type="submit" value="Sign up" name="sign-up">
                        <div class="register">
                            <p>You already have an account ?</p>
                            <div class="login-link">Login</div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
<script type="text/javascript" src="login.js">
</script>
</html>