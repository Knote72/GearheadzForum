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
	username CHAR(16) NOT NULL,
	password CHAR(16) NOT NULL,
	email CHAR(75) NOT NULL,
	isAdmin BOOLEAN NOT NULL,
	firstName VARCHAR(20) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	birthDate DATE,
	joinDate NOT NULL,
	PRIMARY KEY (memberID),
	CREATE INDEX username_search ON members (username CHAR(16))
)

CREATE TABLE mainTopics (
	mainTopicID INT(2) NOT NULL AUTO_INCREMENT,
	topicName VARCHAR(20) NOT NULL,
	topicDescription CHAR(200) NOT NULL,
	PRIMARY KEY (mainTopicID)
)

CREATE TABLE subTopics (
	subTopicID INT(3) NOT NULL AUTO_INCREMENT,
	subTopicName VARCHAR(20) NOT NULL,
	subTopicDescription CHAR(200) NOT NULL,
	mainTopicID INT(3),
	PRIMARY KEY (subTopicID),
	FOREIGN KEY (mainTopicID) REFERENCES mainTopics(mainTopicID)
)

CREATE TABLE threads (
	threadID INT(10) NOT NULL AUTO_INCREMENT,
	threadName VARCHAR(50) NOT NULL,
	threadPoster INT(5) NOT NULL,
	threadPostDate DATE NOT NULL,
	threadSubTopic INT(3), --can be null since not all threads will fall under a subtopic
	threadTopic INT(3) NOT NULL,
	PRIMARY KEY (threadID),
	FOREIGN KEY (threadPoster) REFERENCES members(memberID),
	FOREIGN KEY (threadTopic) REFERENCES mainTopics(mainTopicID),
	CREATE INDEX thread_search ON threads (threadName VARCHAR(50))
)

CREATE TABLE posts (
	postID INT(15) NOT NULL AUTO_INCREMENT,
	post VARCHAR(5000) NOT NULL,
	postThread INT(10) NOT NULL,
	postingMember INT(5) NOT NULL,
	postDate DATE NOT NULL,
	PRIMARY KEY (postID),
	FOREIGN KEY (postThread) REFERENCES threads(threadID),
	FOREIGN KEY (postingMember) REFERENCES members(memberID)
)

--Admin and test user insert
INSERT INTO members() 
	VALUES();