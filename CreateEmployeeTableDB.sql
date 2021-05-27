CREATE DATABASE employee;
USE employee;

CREATE TABLE employees (
	Employee_Id INT(11) NOT NULL,
	PRIMARY KEY(Employee_Id),
	_Name VARCHAR(30) NOT NULL,
	Middle_Name VARCHAR(2),
	Last_Name VARCHAR(30) NOT NULL,
	Phone_Number INT(10),
	Professional_Email VARCHAR(30) NOT NULL UNIQUE,
	Personal_Email VARCHAR(30) NOT NULL,
	_Address TEXT NOT NULL,
	Job TEXT NOT NULL,
	Pin INT(4) NOT NULL);
