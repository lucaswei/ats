<?php
$artical = $_POST['artical_input'];
$comment = $_POST['comment_input'];
$summary = $_POST['summary_input'];
require_once('../include/.sqlinfo.php');
$time = time();
$editor; /*TODO*/
$father_artical; /*TODO*/

$sql  = "INSERT INTO `comment` (time, editor, father_artical, quotr, annotate, summary) ";
$sql += "VALUES ($time, $editor, $father_artical, $artical, $comment, $summary)";
$result = mysql_query($sql);
?>

