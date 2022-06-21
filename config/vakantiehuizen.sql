drop database if exists vakantiehuizen;
create database if not exists vakantiehuizen;

use vakantiehuizen;

CREATE TABLE teksten( 
id int auto_increment,
pagina text,
titel text,
tekst text,
primary key(id)
);

CREATE TABLE huizen(
id int auto_increment,
huis varchar(10),
personen int,
omschrijving text,
prijs float,
primary key(id)
);

CREATE TABLE afbeeldingen (
id int auto_increment,
huis_id int,
afbeelding text,
primary key(id),
foreign key(huis_id) references huizen (id)
);

CREATE TABLE contact (
id int auto_increment,
naam text,
betreft text,
email text,
bericht text,
primary key(id)
);

CREATE TABLE inlog (
id int auto_increment,
username varchar(15) unique,
wachtwoord text,
primary key(id)
);



--  values voor de teksten
INSERT INTO `vakantiehuizen`.`teksten` (`pagina`, `titel`, `tekst`) VALUES ('home', 'home', 'welkom op onze site.');
INSERT INTO `vakantiehuizen`.`teksten` (`pagina`, `titel`, `tekst`) VALUES ('vakantiehuizen', 'vakantie huizen', 'dit zijn alle vakantie huizen die we op dit moment beschikbaar hebben.');
INSERT INTO `vakantiehuizen`.`teksten` (`pagina`, `titel`, `tekst`) VALUES ('contact', 'contact pagina', 'bedankt dat u contact wilt opnemen met ons. wij hopen zo snel mogelijk contact met u op te nemen.');

--  omschrijving/values van de vakantiehuizen
INSERT INTO `vakantiehuizen`.`huizen` (`id`, `huis`, `personen`, `omschrijving`, `prijs`) VALUES (NULL, 'ZandKreek', '8', 'dit is een mooi huisje', '95.00');
INSERT INTO `vakantiehuizen`.`huizen` (`id`, `huis`, `personen`, `omschrijving`, `prijs`) VALUES (NULL, 'Oosterschelde', '12', 'mooi huisie voor 12 personen', '120.00');
INSERT INTO `vakantiehuizen`.`huizen` (`id`, `huis`, `personen`, `omschrijving`, `prijs`) VALUES (NULL, 'Grevelingen', '10', '10 personen voor dit mooie huisje', '110.95');
INSERT INTO `vakantiehuizen`.`huizen` (`id`, `huis`, `personen`, `omschrijving`, `prijs`) VALUES (NULL, 'Westerschelde', '16', 'dit is het perfecte huisje voor een feestje', '135.95');

--  afbleedingen db
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('1', 'huis1.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('1', 'huis2.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('1', 'huis3.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('2', 'huis4.png');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('2', 'huis5.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('2', 'huis6.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('3', 'huis7.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('3', 'huis8.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('3', 'huis9.png');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('4', 'huis10.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('4', 'huis11.jpg');
INSERT INTO `vakantiehuizen`.`afbeeldingen` (`huis_id`, `afbeelding`) VALUES ('4', 'huis12.jpg');

-- inlog
INSERT INTO `vakantiehuizen`.`inlog` (`username`, `wachtwoord`) VALUES ('cees', '$2y$10$emsUKs2/s.DkWfcz8wEG7enudZUOi5e9c3f6mch/1nKN1Z4eg4LvO');

