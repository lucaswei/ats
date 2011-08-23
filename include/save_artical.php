<?php
require_once('./.sqlinfo.php');
$user = $_SESSION['user'];
$editor = getId($user);
$title = $_POST['title'];
$father_artical = $_POST['father_artical'];
$class = $_POST['class'];
$content = $_POST['content'];
$time = time();
if($father_artical ==""){
	$father_artical = 0;
}

$sql  = "INSERT INTO `artical` (editor, title, contents, time, class, father_artical) ";
$sql .= "VALUES ('$editor', '$title', '$content', '$time', '$class', '$father_artical')";
echo $sql;
$result = mysql_query($sql) or die('insert artical failed');
echo mysql_error();
?>
<?php
function getId($user)
{
	$sql = "SELECT `ID` FROM `user` WHERE account='$user' ";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row[0];
}
?>
