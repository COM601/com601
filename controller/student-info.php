<?php


session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");


$result = mysql_query("SELECT user_id,feedback_url, first_viewed, last_viewed, view_count, assignment_name, module 
FROM user_assignment
INNER JOIN assignment
ON user_assignment.'assignment_id' = assignment.'assignment_id'");    



$json = array(); 

if(mysql_num_rows($result)) { 

    while($row=mysql_fetch_row($result)) { 
        $json['user_id']=$row['user_id'];

        array_push($json,$row);
    } 
 } 

$encoded = json_encode($json); 
echo $encoded; 




?>

