<?php
$aid = $_GET['aid'];
require_once('./.sqlinfo.php');
/* artical */
$articals = queryDb("artical", "father_artical", $aid);
$output;
foreach ($articals as $artical) {
	$output += createArticalDiv($artical);
}

?>

<?php
	function queryDb($table, $column, $id){
		$sql = "SELECT * FROM `$table` WHERE $column=$id ORDER BY $column";
		$result = mysql_query($sql);
		$i = 0;
		while($row[$i] = mysql_fetch_array($result, MYSQL_BOTH)){
			$i++;
		}
		return $row;
	}
	function createArticalDiv($artical){
		echo "<div class='artical'>\n";
		echo "<p class='paragraph'>{$artical['contents']}</p>\n";
		createCommentDiv($artical);
		echo "</div>\n";
	}
	function createCommentDiv($artical){
		$id = $artical['artical_id'];
		$comments = queryDb("comments","father_artical",$id);
		if (sizeof($comments)==0) {
			return 0;
		}
		foreach ($comments as $comment) {
			echo "<div class='comment'>\n";
			echo "<div class='include'>{$comment['quote']}</div>\n";
			echo "<div class='note'>{$comment['annotate']}</div>\n";
			echo "<div class='summary'>{$comment['summary']}</div>\n";
			echo "<div class='discuss'>\n";
			createDiscussDiv($comment['comments_id']);
			echo "</div>\n";
			echo "</div>\n";
		}
	}
	function createDiscussDiv($id){
		$discuss = queryDB("discuss","father_comments",$id);
		if (sizeof($discuss)==0) {
			return 0;
		}
			foreach ($discusse as $dis) {
				echo "<div class='discuss'>$dis</div>";
			}
	}
?>
