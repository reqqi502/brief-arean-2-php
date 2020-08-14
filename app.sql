
 create database gestionvolV2;


create table client
(
   idClient            int  not null AUTO_INCREMENT,
   nom                 varchar(90),
   prenom               varchar(90),
   adress               varchar(90),
   numTelephone         varchar(90),
    email                varchar(90),
   passport            varchar(90) ,
   primary key (idClient)
);



create table vol
(
   idvol                int not null AUTO_INCREMENT,
   lieuDepart           varchar(90),
   destination         varchar(90),
   dateVole             date,
   prix                 int,
   nombreplace           int,
   statut               varchar(100),
   primary key (idvol)
);
create table compte
(
   idUser             int not null AUTO_INCREMENT,
   nom               varchar(90),
   prenom            varchar(123),
   email             varchar(123),
   telephone          int,
   password           varchar(90),
   statut             varchar(123),
   primary key (idUser)
);

create table reservation
(
   idReservation        int  not null AUTO_INCREMENT,
   idClient             int not null ,
   idvol                int not null,
   idUser               int not null,
   dateResr             date,
   primary key (idReservation) ,
   FOREIGN KEY (idClient) REFERENCES client(idClient) on update cascade on delete cascade,
   FOREIGN KEY (idvol) REFERENCES vol(idvol) on update cascade on delete cascade,
   FOREIGN KEY (idUser) REFERENCES compte(idUser) on update cascade on delete cascade
);

