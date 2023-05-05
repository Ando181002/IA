create table Categorie(
    idCategorie serial primary key,
    nomCategorie varchar(100) not null unique
);
insert into Categorie(nomCategorie) values('');
create table Article(
    idArticle serial primary key,
    titre varchar(75) not null,
    resumee text not null,
    contenu text not null,
    idCategorie int not null;
    foreign key(idCategorie) references Categorie(idCategorie)
);

create or replace view v_article as select a.*,nomCategorie from article a join categorie c on a.idCategorie=c.idCategorie;