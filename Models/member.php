<?php
class Member{
	protected $memberID, $username, $password, $email, $isAdmin, $firstName, $lastName, $birthDate, $joinDate;
	
	public function __construct($USERNAME, $PASSWORD, $EMAIL, $ISADMIN, $FIRSTNAME, $LASTNAME, $BIRTHDATE, $JOINDATE, $MEMBERID = null){
		$this->memberID = $MEMBERID;
		$this->username = $USERNAME;
		$this->password = $PASSWORD;
		$this->email = $EMAIL;
		$this->isAdmin = $ISADMIN;
		$this->firstName = $FIRSTNAME;
		$this->lastName = $LASTNAME;
		$this->birthDate = $BIRTHDATE;
		$this->joinDate = $JOINDATE;
	}
	
	public function getMemberID(){
		return $this->memberID;
	}
	
	public function getFirstName()
    {
        return $this->firstName;
    }
	
	public function setFirstName($VALUE)
    {
        $this->firstName = $VALUE;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($VALUE)
    {
        $this->lastName = $VALUE;
    }
	
	public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($VALUE)
    {
        $this->password = $VALUE;
    }
	
	public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($VALUE)
    {
        $this->email = $VALUE;
    }
	
	public function getUsername(){
		return $this->username;
	}
	
	public function setUsername($VALUE){
		$this->username = $VALUE
	}
	
	public function getIsAdmin(){
		return $this->isAdmin;
	}
	
	public function setIsAdmin($VALUE){
		$this->isAdmin = $VALUE;
	}
	
	public function getBirthDate(){
		return $this->birthDate;
	}
	
	public function setBirthDate($VALUE){
		$this->birthDate = $VALUE;
	}
	
	public function getJoinDate(){
		return $this->joinDate;
	}
	
	public function setJoinDate($VALUE){
		$this->joinDate = $VALUE;
	}
	
	public static function login($EMAIL, $PASSWORD, $ISADMIN){
		//fill in with db and controller functions to handle logins
	}
	
	public function getImageFilename() {
        $user_hash = md5($this->getUsername());
		$image_filename = $user_hash . '.png';
        return $image_filename;
    }

    public function getImagePath() {
        $image_path = '../UserFiles/ProfilePics/' . $this->getImageFilename();
        return $image_path;
    }
}
?>