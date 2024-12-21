DROP DATABASE IF EXISTS db_controller;
CREATE DATABASE IF NOT EXISTS db_controller;
USE db_controller;

CREATE TABLE course
( 
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  course_name CHAR(100) not null,
  category CHAR(15) not null,
  avg_rating FLOAT(6,2),
  enrollment INT,
  price FLOAT(6,2),
  num_lectures INT,
  course_length CHAR(10)
) ENGINE=InnoDB;

INSERT INTO course VALUES(1, 'Complete Salesforce Certified Platform Developer I Course', 'it software',4.5,1052,16.99,63, '12h 2m');
INSERT INTO course VALUES(2, 'Fundamentals of Electrical Controls', 'business',4.6,3688,16.99,45, '3h 55m');
INSERT INTO course VALUES(3, 'Build Native iOS Android and Web Apps with Angular', 'development',4.4,6096,34.99,65, '8h 39m');
INSERT INTO course VALUES(4, 'MTA Networking Fundamentals Exam', 'it software',4.4,1497,21.99,124, '16h 11m');
INSERT INTO course VALUES(5, 'Projects in Machine Learning Beginner To Professional', 'development',4.1,2329,17.99,139, '6h 35m');
INSERT INTO course VALUES(6, 'Microsoft Windows 10 Fundamentals', 'it software',3.5,713,149.99,47, '11h 14m');
INSERT INTO course VALUES(7, 'The Complete Guide of Postman for REST API Testing', 'development',4.7,11522,21.99,73, '11h 25m');
INSERT INTO course VALUES(8, 'Linux Command Line Basics', 'it software',4.1,5508,21.99,65, '3h 8m');
INSERT INTO course VALUES(9, 'Certified Six Sigma Black Belt Training', 'business',4.6,88286,17.99,54, '3h 39m');
INSERT INTO course VALUES(10, 'The Complete Angular Course from Beginner to Advanced', 'development',4.5,28242,16.99,37, '1h 50m');
INSERT INTO course VALUES(11, 'UiPath RPA Level 2', 'design',4.7,7041,16.99,56, '9h 3m');
INSERT INTO course VALUES(12, 'Master Course in Tableau 10 and 2020 for Business Intelligence', 'business',3.7,3161,16.99,45, '6h 36m');

create table users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	full_name VARCHAR(50),	
	username VARCHAR(20),	
	password VARCHAR(250)
) Engine=InnoDB;

-- password is quiz2admin
INSERT INTO users (full_name, username, password) VALUES ('Quiz 2 Admin','quiz2admin','$2y$10$zSLik5ae2N79wd0uJlAT.ORmY6.buukaKBn/3dsTnVI059gr.hgSe');