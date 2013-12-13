<?php

session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");

//get POST data  

  $module = mysql_real_escape_string($_POST["module_ass"]);   
  $comment = mysql_real_escape_string($_POST["comment_body"]);  
  $checkBox = mysql_real_escape_string($_POST['private']);
  
  //add new comment to database  
  mysql_query("INSERT INTO comment (user_id, module_ass, comment_body, private) VALUES('$myusername' , ' $module', ' $comment ', ' $checkBox')");  




?>