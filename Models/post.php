<?php
class Post{
	private $postID, $post, $postThread, $postingMember, $postDate;
	
	public function __construct($POSTID, $POST, $POSTTHREAD, $POSTINGMEMBER, $POSTDATE){
		$this->postID = $POSTID;
		$this->post = $POST;
		$this->postThread = $POSTTHREAD;
		$this->postingMember = $POSTINGMEMBER;
		$this->postDate = $POSTDATE;
	}
	
	public function getPostID(){
		return $this->postID;
	}
	
	public function getPost(){
		return $this->post;
	}
	
	public function setPost($VALUE){
		$this->post = $VALUE;
	}
	
	public function getPostThread(){
		return $this->postThread;
	}
	
	public function setPostThread($VALUE){
		$this->postThread = $VALUE;
	}
	
	public function getPostingMember(){
		return $this->postingMember;
	}
	
	public function setPostingMember($VALUE){
		$this->postingMember = $VALUE;
	}
	
	public function getPostDate(){
		return $this->postDate;
	}
	
	public function setPostDate($VALUE){
		$this->postDate = $VALUE;
	}
}
?>