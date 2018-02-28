/*****Create the gearheadz database*****/	

CREATE DATABASE car_forum;
USE car_forum;

CREATE TABLE members (
	memberID INT(5) NOT NULL,
	firstName VARCHAR(20) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	birthDate DATE,
	joinDate NOT NULL,
	PRIMARY KEY (memberID)
)

CREATE TABLE mainTopics (
	mainTopicID INT(2) NOT NULL,
	topicName VARCHAR(20) NOT NULL,
	topicDescription CHAR(100) NOT NULL,
	PRIMARY KEY (mainTopicID)
)

CREATE TABLE subTopics (
	subTopicID INT(3) NOT NULL,
	subTopicName VARCHAR(20) NOT NULL,
	subTopicDescription CHAR(100) NOT NULL,
	mainTopicID INT(3),
	PRIMARY KEY (subTopicID),
	FOREIGN KEY (mainTopicID) REFERENCES mainTopics(mainTopicID)
)

CREATE TABLE threads (
	threadID INT(10) NOT NULL,
	threadName VARCHAR(50) NOT NULL,
	threadPoster INT(5) NOT NULL,
	threadPostDate DATE NOT NULL,
	threadSubTopic INT(3), --can be null since not all threads will fall under a subtopic
	threadTopic INT(3) NOT NULL,
	PRIMARY KEY (threadID),
	FOREIGN KEY (threadPoster) REFERENCES members(memberID),
	FOREIGN KEY (threadTopic) REFERENCES mainTopics(mainTopicID)
)

CREATE TABLE posts (
	postID INT(15) NOT NULL,
	post VARCHAR(5000) NOT NULL,
	postThread INT(10) NOT NULL,
	postingMember INT(5) NOT NULL,
	postDate DATE NOT NULL,
	PRIMARY KEY (postID),
	FOREIGN KEY (postThread) REFERENCES threads(threadID),
	FOREIGN KEY (postingMember) REFERENCES members(memberID)
)