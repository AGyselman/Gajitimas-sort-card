<?php
//importer la connexion à la BDD
    include './utils/connectBdd.php';
    // importer le model
    include './model/model_user.php';

    $message = '';
    $creationCompte = false;

    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(isset($_POST['incription'])) {
        $user = new Utilisateur($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_confirm']);

        $user->__set('mdp_user', password_hash($user->__get('mdp_user'),PASSWORD_DEFAULT));

        $email = $user->showUserByMail($bdd);
                 //test si l'email n'existe pas
                 if(empty($email)){
                   $creationCompte = $user->createUser($bdd);
                   //message compte ajouter
                   $message = 'Le compte '.$user->__get('mail_user').' à été ajouté en BDD';
                 } else {
                   $message = 'Un compte existe déja à cette adresse email';
                 }
                 
            }

            if(isset($_POST['connexion'])) {
              $client = new Utilisateur('', $_POST['email_connexion'],$_POST['mdp_connexion']);
              $test = $client->showUserByMail($bdd);

              if(empty($test)) {
                $message = 'Aucun compte n\'existe à cette adresse';
              
              } else {
                $hash = $test[0]->mdp_user;
                $password = password_verify($_POST['mdp_connexion'], $hash);

                if($password){
                  //créer les super globales SESSION
                  $_SESSION['connected'] = "true";
                  $_SESSION['id_user'] = $test[0]->id_user;
                  $_SESSION['name_user'] = $test[0]->name_user;
                  $_SESSION['mail_user'] = $test[0]->mail_user;
                  //message connecté
                  $message = "Connecté";
                  header('Location:/GajitimasCopie/login');
                } else {
                  //message les informations sont incorrectes
                  $message = "Les informations sont incorrectes";
                }

              }
            }
    }
    
    // importer la view
    include './view/form.php';
?>