<?php
$aid = $_GET['aid'];
if ($aid == "") {
	echo "Wrong access";
	return;
}
session_start();
require_once("./.sqlinfo.php");
if ($_SESSION['level'] < 2 ) {
	$father_artical = $_GET['aid'];
	$sql = "SELECT * FROM `comments` WHERE father_artical=$father_artical";
	$result = mysql_query($sql);
	if (mysql_num_rows($result) > 2 ) {
		echo "It has beem the limit of comments!";
		return;
	}
}
$sql = "SELECT * FROM `artical` WHERE artical_id=$aid";
$result = mysql_query($sql) or die("connect to mysql fail");
$row = mysql_fetch_array($result);
$artical = $row['contents'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel= "stylesheet " type= "text/css" href="./css/demo.css" />
<script type="text/javascript" src="./javascript/jquery.js"></script>
<script type="text/javascript" src="./javascript/demo2.js"></script>
</head>
<body>
<script>
$(window).load( function(){init();});
</script>
	<div id="main">
		<?php
			require_once('header.php');
		?>
		<div id="mask">
			<div id="input">
				<div id="selectConetentsBox">
					<p id="selectedContents">this is what you selected.</p>
				</div>
				<textarea id="comment" >text area</textarea>
				<button id="global_button" onclick="setComment('global')">Global</button>
				<button id="local_button" onclick="setComment('local')">Local</button>
				<button onclick="hideMask()" >Cancel</button>
			</div>
		</div>
		<div id="content">
			<h2>Artical:</h2>
			<div id="artical">
			<?php
			echo $artical;
			?>
			</div>
			<div id="selectNotice">
			</div>
			<h2>Global comments:</h2>
			<div id="globalNote">
			</div>
			<h2>Local comments:</h2>
			<div id="localNote">
			</div>
			<form method="post" action="save_comment.php" id="submit" >
				<input type="submit" value="Submit your comments!" />
				<input type="hidden" name="id_input" id="id_input" value="<?php echo $aid;?>"/>
				<input type="hidden" name="artical_input" id="artical_input" />
				<input type="hidden" name="global_input" id="global_input" />
				<input type="hidden" name="local_input" id="local_input" />
				<textarea name="summary" id="summary"></textarea>
				<input type="submit" value="Submit your comments!" />
			</form>
		</div>
	</div>
<?php
	require_once('footer.php');
?>
</body>
</html>
