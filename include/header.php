<?php
	session_start();
	require_once('.sqlinfo.php');
?>
<?php

$username = $_SESSION['user'];

if($username==null)
{
	$login = "";
	$login .= "<table>";
	$login .= "<form action='login.php' method='post'>";
	$login .= "<tr><td>account : <input type='text' name='account' /></td></tr>";
	$login .= "<tr><td>password: <input type='password' name='password' /></td><tr>";
	$login .= "<tr><td><input type='submit' value='login' /></td></tr>";
	$login .= "</form></table>";
}
else
{
	$login .= "<table>";
	$login .= "<form action='logout.php' method='post'>";
	$login .= "<tr><td>welcome ATS</td></tr>";
	$login .= "<tr><td>account : $username</td></tr>";
	$login .= "<tr><td><input type='submit' value='logout' /></td></tr>";
	$login .= "</form></table>";
}
?>
<?php
$sql = "SELECT * FROM `user` where account = '$username'";
$result = mysql_query($sql) or die('MySQL query error');
$row = mysql_fetch_array($result);
$level = $row['level'];
$navigator = getNavigator($level);

function getNavigator($level){
	if ($level == 2) {
		$sql = "SELECT * FROM course WHERE teacher='$username'";
		$result = mysql_query($sql) or die('MySQL query error');
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$name[$i]=$row['name'];
			$i++;
		}
		
		$navigator .= "<li>Index</li>";
		$navigator .= "<li>Post<ul>";
		for($j=0;$j<$i;$j++)
		{
			$navigator .= "<li>$name[$j]</li>";
		}
		$navigator .= "</ul></li>";
		$navigator .= "<li>Article<ul>";
		for($j=0;$j<$i;$j++)
		{
			$navigator .= "<li>$name[$j]</li>";
		}
		$navigator .= "</ul></li>";
		$navigator .= "<li>Announce<ul>";
		for($j=0;$j<$i;$j++)
		{
			$navigator .= "<li>$name[$j]</li>";
		}
		$navigator .= "<li>System</li></ul></li>";
		$navigator .= "<li>Class<ul><li>Create</li><li>Delete</li></ul></li>";
		$navigator .= "<li>Personal</li>";
	}else if ($level == 3){
		$navigator .= "<li><a href='index.php'>Index</a></li>";
		$navigator .= "<li>Announce<ul><li>Course</li><li>System</li></ul></li>";
		$navigator .= "<li><a href='post_artical.php'>Post Artical</a></li>";
		$navigator .= "<li>Manage Article<ul><li><a href='artical_list.php'>All Artical</a></li><li><a href='artical_list.php?search=own'>My Own</a></li><li><a href='artical_list.php?search=commented'>Commented</a></li></ul></li>";
		$navigator .= "<li>Personal</li>";
	}else{
		$navigator .= "<li><a href='index.php'>Index</a></li>";
		$navigator .= "<li>Post</li>";
		$navigator .= "<li><a href='artical_list.php'>Article</a></li>";
		$navigator .= "<li>Announce</li>";
		$navigator .= "<li>Personal</li>";
	}
	return $navigator;
}
?>
<link rel= "stylesheet " type= "text/css" href="css/header.css" />
<div id="header">
	<div id="banner">
		<a href="index.php"><span id="title" >On-line Peer Review System</span></a>
		<div id="login">
			<?php
				echo $login;
			?>
		</div>
		<div style="clear:both"></div>
	</div>
	<div id="navigator">
		<ul>
		<?php
			echo $navigator;
		?>
		</ul>
		<div style="clear:both"></div>
	</div>
</div>
