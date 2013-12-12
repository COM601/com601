<?php

session_start();


$myusername = $_SESSION['login_user'];


include("../includes/config.php");

//query the database  
  $query = mysql_query("SELECT * FROM comment WHERE user_id='$myusername'");  
      
    //loop through and return results  
  for ($x = 0, $numrows = mysql_num_rows($query); $x < $numrows; $x++) {  
    $row = mysql_fetch_assoc($query);  
      
    $comments[$x] = array(
    	"comment_body" => $row["comment_body"],
    	"module_ass" => $row["module_ass"]
    	);        
  }  
      
  //echo JSON to page  
  $response = $_GET["jsoncallback"] . "(" . json_encode($comments) . ")";  
  echo $response;    
  
?>  

