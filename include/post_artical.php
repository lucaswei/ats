<?php
session_start();
require_once('./.sqlinfo.php');
if ($_SESSION['user_id'] == ""){
	return ;
}
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
<link rel= "stylesheet " type= "text/css" href="css/post_artical.css" />
<script type="text/javascript" src="./javascript/jquery.js"></script>
<script type="text/javascript" >
</script>
</head>
<body>
<div id="main">
	<?php
		require_once('header.php');
	?>
		<form action="./save_artical.php" method="post">
		<table id="post_artical">
			<tr>
				<td><h2>Title:</h2></td>
				<td><input type="text" name="title" id=""/></td>
			</tr>
			<input type="hidden" name="father_artical" value="<?php echo $father_artical;?>"/>
			<tr>
				<td><h2>Class:</h2></td>
				<td>
					<select name="class">
						<?php
						echo $option;
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td><h2>Dialog:</h2>if you have somthing to say...</td>
			</tr>
			<tr>
				<td colspan="2"><textarea id="dialog" name="dialog"></textarea></td>
			</tr>
			<tr>
				<td><h2>Content:</h2>write down your artical here...</td>
			</tr>
			<tr>
				<td colspan="2"><textarea id="content" name="content"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Post"/></td>
			</tr>
		</table>
	</form>
</div>
	<?php
		require_once('footer.php');
	?>

</body>
</html>
