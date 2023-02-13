<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./asset/style/allChamp.css">
    <!-- ICONSCOUT LIB -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- CDN FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- JS NAVBAR -->
    <script src="./asset/script/navbar.js" defer></script>
    <title>Liste Personnage</title>
</head>
<body>

   <!-- TITRE CONTAINER -->
    <div class="container-header">
        <div class="container-title">
            <img class="champ-img" src="./asset/images/champ.png" alt="">
        <h2 class="title">SORTS DE FACTIONS</h2>
        </div>
        <div class="separatorRiot">
        </div>
    </div>

    <div class="container-sb">
    <form class="search-box" method="POST">
        <input type="search" class="search" name="s" placeholder="Rechercher par factions ex : chasseur, vampire, voleuse ..." require>
        <!-- <input type="submit" class="search-btn" name="submit"> -->
        <button type="submit" class="search-btn" name="submit">
        <i class="uil uil-search"></i>
        </button>
    </form>
    <button class="show-modal">Les Factions</button>

    </div>    

    <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <h1>Chasseur / Voleuse / Vampire</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
    <div class="overlay hidden"></div>

    <!-- CARD CONTAINER -->

    <div class="container-card">
        <p class="message"><?=$message?></p>

        <?php foreach($data as $cards) : ?>
       <div class="card">
           <img src="<?=$cards->url_cards?>" alt="">
           <span><?=$cards->title_cards?></span>
       </div>
        <?php endforeach;?>
    </div>


    
    <!-- JS NAVBAR -->
 <script src="./asset/script/form.js"></script>
 <script src="./asset/script/navbar.js"></script>
 <script src="./asset/script/modal.js"></script>


    
</body>
</html>