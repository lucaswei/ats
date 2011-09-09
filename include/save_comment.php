<?php
session_start();
require_once('/var/www/ats/include/.sqlinfo.php');

$artical = a($_POST['artical_input'],$link);
$local = a($_POST['local_input'],$link);
$global = a($_POST['global_input'],$link);
$summary = a($_POST['summary'],$link);

$time = time();
$editor = $_SESSION['user_id'];
$father_artical = $_POST['id_input'];

$sql  = "INSERT INTO `comments` (time, editor, father_artical, quote, global, local, summary) ";
$sql .= "VALUES ('$time', '$editor', '$father_artical', '$artical', '$global', '$local', '$summary')";
$result = mysql_query($sql);
echo "save success";
$artical_id = getTopArtical($father_artical);
$location = "Location:./artical.php?aid=$artical_id";
header($location);
?>
<?php
function a($txt,$link){
	return mysql_real_escape_string($txt, $link);
}
function getTopArtical($fid)
{
	$sql = "SELECT `father_artical` FROM `artical` WHERE artical_id=$fid";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	return $row[0];
}
?>
