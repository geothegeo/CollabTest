DROP DATABASE IF EXISTS planner_db;
CREATE DATABASE planner_db;
USE planner_db;
GRANT ALL ON planner_db.* TO 'testuser'@'localhost';

CREATE TABLE User (
	user_id MEDIUMINT AUTO_INCREMENT,
	fname VARCHAR(64) NOT NULL,
	lname VARCHAR(64) NOT NULL,
	email VARCHAR(128) NOT NULL,
	passwrd VARCHAR(128) NOT NULL,
	PRIMARY KEY (user_id)
) DEFAULT CHARACTER SET UTF8MB4 Engine=InnoDB;

CREATE TABLE Planner (
	planner_id INT AUTO_INCREMENT,
	planner_name VARCHAR(64) NOT NULL,
	PRIMARY KEY (planner_id)
) DEFAULT CHARACTER SET UTF8MB4 Engine=InnoDB;

CREATE TABLE Plans (
	user_id MEDIUMINT,
	planner_id INT,
	CONSTRAINT plans_user_id_fk FOREIGN KEY (user_id) REFERENCES User(user_id),
	CONSTRAINT plans_planner_id_fk FOREIGN KEY (planner_id) REFERENCES Planner(planner_id)
) DEFAULT CHARACTER SET UTF8MB4 Engine=InnoDB;

CREATE TABLE Event (
	event_id INT AUTO_INCREMENT,
	event_name VARCHAR(64) NOT NULL,
	start_date DATE,
	end_date DATE,
	location VARCHAR(128),
	details VARCHAR(255),
	PRIMARY KEY (event_id)
) DEFAULT CHARACTER SET UTF8MB4 Engine=InnoDB;

CREATE TABLE Contains (
	planner_id INT,
	event_id INT,
	CONSTRAINT contains_planner_id_fk FOREIGN KEY (planner_id) REFERENCES Planner(planner_id),
	CONSTRAINT contains_event_id_fk FOREIGN KEY (event_id) REFERENCES Event(event_id)
) DEFAULT CHARACTER SET UTF8MB4 Engine=InnoDB;	

-------------------------------------------------------------------------

CREATE USER 'testuser'@'localhost' IDENTIFIED WITH mysql_native_password BY 'testpwd'; 
GRANT ALL ON planner_db.* TO 'testuser'@'localhost';

INSERT INTO User (fname, lname, email, passwrd) VALUE
('Example', 'Tester', 'tester@tester.com', 'password1234');