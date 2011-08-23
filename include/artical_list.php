<?php
	require_once('/var/www/ats/include/.sqlinfo.php');
	$search = $_GET['search'];
	$user  = $_COOKIE['user'];

	if ($search = "own") {
		$owner = $_GET['search'];
	}else if ($search = "list_all") {

	}else{
		return;
	}
	$editorKey = constructKey();
	$sql = "SELECT * FROM `artical` WHERE 1";
	$result = mysql_query($sql);
	$i=0;
	while($row[$i] = mysql_fetch_array($result)){
		$i++;
	}
	echo "<table>\n";
	echo "<tr><td>Editor</td> <td>Title</td> <td>Date</td> <td>Class</td></tr>";
	foreach ($row as $r) {
		echo "<tr>\n";
		echo "<td>$r[editor]</td>\n";
		echo "<td><a href='./file=artical&aid=$r[artical]'>$r[title]</a></td>\n";
		echo "<td>$r[time]</td>\n";
		echo "<td>$r[class]</td>\n";
		echo "</tr>\n";
	}
	echo "</table>\n";
?>
<?php
public function constructKey()
{
	$sql = "SELECT * FROM `user` where 1";
	$result = mysql_query($sql);
	$keyArray = array();
	while($row = mysql_fetch_array($result)){
		$keyArray[""] = $row[]
	}
}
?>
