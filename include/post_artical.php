<?php
require_once('./.sqlinfo.php');
$user = $_SESSION['account'];
$father_artical = $_GET['father_artical'];
$time = time();
$sql = "SELECT * FROM `class` WHERE begin<'$time' AND deadline>'$time' ORDER BY `deadline` ASC";
$result = mysql_query($sql); $option = "";
while($row = mysql_fetch_array($result)){
	$option .= "<option value='{$row['ID']}'>".$row['name']."</option>\n";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel= "stylesheet " type= "text/css" href="" />
</head>
<body>
<form action="./save_artical.php" method="post">
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" id=""/></td>
		</tr>
		<input type="hidden" name="father_artical" value="<?php echo $father_artical;?>"/>
		<tr>
			<td>Class</td>
			<td>
				<select name="class">
					<?php
					echo $option;
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><textarea name="content"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit"/></td>
		</tr>
	</table>
</form>
</body>
</html>
