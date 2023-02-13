<?php
    class Cards{
        //attributs
        private $id_cards;
        private $title_cards;
        private $url_cards;
        //constructeur
        public function __construct($title_cards, $url_cards){
            $this->titleCards = $title_cards; 
            $this->urlCards = $url_cards; 
        }
        //getter and setter

        public function getIdCard():int{
            return $this->id_cards;
        }
        public function getTitleCard():string{
            return $this->title_cards;
        }
        public function getUrlCard():string{
            return $this->url_cards;
        }
        public function setIdCards($id):void{
            $this->id_cards = $id;
        }
        public function setTitleCards($title):void{
            $this->id_title = $title;
        }
        public function setUrlCards($url):void{
            $this->url_cards = $url;
        }

        // METHODE
        public function showAllCardsV2($bdd) {
            try{
                $req = $bdd->prepare('SELECT * FROM cards');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }

        public function showByUrl($bdd,$recherche) {
            try{
                $req = $bdd->prepare('SELECT * FROM cards WHERE url_cards LIKE "%'.$recherche.'%"');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        
        // FIN METHODE

        // METHODE AVEC FETCH OBJ
        // public function showAllCards($bdd):array{
        //     try{
        //         $req = $bdd->prepare('SELECT * FROM cards');
        //         $req->execute();
        //         $data = $req->fetchAll(PDO::FETCH_OBJ);
        //         return $data;
        //     }
        //     catch(Exception $e)
        //     {
        //         //affichage d'une exception en cas d’erreur
        //         die('Erreur : '.$e->getMessage());
        //     }
        // }
     
    }
?>