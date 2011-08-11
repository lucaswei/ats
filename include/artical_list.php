<?php
	require_once('./.sqlinfo.php');
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
		echo "<td><a href='./artical.php?aid=$r[artical]'>$r[contents]</a></td>\n";
		echo "<td>$r[time]</td>\n";
		echo "<td>$r[class]</td>\n";
		echo "</tr>\n";
	}
	echo "</table>\n";
?>

