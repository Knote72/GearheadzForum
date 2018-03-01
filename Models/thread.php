<?php
class Thread{
	private $threadID, $name, $postingMember, $postDate, $subTopic, $topic;
	
	public function __construct($THREADID, $NAME, $POSTINGMEMBER, $POSTDATE, $SUBTOPIC, $TOPIC){
		$this->threadID = $THREADID;
		$this->name = $NAME;
		$this->postingMember = $POSTINGMEMBER;
		$this->postDate = $POSTDATE;
		$this->subTopic = $SUBTOPIC;
		$this->topic = $TOPIC;
	}
	
	public function getThreadID()
    {
        return $this->threadID;
    }
	
	public function getName(){
		
	}
	
	public function setName(){
		
	}
	
	public function getPostingMember(){
		
	}
	
	public function setPostingMember(){
		
	}
	
	public function getPostDate(){
		
	}
	
	public function setPostDate(){
		
	}
	
	public function getTopic(){
		
	}
	
	public function setTopic(){
		
	}
	
	public function getSubTopic(){
		
	}
	
	public function setSubTopic(){
		
	}
}
?>