create database padron;

use padron;

create table "persona"(
    "id" int(11) not null auto_increment,
    "nombre" varchar(100) not null,
    "apellido" varchar(100) not null,
    "dni" int(8) not null,
    "fec_nac" date not null,
    "colegio_id" int(11) not null,
    primary key ("id"),
);

create table "colegio"(
    "id" int(11) not null auto_increment,
    "nombre" varchar(100) not null,
    "direccion" varchar(100) not null,
    "numero" int(11) not null,
    primary key ("id"),
);