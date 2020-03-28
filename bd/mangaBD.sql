DROP DATABASE IF EXISTS VentaMangas;
CREATE DATABASE VentaMangas;
USE VentaMangas;

CREATE TABLE Mangas(
	MangaID int AUTO_INCREMENT,
	Nombre varchar(50),
	Autor varchar(50),
	Tomo varchar(20),
	Precio float,
	Imagen VARCHAR(600),
	PRIMARY KEY(MangaID)
);

INSERT INTO Mangas VALUES
("","Kimetsu No Yaiba","Koyoharu Gotōge","18",385,"img/kny18.jpg"),
("","Kimetsu No Yaiba","Koyoharu Gotōge","1",385,"img/kny1.jpg"),
("","Fairy Tail","Hiro Mashima","4",385,"img/fairytail.jpg"),
("","One Punch Man","One","21",385,"img/opm21.jpg"),
("","Boku No Hero Academia","Kōhei Horikoshi","18",385,"img/myhero18.jpg"),
("","Shingeki No Kyojin","Hajime Isayama","30",385,"img/snk30.jpg"),
("","Shingeki No Kyojin","Hajime Isayama","29",385,"img/snk29.jpg"),
("","Shingeki No Kyojin","Hajime Isayama","28",385,"img/snk28.jpg"),
("","Shingeki No Kyojin","Hajime Isayama","27",385,"img/snk27.jpg"),
("","Go-toubun No Hanayome","Negi Haruba","12",385,"img/gnh12.jpg"),
("","Tokyo Ghoul","Sui Ishida","1",385,"img/tokyoghoul1.jpg"),
("","Jojos","Hirohiko Araki","2",385,"img/jojos2.jpg");

CREATE TABLE Cuentas(
	CuentaID int AUTO_INCREMENT,
	usuario varchar(50),
	contrasenia varchar(50),
	dni int,
	email varchar(80),
	intentos int,
	codigo_recu varchar(10),
	tiempo datetime,
	primary key(CuentaID)
);

INSERT INTO Cuentas VALUES
("","admin","admin",12345678,"admin@gmail.com",0,null,null),
("","fernando","123",23456789,"fernando@hotmail.com",0,null,null);


