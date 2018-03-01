<?php
class PostDB{
	//shows all posts for the given thread
	public static function RetrieveThreadPosts($THREAD){
		$db = Database::getDB();
	}
	
	public static function RetrievePostsByMember($MEMBER){
		$db = Database::getDB();
	}
}
?>