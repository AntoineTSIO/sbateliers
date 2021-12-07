drop database if exists sbateliers ;
create database sbateliers ;

use sbateliers ;

create table Client (
    numero integer not null ,
    civilite varchar(50),
    nom varchar(50),
    prenom varchar(50),
    date_de_naissance date,
    adresse_electronique varchar(100),
    mot_de_passe varchar(100),
    adresse_postale varchar(100),
    code_postal char(6),
    ville varchar(100),
    numero_de_telephone char(14),
    PRIMARY KEY (numero)
) ;

create table Responsable_Ateliers (
    numero integer not null,
    nom_de_connexion varchar(50),
    nom varchar(50),
    prenom varchar(50),
    mot_de_passe varchar(100),
    PRIMARY KEY (numero)
) ; 

create table Atelier (
    numero integer not null,
    responsable integer not null,
    date_enregistrement date,
    date_et_heure_programmees datetime,
    duree time,
    nombre_de_places integer,
    theme varchar(50),
    PRIMARY KEY (numero),
    FOREIGN KEY (responsable) REFERENCES Responsable_Ateliers (numero)
) ;

create table Participation (
    date_inscription date,
    commentaire varchar(1000),
    client INTEGER,
    atelier INTEGER,
    FOREIGN KEY (atelier) REFERENCES Atelier (numero),
    FOREIGN KEY (client) REFERENCES Client (numero)
) ;
