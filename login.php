<?php
session_start();
//hides the unecessary error
ini_set( "display_errors", 0);
include_once "includes/config.php";


if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form 

$myusername=$_POST['username'];
$mypassword=$_POST['password'];


//$sql="SELECT id,role FROM admin WHERE username='$myusername' and passcode='$mypassword'";

$sql="SELECT user_id, role FROM user WHERE user_id='$myusername' and password='$mypassword'";



$result=mysql_query($sql);

$row=mysql_fetch_array($result);

$count=mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        //$_SESSION["myusername"];
        $_SESSION['login_user'] = $myusername;
        $_SESSION["role"] = $row["role"];
        if($row["role"] == "student") {
            //die("i'm here");
            //header('location: views/student.php');
            echo 'student';
        }
        else {
        //die("i'm there");
            //header('location: views/lecture.php');
            echo 'lecture';
        }
    }

    else {
        echo "Your Login Name or Password is invalid";
    }

}


?>
