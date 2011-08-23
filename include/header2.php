<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="slidemenu.css" rel="stylesheet" />
<script src="../slidemenu.js" type="text/javascript"></script>
<?php
	require_once('./.sqlinfo.php');
	
	echo "<table width='100%' border='0' cellspacing='2'>\n";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<form action='logout.php' method='post'>";
	echo "<td>&nbsp account : F74970000<td><tr>";
	echo "<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type='submit' value='logout' /><tr>";
	echo "</form>";
	echo "</table>\n\n\n";
	
	if($level==2)
	{
		$sql = "SELECT name FROM course WHERE teacher='$account'";
		$result = mysql_query($sql);
		
		echo "<table width='100%' border='0' cellspacing='2'>\n";
		echo "<div id='vertical_menu'>\n";
		
		echo "<ol><tr><td align='center'><li><span>Index</span></li></td>";
		
		echo "<tr><td align='center'><li><span>Post</span><ul>";
		for($i=0;$i<count($result);$i++)
		{
			echo "<li>'$result[$i]'</li>";
		}
		echo "</ul></li></td>";
		
		echo "<td align='center'><li><span>Article</span><ul>";
		for($i=0;$i<count($result);$i++)
		{
			echo "<li>'$result[$i]'</li>";
		}
		echo "</ul></li></td>";
		
		echo "<td align='center'><li><span>Announce</span><ul>";
		echo "<li>Course<ul>";
		for($i=0;$i<count($result);$i++)
		{
			echo "<li>'$result[$i]'</li>";
		}
		echo "</ul></li>";
		echo "<li>System</li></ul></li></td>";
		
		echo "<td align='center'><li><span>Personal</span></li></td>";
		echo "</tr></ol></div></table>";
	}
	
	if($level==3)
	{
		$sql = "SELECT name FROM course WHERE teacher='$account'";
		$result = mysql_query($sql);
		
		echo "<table width='100%' border='0' cellspacing='2'>\n";
		echo "<div id='vertical_menu'>\n";
		
		echo "<ol><tr><td align='center'><li><span>Index</span></li></td>";
		
		echo "<tr><td align='center'><li><span>Post</span><ul>";
		echo "<li>Post</li><li>Comment</li>";
		echo "</ul></li></td>";
		
		echo "<td align='center'><li><span>Article</span><ul>";
		echo "<li>Posted</li><li>Commented</li>";
		echo "</ul></li></td>";
		
		echo "<td align='center'><li><span>Announce</span><ul>";
		echo "<li>Course</li><li>System</li>";
		echo "</ul></li></td>";
		
		echo "<td align='center'><li><span>Personal</span></li></td>";
		echo "</tr></ol></div></table>";
	}
?>
<script type="text/javascript">
	var menu=new slideMenu('horizon_menu');
	menu.handler='onmouseover';
	menu.init();
</script>
	