CREATE DATABASE contactus_table;
USE contactus_table;

CREATE TABLE contact_us (
	Client_Id INT(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(Client_Id),
	_Name VARCHAR(30) NOT NULL,
	Middle_Name VARCHAR(2),
	Last_Name VARCHAR(30) NOT NULL,
	Phone_Number INT(10),
	Email VARCHAR(30) NOT NULL UNIQUE,
	Company_Name VARCHAR(30),
	_Address TEXT NOT NULL,
	_Subject TEXT NOT NULL,
	_Description TEXT NOT NULL);
