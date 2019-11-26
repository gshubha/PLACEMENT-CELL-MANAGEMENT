CREATE DATABASE placement;
use placement;



CREATE TABLE IF NOT EXISTS student 
(
	rollno VARCHAR(10) NOT NULL primary key,
	name varchar(30) NOT NULL,
	gender VARCHAR(10) NOT NULL,
	dob DATE NOT NULL,
	pob VARCHAR(30) NOT NULL,
	stname VARCHAR(20) NOT NULL,
	fathername VARCHAR(30) NOT NULL,
	mothername VARCHAR(30) NOT NULL,
	mobileno VARCHAR(11) NOT NULL,
	batch YEAR NOT NULL,
	email VARCHAR(20) NOT NULL,
	password VARCHAR(20) NOT NULL,
	cpi FLOAT NOT NULL,
	cursem SMALLINT NOT NULL,
	UNIQUE KEY (email)
);

--
-- dumping data into student
--

INSERT INTO student 
VALUES ("2018229", "Shikhar Gupta","Male",'2001-04-17',"Hardoi","Uttar Pradesh"," xyz","abc","7876443788",'2018',"2018229@iiitdmj.ac.in","shikhar",6.4,3),
("2018237", "Shubham Gupta","Male",'2000-02-22',"Banaras","Uttar Pradesh"," xyz","abc","7876443788",'2018',"2018237@iiitdmj.ac.in","shubham",6.9,3),
("2018104", "Harshit Kapoor","Male",'2000-10-29',"Banaras","Uttar Pradesh"," xyz","abc","7876443788",'2018',"2018104@iiitdmj.ac.in","harshit",6.6,3);

--
-- Table structure for table company
--

CREATE TABLE IF NOT EXISTS company
(
	cid VARCHAR(10) NOT NULL primary key,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(10) NOT NULL,
	mobileno VARCHAR(10) NOT NULL,
	hr VARCHAR(20) NOT NULL,
	UNIQUE KEY(email)
);



CREATE TABLE IF NOT EXISTS administrator
(
	usrid VARCHAR(10) NOT NULL primary key,
	name VARCHAR(30) NOT NULL,
	position VARCHAR(20) NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(10) NOT NULL,
	mobileno VARCHAR(10) NOT NULL,
	UNIQUE KEY(email)
);



INSERT INTO administrator
VALUES ("2018229","Shikhar Gupta","Student","2018229@iiitdmj.ac.in","shikhar","7876443788"),
("2018229","Shubham Gupta","Student","2018237@iiitdmj.ac.in","shubham","7876443788"),
("2018104","Harshit Kapoor","Student","2018104@iiitdmj.ac.in","harshit","7876443788");




CREATE TABLE IF NOT EXISTS login
(
	id VARCHAR(10) NOT NULL primary key,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(10) NOT NULL,
	position VARCHAR(10) NOT NULL,
	UNIQUE KEY(email)
);


INSERT INTO login
VALUES ("2018229","2018229@iiitdmj.ac.in","shikhar","Student"),
("2018237","2018237@iiitdmj.ac.in","shubham","Student"),
("2018104","2018104@iiitdmj.ac.in","harshit","Student");



CREATE TABLE IF NOT EXISTS manages
(
	usrid VARCHAR(10) NOT NULL,
	cid VARCHAR(10) NOT NULL,
	cdate DATE NOT NULL,
	venue VARCHAR(20) NOT NULL,
	ctype VARCHAR(20) NOT NULL,
	FOREIGN KEY(usrid) references administrator(usrid),
	FOREIGN KEY(cid) references company(cid)
);



CREATE TABLE IF NOT EXISTS training
(
	rollno VARCHAR(10) NOT NULL,
	ptype varchar(20) NOT NULL,
	score int not null,
	PRIMARY KEY (rollno,ptype)
);

create view studetail AS
select name,gender,mobileno,email,dob,cursem
from student;


create view intostud AS select name,rollno,password,email from student;