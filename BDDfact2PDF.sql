#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: produit
#------------------------------------------------------------

CREATE TABLE produit(
        ID          Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        ref         Varchar (50) NOT NULL ,
        description Varchar (50) NOT NULL ,
        prix        Float NOT NULL
	,CONSTRAINT produit_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: factures
#------------------------------------------------------------

CREATE TABLE factures(
        ID          Int  Auto_increment  NOT NULL ,
        montant     Double NOT NULL ,
        description Text NOT NULL ,
        TVA         Int NOT NULL ,
        quantite    Int NOT NULL ,
        ID_produit  Int
	,CONSTRAINT factures_PK PRIMARY KEY (ID)

	,CONSTRAINT factures_produit_FK FOREIGN KEY (ID_produit) REFERENCES produit(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        ID          Int  Auto_increment  NOT NULL ,
        user_name   Varchar (50) NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        prenom      Varchar (50) NOT NULL ,
        MDP         Varchar (8) NOT NULL ,
        ID_factures Int NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (ID)

	,CONSTRAINT utilisateur_factures_FK FOREIGN KEY (ID_factures) REFERENCES factures(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        ID             Int  Auto_increment  NOT NULL ,
        user_role      Varchar (50) NOT NULL ,
        ID_utilisateur Int NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (ID)

	,CONSTRAINT role_utilisateur_FK FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        ID               Int  Auto_increment  NOT NULL ,
        nom              Varchar (50) NOT NULL ,
        email            Varchar (50) NOT NULL ,
        numero_telephone Int NOT NULL ,
        adresse          Varchar (50) NOT NULL
	,CONSTRAINT client_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contracte
#------------------------------------------------------------

CREATE TABLE contracte(
        ID          Int NOT NULL ,
        ID_factures Int NOT NULL
	,CONSTRAINT contracte_PK PRIMARY KEY (ID,ID_factures)

	,CONSTRAINT contracte_client_FK FOREIGN KEY (ID) REFERENCES client(ID)
	,CONSTRAINT contracte_factures0_FK FOREIGN KEY (ID_factures) REFERENCES factures(ID)
)ENGINE=InnoDB;

