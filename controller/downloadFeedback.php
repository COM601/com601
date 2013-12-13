<?php

session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");


$result = mysql_query("SELECT feedback_url FROM user_assignment WHERE user_id='$myusername' and module = 'COM 601' and assignment_id = '1' ");    

$data = array();

while ($row = mysql_fetch_assoc($result)) {
	
    // Generate the output in desired format
    $data = array(

        'feedback_url' 	=> 	$row['feedback_url']


    );
}

 echo json_encode($data);

?>