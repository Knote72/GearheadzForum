<?php
try{
//database models
require('Database/db.php');
require('Database/memberdb.php');
require('Database/postdb.php');
require('Database/subtopicdb.php');
require('Database/topicdb.php');
require('Database/threaddb.php');
//object models
require('Models/member.php');
require('Models/post.php');
require('Models/thread.php');
require('Models/topic.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home_page';
    }
}  

if ($action == 'homepage'){
	include('Views/homepage.php');
} else if ($action == 'login'){
	include('Views/login.php');
} else if($action == 'forum_tree'){
	include('Views/threadTree.php');
} else if ($action == 'register'){
	//fill in for register
}
}
catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('Errors/db_errors.php');
	exit();
}
?>