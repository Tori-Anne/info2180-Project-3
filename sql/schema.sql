DROP DATABASE IF job_board;
CREATE DATABASE job_board ;
USE job_board ;


DROP TABLE IF EXISTS 'Users';
CREATE TABLE 'Users' (
  'id' int(11) NOT NULL auto_increment,
  'firstName' varchar(35) ,
  'lastName' varchar(35) NOT NULL default '',
  'password' varchar(30) NOT NULL default '',
  'telephone' int(10) NOT NULL default '0',
  'email' varchar(30),
  'date_joined'date,
  PRIMARY KEY  ('id')
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS 'Jobs';
CREATE TABLE 'Jobs' (
  'id' int(11) NOT NULL auto_increment,
  'job_title' char(35) NOT NULL default '',
  'job_description' char(3) NOT NULL default '',
  'category' char(20) NOT NULL default '',
  'company_name' char(20),
  'company_location' char(50),
  'date_posted' date,
  PRIMARY KEY  ('id')
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS 'Jobs_Applied_for';
CREATE TABLE 'Jobs_Applied_for' (
  'id' int(11) NOT NULL auto_increment,
  'job_id' int NOT NULL,
  'user_id'int NOT NULL,
  'date_applied' date,
  PRIMARY KEY  ('id'),
  FOREIGN KEY (job_id) REFERENCES Jobs(id),
  FOREIGN KEY (user_id) REFERENCES Users(id)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8;


INSERT INTO 'Users' ('email', 'password') VALUES ('admin@hireme.com', MD5('password123'));
