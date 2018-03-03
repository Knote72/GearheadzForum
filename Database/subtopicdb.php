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
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$subTopics = array();
			foreach($rows as $row){
				$subTopic = new SubTopic(
                                     $row['subTopicID'],
                                     $row['subTopicName'],
									 $row['subTopicDescription'],
									 $row['mainTopicID']);
				array_push($subTopics, $subTopic);
			}
            
            return $subTopics;
        } else {
            return null;
        }
	}
}
?>