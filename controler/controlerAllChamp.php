<?php
    include './utils/connectBdd.php';
    include './model/model_allChamp.php';
    include './utils/function.php';
    
    $cards = new Cards(null, null);
    $data = [];
    $message = '';

    if(isset($_POST['submit'])) {
        if(isset($_POST['s']) AND !empty($_POST['s'])){
            $recherche = cleanInput($_POST['s']);
            $data = $cards->showByUrl($bdd,$recherche);
            if(empty($data)){
            $message = "Nous n'avons trouver aucun résultat pour cette recherche";
            }
        } else {
            $message = "Merci de remplir le champ";
        }
    } else {
        $data = $cards->showAllCardsV2($bdd);
    }
    

    include './view/view_allChamp.php';
?>


