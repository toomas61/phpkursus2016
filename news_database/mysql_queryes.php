<?php exit('Disabled'); ?>

CREATE USER 'kursus1102'@'localhost' IDENTIFIED BY 'EmMoKkNv12345';

GRANT ALL PRIVILEGES ON * . * TO 'kursus1102'@'localhost' IDENTIFIED BY 'EmMoKkNv12345' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

CREATE DATABASE IF NOT EXISTS `kursus1102` ;

GRANT ALL PRIVILEGES ON `kursus1102` . * TO 'kursus1102'@'localhost';

FLUSH PRIVILEGES;

CREATE TABLE `kursus1102`.`news` (
`id_news` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`caption` VARCHAR( 255 ) NOT NULL ,
`body` TEXT NOT NULL ,
`category` VARCHAR( 22 ) NOT NULL ,
`keywords` VARCHAR( 255 ) NOT NULL ,
`status` CHAR( 1 ) NOT NULL ,
`important` CHAR( 1 ) NOT NULL ,
`date_insert` DATETIME NOT NULL ,
`date_change` DATETIME NOT NULL
) ENGINE = MYISAM COMMENT = 'here are stored news';

INSERT INTO `kursus1102`.`news` (
`id_news` ,
`caption` ,
`body` ,
`category` ,
`keywords` ,
`status` ,
`important` ,
`date_insert` ,
`date_change`
)
VALUES (
NULL , 'Sait avatud', 'Teretulemast, avasime saidi. T�na k�ik -0,5%.', 'IT', 'avamine, allahindlus', '1', '', NOW( ) , NOW( )
);

INSERT INTO news
SET caption = 'N�lg ajas rebase puu otsa pekki s��ma',
body = 'Albu p�hikooli �petajal Anneli Trummeril �nnestus teha fotoseeria rebasest, kes ronis hoovis �unapuu otsa ja s�i seal lindudele pandud peki. REKLAAM Trummer imestas, et isegi kassil pole �nnestunud puu otsast pekki k�tte saada, kuid rebane oli nii osav, et lutsutas �he lindude rasvapalli t�hjaks ja pistis nahka ka puu otsas rippunud pekit�ki. Puu otsast toidukraami k�ttesaamiseks kulus rebasel paark�mmend minutit. Trummer selgitas, et rebane oli ilus ja julge. �Pildistasin teda k��gi aknast ja vahepeal vaatasime kohe t�tt, kuid ta ei teinud minust v�ljagi,� s�nas ta. (JT) http://www.jt.ee/?id=396877',
category = 'Bioloogia',
keywords = 'rebane',
STATUS = '1',
important = '1',
date_insert = NOW( ) 