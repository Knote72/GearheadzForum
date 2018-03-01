<?php
//class subtopic is declared below, it inherits from maintopic so it cuts down on files to use it on the same sketch
class MainTopic{
	private $topicID, $name, $description;
	
	public function __construct($TOPICID, $NAME, $DESCRIPTION){
		$this->topicID = $TOPICID;
		$this->name = $NAME;
		$this->description = $DESCRIPTION;
	}
	
	public function getTopicID()
    {
        return $this->topicID;
    }
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($VALUE){
		$this->name = $VALUE;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($VALUE){
		$this->description = $VALUE;
	}
}

class SubTopic extends MainTopic{
	
}
?>