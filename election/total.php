<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('election', $con);
$query_rs_vote = "SELECT * FROM votes";
$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);

echo $totalRows_rs_vote;

?>