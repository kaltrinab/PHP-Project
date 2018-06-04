drop database if exists projektiPHP;
create database if not exists projektiPHP;
use projektiPHP; 
create table Staff
(
	ID integer primary key auto_increment,
	Emri varchar (45) not null,
    Mbiemri varchar (45) not null,
    Pozita varchar(45) not null
    
);




create table Reservations
(
	ID integer primary key auto_increment,
    Username varchar(10) not null,
    Emri varchar (45) not null,
    Mbiemri varchar (45) not null,
    Email varchar(45) not null,
	Phonenumber varchar(10) not null,
    Country varchar(45) not null,
    Arrivaldate date not null,
    Untildate date not null,
    Adults integer not null,
    Children integer not null,
    Roomtype varchar (45) not null,
    Meals varchar (45) not null,
    Balcony varchar (45) not null,
    Questions varchar(100)
    
    );





insert into Staff (Emri, Mbiemri,Pozita) values ("Jeta", "Belegu", "Recepsionist");
insert into Staff (Emri, Mbiemri,Pozita) values ("Hana", "Hasku", "Menaxhere");
insert into Staff (Emri, Mbiemri,Pozita) values ( "Jeton", "Belegu", "Pastrues");
insert into Staff (Emri, Mbiemri,Pozita) values ("Vlora", "Krasniqi", "Sigurim");
select * from Staff;

insert into Reservations (Username,Emri ,Mbiemri ,Email ,Phonenumber ,Country,Arrivaldate, Untildate, Adults, Children, Roomtype, Meals, Balcony, Questions) values ("Rreza","Rreze", "Belegu", "rrezebelegu@gmail.com","044444888","Kosovo","2018-01-01","2018-01-02",1,0,"Suit",'YES','NO',NULL);
insert into Reservations (Username,Emri ,Mbiemri ,Email ,Phonenumber ,Country,Arrivaldate, Untildate, Adults, Children, Roomtype, Meals, Balcony, Questions) values ("Loli","Lola", "Ismajli", "rrezebelegu@gmail.com","044444888","Kosovo","2018-01-01","2018-01-02",1,0,"Suit",'YES','NO',NULL);


select * from Reservations;

