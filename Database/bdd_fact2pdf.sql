#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: produit
#------------------------------------------------------------

CREATE TABLE produit
(
    ID          Int Auto_increment NOT NULL,
    nom         Varchar(50) NOT NULL,
    ref         Varchar(50) NOT NULL,
    description Varchar(50) NOT NULL,
    prix        Float       NOT NULL,
    CONSTRAINT produit_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: factures
#------------------------------------------------------------

CREATE TABLE factures
(
    ID          Int Auto_increment NOT NULL,
    montant     Double NOT NULL,
    description Text   NOT NULL,
    TVA         FLOAT  NOT NULL,
    quantite    Int    NOT NULL,
    ID_produit  Int,
    CONSTRAINT factures_PK PRIMARY KEY (ID),
    CONSTRAINT factures_produit_FK FOREIGN KEY (ID_produit) REFERENCES produit (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur
(
    ID          Int Auto_increment NOT NULL,
    user_name   Varchar(50) NOT NULL,
    nom         Varchar(50) NOT NULL,
    prenom      Varchar(50) NOT NULL,
    MDP         Varchar(8)  NOT NULL,
    is_admin    BIT(1)      NOT NULL,
    ID_factures Int         NOT NULL,
    CONSTRAINT utilisateur_PK PRIMARY KEY (ID),
    CONSTRAINT utilisateur_factures_FK FOREIGN KEY (ID_factures) REFERENCES factures (ID)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client
(
    ID               Int Auto_increment NOT NULL,
    nom              Varchar(50) NOT NULL,
    email            Varchar(50) NOT NULL,
    telephone        Int         NOT NULL,
    adresse          Varchar(50) NOT NULL,
    CONSTRAINT client_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contracte
#------------------------------------------------------------

CREATE TABLE client_facture
(
    ID          Int NOT NULL,
    ID_factures Int NOT NULL,
    CONSTRAINT contracte_PK PRIMARY KEY (ID, ID_factures),
    CONSTRAINT contracte_client_FK FOREIGN KEY (ID) REFERENCES client (ID),
    CONSTRAINT contracte_factures0_FK FOREIGN KEY (ID_factures) REFERENCES factures (ID)
)ENGINE=InnoDB;

INSERT INTO client (nom, email, telephone, adresse)
VALUES
    ('Robert Perron', 'perronrobert@client1.fr', '0678942680', '264 Bd Godard, 33300 Bordeaux'),
    ('SARL Lepetit', 'contactLepetit@client2.com', '0556021717', '24 rue Lafontaine, 33000 Bordeaux'),
    ('Societe Bureau', 'bureau@orange.com', '0556330271', '238 rue du Marechal Joffre, 33130 Bordeaux'),
    ('Paloma Dalport', 'paloma.dalport@client4.com', '0602406527', '114 rue Georges Bonnac, 33000 Bordeaux');

INSERT INTO produit (nom, ref, description, prix)
VALUES
    ('Produit1', 'DR67980S', 'laboris nisi ut aliquip', 32.10),
    ('Produit2', '75XZ2761', 'fugiat nulla pariatur', 14.99),
    ('Produit3', 'TS56P892', 'anim id est laborum', 25.50);

INSERT INTO factures (montant, description, quantite, TVA, ID_produit)
VALUES
    (64.20, 'nullam ac tortor vitae purus', 2, 20, 1),
    (29.98, 'etiam dignissim diam quis enim lobortis', 2, 20, 2),
    (76.50, 'aliquam faucibus purus', 3, 20, 3);

INSERT INTO utilisateur (user_name, prenom, MDP, is_admin, ID_factures)
VALUES
    ('arthur.vigieraudu', 'arthur.vigieraudu@viacesi.fr', 'motdepasse', 1, 1),
    ('lola.caillaud', 'lola.caillaud@viacesi.fr', 'motdepasse', 0, 2),
    ('emma.scheuber', 'emma.scheuber@viacesi.fr', 'motdepasse', 0, 3);

INSERT INTO client_facture (ID, ID_factures)
VALUES
       (1, 1),
       (2, 2),
       (3, 3);


