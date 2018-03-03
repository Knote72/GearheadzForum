<?php
class TopicDB{
	//retrieves all main topics for the main forum tree
	public static function RetrieveTopics(){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM mainTopics';

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$topics = array();
			foreach($rows as $row){
				$topic = new MainTopic(
                                     $row['topicID'],
                                     $row['topicName'],
									 $row['topicDescription']);
				array_push($topics, $topic);
			}
            
            return $topics;
        } else {
            return null;
        }
	}
}
?>