<?php
class SubTopicDB{
	//finds subtopics under the given topic
	public static function RetrieveSubTopics($TOPIC){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM subTopics
					WHERE mainTopicID = :topicID';

        $statement = $db->prepare($query);
        $statement->bindValue(":topicID", $TOPIC->getTopicID());
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        if ($row != false) {
            $topic = new MainTopic(
                                     $row['topicID'],
                                     $row['topicName'],
									 $row['topicDescription']);
            return $topic;
        } else {
            return null;
        }
	}
}
?>