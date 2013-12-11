<?php

session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");



$sth = mysql_query("SELECT user_id,feedback_url, first_viewed, last_viewed, view_count, assignment_name, module FROM user_assignment INNER JOIN assignment ON user_assignment.`assignment_id` = assignment.assignment_id WHERE user_id='$myusername'");
$rows = array();
while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);


?>