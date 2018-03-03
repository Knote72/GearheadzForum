<?php
class PostDB{
	//shows all posts for the given thread
	public static function RetrieveThreadPosts($THREAD){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM posts
					WHERE postThread = :threadID';

        $statement = $db->prepare($query);
        $statement->bindValue(":threadID", $THREAD->getThreadID());
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$posts = array();
			foreach($rows as $row){
				$post = new Post(
                                     $row['postID'],
                                     $row['post'],
									 $row['postThread'],
									 $row['postingMember'],
									 $row['postDate']);
				array_push($posts, $post);
			}
            
            return $posts;
        } else {
            return null;
        }
	}
	
	public static function RetrievePostsByMember($MEMBER){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM posts
					WHERE postingMember = :memberID';

        $statement = $db->prepare($query);
        $statement->bindValue(":memberID", $MEMBER->getMemberID());
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if ($rows != false) {
			$posts = array();
			foreach($rows as $row){
				$post = new Post(
                                     $row['postID'],
                                     $row['post'],
									 $row['postThread'],
									 $row['postingMember'],
									 $row['postDate']);
				array_push($posts, $post);
			}
            
            return $posts;
        } else {
            return null;
        }
	}
}
?>