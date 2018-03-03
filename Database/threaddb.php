<?php
class ThreadDB{
	//retrieves all threads falling under a main topic
	public static function RetrieveTopicThreads($TOPIC){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM threads
					WHERE threadTopic = :topicID';

        $statement = $db->prepare($query);
        $statement->bindValue(":topicID", $TOPIC->getTopicID());
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$threads = array();
			foreach($rows as $row){
				$thread = new Thread(
                                     $row['threadID'],
                                     $row['threadName'],
									 $row['threadPoster'],
									 $row['threadPostDate'],
									 $row['threadSubTopic'],
									 $row['threadTopic']);
				array_push($threads, $thread);
			}
            
            return $threads;
        } else {
            return null;
        }
	}
	
	public static function RetrieveSubTopicThreads($SUBTOPIC){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM threads
					WHERE threadSubTopic = :subTopicID';

        $statement = $db->prepare($query);
        $statement->bindValue(":subTopicID", $SUBTOPIC->getTopicID());
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$threads = array();
			foreach($rows as $row){
				$thread = new Thread(
                                     $row['threadID'],
                                     $row['threadName'],
									 $row['threadPoster'],
									 $row['threadPostDate'],
									 $row['threadSubTopic'],
									 $row['threadTopic']);
				array_push($threads, $thread);
			}
            
            return $threads;
        } else {
            return null;
        }
	}
	
	//Retrieves all threads made by the given user
	public static function RetrieveThreadsByMember($MEMBER){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM threads
					WHERE threadPoster = :memberID';

        $statement = $db->prepare($query);
        $statement->bindValue(":memberID", $MEMBER->getMemberID());
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$threads = array();
			foreach($rows as $row){
				$thread = new Thread(
                                     $row['threadID'],
                                     $row['threadName'],
									 $row['threadPoster'],
									 $row['threadPostDate'],
									 $row['threadSubTopic'],
									 $row['threadTopic']);
				array_push($threads, $thread);
			}
            
            return $threads;
        } else {
            return null;
        }
	}
	
	//deletes the given thread (only needs threadID)
	public static function DeleteThread($THREAD){
		$db = Database::getDB();
        $threadID = $THREAD->getThreadID();

        $query = 'DELETE FROM threads
		          WHERE threads.threadID = :threadid';

        $statement = $db->prepare($query);
        $statement->bindValue(":threadid", $threadID);
        $statement->execute();
        $statement->closeCursor();
	}
}
?>