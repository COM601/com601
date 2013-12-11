<?php

session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");


$result = mysql_query("SELECT * FROM user WHERE user_id='$myusername'");    

$data = array();

while ($row = mysql_fetch_assoc($result)) {
	
    // Generate the output in desired format
    $data = array(

        'user_id' 	=> 	$row['user_id'],
        'forename' 	=> 	$row['forename'],
        'surname' 	=> 	$row['surname'],
        'email' 	=>	$row['email'],
        'course_id' =>	$row['course_id'],
        'img_url' =>	$row['img_url']


    );
}

 echo json_encode($data);

?>