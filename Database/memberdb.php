<?php
class MemberDB{
	//adds a new member to the database
	public static function AddMember($MEMBER){
		$db = Database::getDB();

        $visitID = $TASK->getVisitID();
        $courseNumber = $TASK->getCourseNumber();
        $startTime = $TASK->getStartTime();

        $query = 'INSERT INTO task
              (VisitId, Coursenumber, StartTime)
              VALUES
              ( :visitid, :coursenumber,:starttime)';

        $statement = $db->prepare($query);
        $statement->bindValue(':visitid', $visitID);
        $statement->bindValue(':coursenumber', $courseNumber);
        $statement->bindValue(':starttime', $startTime);
        $statement->execute();
        $statement->closeCursor();
	}
	
	//shows all forum members (except system, initial admin, and test user)
	public static function RetrieveAllMembers(){
		
	}
	
	//searches for a member with the given username
	public static function UsernameSearch($USERNAME){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM members
					WHERE members.user_name = :username';

        $statement = $db->prepare($query);
        $statement->bindValue(":username", $USERNAME);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        if ($row != false) {
            $member = new Member(
                                     $row['memberID'],
                                     $row['user_name'],
									 $row['mbr_password'],
									 $row['email'],
									 $row['isAdmin'],
									 $row['firstName'],
									 $row['lastName'],
									 $row['birthDate'],
									 $row['joinDate']);
            return $member;
        } else {
            return null;
        }
	}
	
	//searches for a member with the given email
	public static function EmailSearch($EMAIL){
		$db = Database::getDB();
		
		$query = 'SELECT *
					FROM members
					WHERE members.email = :email';

        $statement = $db->prepare($query);
        $statement->bindValue(":email", $EMAIL);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        if ($row != false) {
            $member = new Member(
                                     $row['memberID'],
                                     $row['user_name'],
									 $row['mbr_password'],
									 $row['email'],
									 $row['isAdmin'],
									 $row['firstName'],
									 $row['lastName'],
									 $row['birthDate'],
									 $row['joinDate']);
            return $member;
        } else {
            return null;
        }
	}
	
	//edits the password for the input member
	public static function MemberPasswordEdit($MEMBER){
		$db = Database::getDB();
		
		$memberID = $MEMBER->getMemberID();
        $password = $MEMBER->getPassword();

        $query = 'UPDATE members
					SET mbr_password = :password
					WHERE members.memberID = :memberid';

        $statement = $db->prepare($query);
		$statement->bindValue(":memberid", $memberID);
        $statement->bindValue(":password", $password);
        $statement->execute();
        $statement->closeCursor();
	}
}
?>