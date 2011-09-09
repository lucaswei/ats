<?php
	session_start();
	require_once('.sqlinfo.php');
	/* all own*/
	$search = $_GET['search'];
	$user  = $_SESSION['user_id'];
	$editorKey = constructKey();
	$classKey  = constructClass();
	$sql = search2sql($search);
	$result = mysql_query($sql);
	for ($i = 0; $i < mysql_num_rows($result); $i++) {
		$row[$i] = mysql_fetch_array($result);
	}
	$output  = "<table>\n";
	$output .= "<tr><td>Editor</td> <td>Title</td> <td>Date</td> <td>Commented</td> <td>Class</td></tr>";
	foreach ($row as $r) {
		if ($r['artical_id'] != $r['father_artical']) {
			continue;
		}
		$output .= "<tr>\n";
		$output .= "<td>".$editorKey[$r['editor']]."</td>\n";
		$output .= "<td><a href='./artical.php?aid=".$r['artical_id']."' >$r[title]</a></td>\n";
		$output .= "<td>".date('Y-m-d  a G:i',$r[time])."</td>\n";
		$output .= "<td>".getCommented($r['artical_id'])."</td>";
		$output .= "<td>".$classKey[$r['class']]."</td>\n";
		$output .= "</tr>\n";
	}
	$output .= "</table>\n";
?>
<?php
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
function constructClass(){
	$sql = "SELECT * FROM `class` where 1";
	$result = mysql_query($sql);
	$keyArray = array();
	while($row = mysql_fetch_array($result)){
		$keyArray[$row['ID']] = $row['name'];
		$keyArray[$row['name']] = $row['ID'];
	}
	return $keyArray;
}
function getCommented($aid){
	$sql = "SELECT `artical_id` FROM `artical` WHERE father_artical=$aid";
	$result = mysql_query($sql);
	for ($i = 0; $i < mysql_num_rows($result); $i++) {
		$row = mysql_fetch_array($result);
		$total[$i] = $row['artical_id'];
	}
	$sql = "SELECT * FROM `comments` WHERE ";
	for ($i = 0; $i < sizeof($total); $i++) {
		$sql .= "father_artical=$total[$i] OR ";
	}
	$sql .= "0";
	$result = mysql_query($sql);
	return mysql_num_rows($result);
}
function minimizeArray($array){
	$count=0;
	for ($i = 0; $i < sizeof($array); $i++) {
		$pattern = $array[$i];
		for ($j = 0; $j < sizeof($result); $j++) {
			if ($result[$j] == $pattern) {
				break;
			}
		}
		if ($j == sizeof($result)) {
			$result[$count] = $pattern;
			$count++;
		}
	}
	sort($result);
	return $result;
}
function search2sql($search){
	global $user;
	if ($search == "all") {
		$sql = "SELECT * FROM `artical`  WHERE 1 ORDER BY time";
	}else if ($search == "own") {
		$sql = "SELECT * FROM `artical`  WHERE editor=$user";
	}else if ($search == "commented") {
		$sql = "SELECT * FROM `comments` WHERE editor=$user";
		$result = mysql_query($sql);
		for ($i = 0; $i < mysql_num_rows($result); $i++) {
			$row = mysql_fetch_array($result);
			$commentedArtical[$i] = $row['father_artical'];
		}
		$commentedArtical = minimizeArray($commentedArtical);
		$sql = "SELECT * FROM `artical` WHERE ";
		for ($i = 0; $i < sizeof($commentedArtical); $i++) {
			$sql .= "artical_id=$commentedArtical[$i] OR ";
		}
		$sql .= "0";
		$result = mysql_query($sql);
		for ($i = 0; $i < mysql_num_rows($result); $i++) {
			$row = mysql_fetch_array($result);
			$commentedArtical[$i] = $row['father_artical'];
		}
		$commentedArtical = minimizeArray($commentedArtical);
		$sql = "SELECT * FROM `artical` WHERE ";
		for ($i = 0; $i < sizeof($commentedArtical); $i++) {
			$sql .= "artical_id=$commentedArtical[$i] OR ";
		}
		$sql .= "0";
	}else{
		$sql = "SELECT * FROM `artical`  WHERE 1 ORDER BY time";
	}
	return $sql;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel= "stylesheet " type= "text/css" href="css/artical_list.css" />
</head>
<body>
	<div id="main">
		<?php
			require_once('header.php');
		?>
		<div id="artical_list" >
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

