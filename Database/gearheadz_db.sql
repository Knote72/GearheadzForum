/*****Create the gearheadz database*****/	

DROP DATABASE IF EXISTS car_forum;

CREATE DATABASE car_forum;
USE car_forum;

DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS threads;
DROP TABLE IF EXISTS subTopics;
DROP TABLE IF EXISTS mainTopics;
DROP TABLE IF EXISTS members;

CREATE TABLE members (
	memberID INT(5) NOT NULL AUTO_INCREMENT,
	user_name CHAR(16) NOT NULL UNIQUE,
	mbr_password CHAR(16) NOT NULL,
	email CHAR(75) NOT NULL,
	isAdmin BOOLEAN NOT NULL,
	firstName VARCHAR(20) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	birthDate DATE,
	joinDate DATE NOT NULL,
	PRIMARY KEY (memberID)
);

CREATE TABLE mainTopics (
	topicID INT(2) NOT NULL AUTO_INCREMENT,
	topicName VARCHAR(20) NOT NULL,
	topicDescription CHAR(200) NOT NULL,
	PRIMARY KEY (topicID)
);

CREATE TABLE subTopics (
	subTopicID INT(3) NOT NULL AUTO_INCREMENT,
	subTopicName VARCHAR(50) NOT NULL,
	subTopicDescription CHAR(200) NOT NULL,
	mainTopicID INT(2),
	PRIMARY KEY (subTopicID),
	FOREIGN KEY (mainTopicID) REFERENCES mainTopics(topicID)
);

CREATE TABLE threads (
	threadID INT(10) NOT NULL AUTO_INCREMENT,
	threadName VARCHAR(50) NOT NULL,
	threadPoster INT(5) NOT NULL,
	threadPostDate DATE NOT NULL,
	threadSubTopic INT(3),
	threadTopic INT(2) NOT NULL,
	PRIMARY KEY (threadID),
	FOREIGN KEY (threadPoster) REFERENCES members(memberID),
	FOREIGN KEY (threadTopic) REFERENCES mainTopics(topicID)
);
CREATE INDEX thread_search ON threads (threadName);

CREATE TABLE posts (
	postID INT(15) NOT NULL AUTO_INCREMENT,
	post VARCHAR(5000) NOT NULL,
	postThread INT(10) NOT NULL,
	postingMember INT(5) NOT NULL,
	postDate DATE NOT NULL,
	PRIMARY KEY (postID),
	FOREIGN KEY (postThread) REFERENCES threads(threadID),
	FOREIGN KEY (postingMember) REFERENCES members(memberID)
);