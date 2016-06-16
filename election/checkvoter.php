<?php
session_start();
$_SESSION['student'] = $_POST['stud_ID'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('election', $con);

$sql="SELECT `student_id` FROM `votes` WHERE student_id='$_POST[stud_ID]'";
$result=mysql_query($sql);
//count the student_id;
$count=mysql_num_rows($result);
if($count==1){
echo "Student Already Vote!";
}

else {
header('location:voting.php');
}
?>