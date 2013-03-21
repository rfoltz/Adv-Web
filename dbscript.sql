CREATE DATABASE robertfo_advweb;

CREATE TABLE robertfo_advweb.users
(
UserId INT NOT NULL AUTO_INCREMENT,
Username VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL, 
AdminUser CHAR(1) DEFAULT 'N',
PRIMARY KEY (UserId)
);

CREATE TABLE robertfo_advweb.contacts
(
ContactId INT NOT NULL AUTO_INCREMENT,
ContactName VARCHAR(60) NOT NULL, 
PhoneNum VARCHAR(10) NOT NULL, 
Address VARCHAR(200) NOT NULL,
PRIMARY KEY (ContactId)
);


INSERT INTO robertfo_advweb.users (Username, Password, AdminUser)
VALUES ('admin','admin01','Y'),
('robert','robert01','Y'),
('tom','tom01','N');

INSERT INTO robertfo_advweb.contacts (ContactName, PhoneNum, Address)
VALUES ('Robert Harris','17050007894','One Georgian Drive Barrie, ON L4M 3X9'),
('Kyle Bran','17050007894','One Georgian Drive Barrie, ON L4M 3X9'),
('Kaitlyn Rush','17050007894','One Georgian Drive Barrie, ON L4M 3X9'),
('Mikhaela Brown','17050007894','One Georgian Drive Barrie, ON L4M 3X9'),
('Brandon Sanderson','17050007894','One Georgian Drive Barrie, ON L4M 3X9');