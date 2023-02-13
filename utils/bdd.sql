create database users;
use users;

CREATE TABLE user(
        id_user    Int  PRIMARY KEY Auto_increment  NOT NULL ,
        name_user    Varchar (50) NOT NULL ,
        mail_user   Varchar (50) NOT NULL ,
        mdp_user    Varchar (100) NOT NULL 
)ENGINE=InnoDB;

create table cards
(
	id_cards int primary key auto_increment not null,
    title_cards varchar(50),
    url_cards varchar(100)
)engine=InnoDB;


insert into cards(title_cards, url_cards) VALUES("bandage", "./asset/images/chasseurBandage.png")
,("croix du domaine", "./asset/images/chasseurCroix.png"),("flacon de vérité", "./asset/images/chasseurFlacon.png"),
("la fuite", "./asset/images/chasseurFuite.png"),("lumière sacrée", "./asset/images/chasseurLumiere.png"),
("miroir", "./asset/images/chasseurMiroir.png"),("ruée", "./asset/images/chasseurRuee.png"),("viser", "./asset/images/chasseurVise.png"),
("attraction sensuelle", "./asset/images/vampireAttractionSensuelle.png"),("chatiment", "./asset/images/vampireChatiment.png"),
("coffre maudit", "./asset/images/vampireCoffreMaudit.png"),("force accrue", "./asset/images/vampireForceAccrueFontaine.png"),
("gargouille", "./asset/images/vampireGargouille.png"),("jeunesse éternelle", "./asset/images/vampireJeunesseEternelle.png"),
("nuée", "./asset/images/vampireNuéeChauvesSouris.png"),("coffre miroir", "./asset/images/voleuseCoffreMiroir.png"),("le passage", "./asset/images/voleusePassage.png"),
("portrait", "./asset/images/voleusePortrait.png");

DELETE from cards WHERE id_cards = 5;