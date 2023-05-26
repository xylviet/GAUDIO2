create database gaudio2;
use gaudio2;

create table music (
    id int(11) primary key auto_increment,
    name varchar(50) not null,
    image text not null,
    song text not null );

insert into music (name, image, song) values
( "Asamaralibrasi", "asmaralibrasi.jpg", "asmaralibrasi.mp3"),
( "Yoasobi Idol", "yoasobi-idol.jpg", "yoasobi-idol.mp3");


-- Login

create table admin(
		id int auto_increment primary key,
		username varchar(100) not null,
		password text not null
);

insert into admin values
(null,'Admin',md5('admin')),
(null,'Ghazy',md5('ghazy'));
