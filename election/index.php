<html>
<body background="Resources/bg.jpg"style="background-size: 100%,100%"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<div  style="font-color:white; font-size:30px; border: 1px solid black; width: 50%; height:20%; background-color:gray; border-radius: 25px;">

<form name="joe" method="POST"><br>
Input Student ID:<br>
<input name="stud_ID" type="text" style="border-radius: 25px; width: 60%; height:20%; font-size:30px;"><br>
<font style="color:red; font-size:15px;">
&nbsp;
<?php
if(isset($_POST['submit'])){
session_start();
$_SESSION['student'] = $_POST['stud_ID'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db('db_attendance', $con);

$sql="SELECT `studnum` FROM `db_attendance` WHERE studnum='$_POST[stud_ID]'";
$result=mysql_query($sql);
//count the student_id;
$count=mysql_num_rows($result);
if($count==1){
  
mysql_select_db('election', $con);

$sql="SELECT `student_id` FROM `votes` WHERE student_id='$_POST[stud_ID]'";
$result=mysql_query($sql);
//count the student_id;
$count=mysql_num_rows($result);
if($count==1){
echo '<script>';
echo 'alert("Student Already Voted!");';
echo 'location.href="mainelection.php"';
echo '</script>';

}

else {
header('location:voting.php');
}
}
else {
echo '<script>';
echo 'alert("Student ID does not exist!!");';
echo 'location.href="mainelection.php"';
echo '</script>';
}

}
?>
</font><br>
<input type="submit" value="Submit" name="submit" style="width: 30%; height:20%; border-radius: 25px; background-color:green; font-size:25px;"required>
</form>
</center>
</body>
</div>
</html>


