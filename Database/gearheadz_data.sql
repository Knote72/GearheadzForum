/*------Gearheadz Forum Setup---------*/

USE car_forum;

/*System, Admin and test user insert*/
INSERT INTO members(user_name, mbr_password, email, isAdmin, firstName, lastName, birthDate, joinDate) 
	VALUES('System', 'System1!', 'system@test.com', true, 'NULL', 'NULL', NULL, NOW());
INSERT INTO members(user_name, mbr_password, email, isAdmin, firstName, lastName, birthDate, joinDate) 
	VALUES('Admin', 'Admin1!', 'admin@test.com', true, 'NULL', 'NULL', NULL, NOW());
INSERT INTO members(user_name, mbr_password, email, isAdmin, firstName, lastName, birthDate, joinDate) 
	VALUES('Test_User', 'Testing1!', 'tester@test.com', false, 'NULL', 'NULL', NOW(), NOW());
	
INSERT INTO mainTopics(topicName, topicDescription) 
	VALUES('General Discussion', 'A place to post anything that doesn''t fall under any other category');
INSERT INTO mainTopics(topicName, topicDescription) 
	VALUES('Off-Topic', 'Non-car related chat. Life, news, politics, etc');
INSERT INTO mainTopics(topicName, topicDescription) 
	VALUES('Technical Discussion', 'How-To''s and similar chat goes here');
INSERT INTO mainTopics(topicName, topicDescription) 
	VALUES('Regional Chat', 'Come here to reach out to people in your area');
INSERT INTO mainTopics(topicName, topicDescription) 
	VALUES('Classifieds', 'Buy? Sell? Trade?? That stuff goes here!');
	
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('New Members Area', 'Threads addressing new members go here', 1);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Forum Help & FAQ', 'Questions regarding usage of the site and site rules go here!', 1);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Shops, Garages & Tools', 'Sharing with other the setup you have? Asking for help with building or expanding yours?', 1);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Lost and Found', 'Is your ride missing or STOLEN!? Post that info here and get the word out to everyone!', 1);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Engines', 'Engine designs, optimal setups, etc', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Heating, Cooling & AC', 'Radiators, cooling fans, heaters cores, air conditioning, etc', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Electrical and Ignition', 'Whether be a spark for the ignition or power to accessories, everything that uses power will be discussed here', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Transmission & Drivetrain', 'Transmissions, driveshafts, axles, transfer cases, and the like', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Exhaust Systems', 'Talk for exhaust manifolds, headers, pipes, catalytic converters, and mufflers', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Suspension, Steering & Chassis', 'Everything related to controlling your car''s ride and direction', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Brakes', 'If it stops your car, it goes here', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Fuel Delivery', 'Carburetor, EFI, fuel tank, fuel lines, etc', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Body and Trim', 'Talk about laying exterior trim pieces, bodywork, and all else exterior related', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Wheels and Tires', 'Wheel and Tire discussion here', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Forced Induction', 'If it makes BAR pressure beyond natural aspiration, it belongs here', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Interiors', 'Seats, dash, headliner, floorboard covering, interior trim, etc', 3);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Pac-Northwest', 'Alaska, Washington, Oregon, and Idaho specific', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('West Coast', 'Pacific coastline states', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Southwest', 'Arizona, Utah, Nevada, New Mexico, West Texas', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Rockies States', 'Montana, Wyoming, Colorado', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Midwest', 'From Colorado to Kentucky, Minnesota to Arkansas', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Southeast', 'Gulf states, East Texas, and nearby states', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Northeast', 'Pennsylvania and northeasterly states', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('East Coast', 'Atlantic coastline and nearby states', 4);
INSERT INTO subTopics(subTopicName, subTopicDescription, mainTopicID) 
	VALUES('Canada', 'All friendly neighbors in the north', 4);
	
INSERT INTO threads(threadName, threadPoster, threadPostDate, threadSubTopic, threadTopic) 
	VALUES('Introduce Yourself', 1, NOW(), 1, 1);
INSERT INTO posts(post, postThread, postingMember, postDate) 
	VALUES('This is a thread for each forum member to introduce themselves. Don''t be shy! Tell us a bit about yourself!', 1, 1, NOW());
	
INSERT INTO threads(threadName, threadPoster, threadPostDate, threadSubTopic, threadTopic) 
	VALUES('Show Your Workspace', 1, NOW(), 3, 1);
INSERT INTO posts(post, postThread, postingMember, postDate) 
	VALUES('It doesn''t matter if you have a big fancy shop or a single car garage, show everyone where the magic happens!', 2, 1, NOW());
	
INSERT INTO threads(threadName, threadPoster, threadPostDate, threadTopic) 
	VALUES('Post Your Random Thought', 1, NOW(), 2);
INSERT INTO posts(post, postThread, postingMember, postDate) 
	VALUES('What''s going through your noodle right now?', 3, 1, NOW());