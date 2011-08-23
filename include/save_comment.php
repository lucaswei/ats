<?php
require_once('/var/www/ats/include/.sqlinfo.php');
$artical = a($_POST['artical_input'],$link);
$comment = a($_POST['note_input'],$link);
$summary = a($_POST['summary'],$link);

$time = time();
$editor = "1";
$father_artical = $_POST['id_input'];

$sql  = "INSERT INTO `comments` (time, editor, father_artical, quote, annotate, summary) ";
$sql .= "VALUES ('$time', '$editor', '$father_artical', '$artical', '$comment', '$summary')";
$result = mysql_query($sql);
echo "save success";
?>
<?php
function a($txt,$link){
	return mysql_real_escape_string($txt, $link);
}
?>
