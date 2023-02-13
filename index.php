<?php
 //session start
 session_start();
 //Analyse de l'URL avec parse_url() et retourne ses composants
 $url = parse_url($_SERVER['REQUEST_URI']);
 //test soit l'url a une route sinon on renvoi à la racine
 $path = isset($url['path']) ? $url['path'] : '/';
 /*--------------------------ROUTER -----------------------------*/
 if (!empty($_SESSION['connected']) && $_SESSION['connected'] == "true") {
     include './view/navbarDeco.php';
 }else{
    include './view/navbar.php';
 }




 //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
     case $path === "/GajitimasCopie/":
         include './controler/controlerAccueil.php';
         break;

     case $path === "/GajitimasCopie/personnage":
         include './controler/controlerAllChamp.php';
         break;

     case $path === "/GajitimasCopie/login":
         include './controler/controler_add_user.php';
         break;
         
     case $path === "/GajitimasCopie/deconnexion":
         include './controler/controlerDeconnexion.php';
         break;



        


    }
 ?>