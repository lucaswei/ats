<?php
require_once('./.sqlinfo.php');
session_start();
$aid = $_GET['aid'];
$editor = aid2editor($aid);
$user_id = $_SESSION['user_id'];
if ($editor == $user_id) {
	$IS_EDITOR = true;
}else{
	$IS_EDITOR = false;
}
/* artical */
$articals = queryDb("artical", "father_artical", $aid);
$nameKey = constructKey();
foreach ($articals as $artical) {
	$output .= createArticalDiv($artical);
}

?>

<?php
	function queryDb($table, $column, $id){
		$sql = "SELECT * FROM `$table` WHERE $column=$id ORDER BY `time`";
		$result = mysql_query($sql);
		for ($i = 0; $i < mysql_num_rows($result); $i++) {
			$row[$i] = mysql_fetch_array($result, MYSQL_BOTH);
		}
		return $row;
	}
	function createArticalDiv($artical){
		$output .= "<div class='artical'>\n";
		$output .= "\t<div class='infomation'>".infomation($artical['artical_id'])."</div>";
		$output .= "\t<div class='functionList'>".functionList($artical['father_artical'], $artical['artical_id'])."</div>";
		$output .= "\t<p class='paragraph'>{$artical['contents']}</p>\n";
		$output .= "\t<div class='comments'>";
		$output .= createCommentDiv($artical['artical_id']);
		$output .= "\t</div>";
		$output .= "</div>\n";
		return $output;
	}
	function createCommentDiv($id){
		$comments = queryDb("comments","father_artical",$id);
		if (sizeof($comments)==0) {
			return;
		}
		foreach ($comments as $comment) {
			$output .= "<div class='comment'>\n";
			$output .= "<div style='color:#fff'>".commentInformation($comment['comments_id'])."</div>";
			$output .= "<h2>Included artical:</h2>";
			$output .= "<div class='include'>{$comment['quote']}</div>\n";
			$output .= "<h2>Global comments:</h2>";
			$output .= "<div class='global'>";
			$output .= makeNote($comment['global']);
			$output .= "</div>";
			$output .= "<h2>Local comments:</h2>";
			$output .= "<div class='local'>";
			$output .= makeNote($comment['local']);
			$output .= "</div>";
			$output .= "<h2>End comments:</h2>";
			$output .= "<div class='summary'>{$comment['summary']}</div>\n";
			$output .= "</div>\n";
		}
		return $output;
	}
	function makeNote($notes){
		$notes = explode("/",$notes);
		for ($i = 0; $i < sizeof($notes)-1; $i++) {
			$output .= "<div id='note'>\n";
			$output .= "<sup>[".($i+1)."]</sup>".$notes[$i]."\n";
			$output .= "</div>\n";
		}
		return $output;
	}
	/*TODO*/
	function infomation($aid){
		global $nameKey;
		$sql = "SELECT * FROM `artical` WHERE artical_id=$aid";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$title = $row['title'];
		$author = $row['editor'];
		$time = date('Y-m-d-a g:i',$row['time']);
		$output .= "<h1>Title: $title </h1>";
		$output .= "<span>Author: ".$nameKey[$author]." </span>";
		$output .= "<span>Time: $time </span>";
		return $output;
	}
	function commentInformation($cid){
		global $nameKey;
		$sql = "SELECT * FROM `comments` WHERE comments_id=$cid";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$output .= "Author:".$nameKey[$row['editor']];
		$time = date('Y-m-d-a g:i',$row['time']);
		$output .= " Time:$time";
		return $output;
	}
	function functionList($father_artical, $artical_id){
		$output .= "<table>";
		$output .= "<tr>";
		global $IS_EDITOR;
		if ($IS_EDITOR) {
			$output .= "<td> || </td>";
			$output .= "<td><a href='./post_artical.php?father_artical=$father_artical'>re-post</a></td>";
			$output .= "<td> || </td>";
			$output .= "<td><a href='./delete.php?id=$artical_id&type=artical'>Delete</a></td>";
		}else{
			$output .= "<td> || </td>";
			$output .= "<td><a href='./edit_page.php?aid=$artical_id'>comment</a></td>";
		}
		$output .= "<td> || </td>";
		$output .= "</tr>";
		$output .= "</table>";
		return $output;
	}
	function aid2editor($aid){
		$sql = "SELECT * FROM `artical` WHERE artical_id=$aid";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$editor = $row['editor'];
		return $editor;
	}
	function constructKey(){
		$sql = "SELECT * FROM `user` where 1";
		$result = mysql_query($sql);
		$keyArray = array();
		while($row = mysql_fetch_array($result)){
			$keyArray[$row['ID']] = $row['account'];
			$keyArray[$row['account']] = $row['ID'];
		}
		return $keyArray;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel= "stylesheet " type= "text/css" href="./css/artical.css" />
</head>
<body>
	<div id="main">
		<?php
			require_once('header.php');
		?>
		<div id="articals">
		<?php
			echo $output;
		?>
		</div>
	</div>
	<?php
		require_once('footer.php');
	?>
</body>
</html>
