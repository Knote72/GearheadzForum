<?php
class ThreadDB{
	//retrieves all threads falling under a main topic
	public static function RetrieveTopicThreads($TOPIC){
		$db = Database::getDB();
	}
	
	public static function RetrieveSubTopicThreads($SUBTOPIC){
		$db = Database::getDB();
	}
	
	//Retrieves all threads made by the given user
	public static function RetrieveThreadsByMember($MEMBER){
		$db = Database::getDB();
	}
	
	//deletes the given thread
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