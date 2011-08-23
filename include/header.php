<?php
	require_once('./.sqlinfo.php');
	
	echo "<table width='100%' border='0' cellspacing='2'>\n";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
	echo "<form action='login.php' method='post'>";
	echo "<td>&nbsp account : <input type='text' name='account' /><td><tr>";
	echo "<td>password: <input type='password' name='password' /></td><tr>";
	echo "<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type='submit' value='login' /><tr>";
	echo "</form>";
	echo "</table>\n\n\n";
	
	echo "<table width='100%' border='0' cellspacing='2'>\n";
	echo "<tr><td align='center'>&nbsp &nbsp Index &nbsp </td><td align='center'>&nbsp Post &nbsp </td><td align='center'>Article</td><td align='center'>Announce</td><td align='center'>Personal</td></tr>";
	echo "</table>\n";
?>