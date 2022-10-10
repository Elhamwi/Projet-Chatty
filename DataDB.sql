/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  10/10/2022 15:00:12                      */
/*==============================================================*/


drop table if exists message;

drop table if exists utilisateur;

/*==============================================================*/
/* Table : MESSAGE                                              */
/*==============================================================*/
create table message
(
   id_message          int not null,
   ipv4                varchar(16) not null,
   message             varchar(150),
   date                date,
   primary key (id_message)
)engine=InnoDB;

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table utilisateur
(
   ipv4                varchar(16) not null,
   login               varchar(30),
   couleur             varchar(50),
   primary key (ipv4)
)engine=InnoDB;

alter table message add constraint FK_CONTIENT foreign key (ipv4)
      references utilisateur (ipv4) on delete restrict on update restrict;

