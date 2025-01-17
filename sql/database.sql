 create table jobseeker(fullname varchar(50),mail varchar(255) primary key,gender varchar(20),phone_no varchar(15),qualification varchar(255),year_of_experience int(50),skills varchar(255));

 create table employer(company_name varchar(500) NOT NULL, mail varchar(255) primary key,phone_no varchar(15) NOT NULL,vacant_postname varchar(255) NOT NULL,address varchar(255) NOT NULL,other_details varchar(255) NOT NULL);

 create table user(Mail varchar(50) primary key, Password varchar(255));

 create table contact(name varchar(50), email varchar(255) primary key, message varchar(255));

 create table feedback(name varchar(50), email varchar(255) primary key, feedback varchar(255));