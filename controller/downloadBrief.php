<?php

session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");


$result = mysql_query("SELECT assignment_brief FROM user_assignment WHERE user_id='$myusername' and module = 'COM 601' and assignment_id = '1' ");    

$data = array();

while ($row = mysql_fetch_assoc($result)) {
	
    // Generate the output in desired format
    $data = array(

        'assignment_brief' 	=> 	$row['assignment_brief']


    );
}

 echo json_encode($data);

?>