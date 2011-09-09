<?php
session_start();
require_once('./.sqlinfo.php');
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
	echo "Please login first!";
	return;
}
$title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
$father_artical = $_POST['father_artical'];
$class = $_POST['class'];
$content = mysql_real_escape_string(htmlspecialchars($_POST['content']));
$time = time();
if($father_artical ==""){
	$father_artical = 0;
}

$sql  = "INSERT INTO `artical` (editor, title, contents, time, class, father_artical) ";
$sql .= "VALUES ('$user_id', '$title', '$content', '$time', '$class', '$father_artical')";
$result = mysql_query($sql) or die('insert artical failed');

if ($father_artical == 0) {
	$father_artical = mysql_insert_id();
	$sql = "UPDATE `artical` SET father_artical=$father_artical WHERE artical_id=$father_artical";
	$result = mysql_query($sql);
}
echo "save artical success!";
?>
