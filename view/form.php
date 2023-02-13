<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- CDN FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./asset/style/form.css">
         
    <title>Login & Registration Form</title>
</head>
<body>
    
    <?php if($creationCompte): ?>
        <h2 class="message-bienvenue">Bienvenue <?= $_POST['name_user']?>, vous êtes maintenant inscrit !</h2>
        <?php endif; ?>
        <?php if(isset($_SESSION['connected'])): ?>
        <h2 class="message-bienvenue">Vous êtes connecté <?= $_SESSION['name_user']?>!</h2>
        <?php endif; ?>  


<div class="sub-container">       
    <div class="container">
        <!-- <img src="./asset/images/Logo-Offi.jpg" alt=""> -->
        <div class="forms">
            <div class="form login">
                <span class="title">Connexion</span>

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="mail" name="email_connexion" placeholder="Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="mdp_connexion" placeholder="Mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Se souvenir de moi</label>
                        </div>
                        
                        <a href="#" class="text">Mot de passe oublié?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Se connecter" name="connexion">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Pas encore membre?
                        <a href="#" class="text signup-link">Créer un compte</a>
                    </span>
                </div>
            </div>

            <!-- Créer un compte Form -->
            <div class="form signup">
                <span class="title">Créer un compte</span>

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Nom d'utilisateur" name="username" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Entrer votre email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Créer un mot de passe" name="password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirmer votre mot de passe" name="password_confirm" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Se souvenir de moi</label>
                        </div>
                        
                        <a href="#" class="text">Mot de passe oublié?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Créer compte" name="incription" required>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Déja membre?
                        <a href="#" class="text login-link">Se connecter ici</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- JS NAVBAR -->
 <script src="./asset/script/form.js"></script>
 <script src="./asset/script/navbar.js"></script>
</body>
</html>