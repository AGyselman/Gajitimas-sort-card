<?php
    class Utilisateur{
        // attribut
        private $id_user;
        private $name_user;
        private $mail_user;
        private $mdp_user;
        // constructeur
        public function __construct($name, $mail, $mdp){
            $this->name_user = $name;
            $this->mail_user = $mail;
            $this->mdp_user = $mdp;
        }
        // Getter&Setter
        public function __get($property) {
            if(property_exists($this, $property)) {

            return $this->$property;
            }
        }

        public function __set($property, $value) {
            if(property_exists($this, $property)) {
            $this->$property = $value; 
            }
        }
        
           // Méthode qui ajoute un utilisateur en BDD(utilisateurs)
           public function createUser($bdd){

               try{
                   $req = $bdd->prepare('INSERT INTO user(name_user,mail_user,mdp_user) VALUES (:name_user,:mail_user,:mdp_user)');
                   $req->execute(array(
                     'name_user' => $this->__get('name_user'),
                     'mail_user' => $this->__get('mail_user'),
                     'mdp_user' => $this->__get('mdp_user'), 
                   ));
               }
               catch(Exception $e)
               {
                   //affichage d'une exception en cas d'erreur
                   die('Erreur : '.$e->getMessage());
               }
               return true;
           }
        
           public function showUserByMail($bdd){

            try{
                $req = $bdd->prepare('SELECT * FROM user WHERE mail_user = :mail_user');
                $req->execute(array(
                    'mail_user' => $this->__get('mail_user'),
                ));
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
           {
               //affichage d'une exception en cas d'erreur
               die('Erreur : '.$e->getMessage());
            }
        }    
        
    }



















 