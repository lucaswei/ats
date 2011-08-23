<?php
$aid = $_GET['aid'];
require_once("/var/www/ats/include/.sqlinfo.php");
$sql = "SELECT * FROM `artical` WHERE artical_id=$aid";
$result = mysql_query($sql) or die("connect to mysql fail");
$row = mysql_fetch_array($result);
$artical = $row['contents'];
?>
<script type="text/javascript" src="./include/javascript/jquery.js"></script>
<script type="text/javascript" src="./include/javascript/demo2.js"></script>
<script>
$(window).load( function(){init();});
</script>
	<div id="mask">
		<div id="input">
			<div id="selectConetentsBox">
				<p id="selectedContents">this is what you selected.</p>
			</div>
			<textarea id="comment" >text area</textarea>
			<button onclick="setComment()">Note</button>
			<button onclick="hideMask()" >Cancel</button>
		</div>
	</div>
	<div id="main">
		<div id="artical">
		<?php
		echo $artical;
		?>
		</div>
		<div id="selectNotice">
		</div>
		<div id="note">
		</div>
		<form method="post" action="http://127.0.0.1/ats/include/save_comment.php" id="submit" >
			<input type="submit" value="Post" />
			<input type="hidden" name="id_input" id="id_input" value="<?php echo $aid;?>"/>
			<input type="hidden" name="artical_input" id="artical_input" />
			<input type="hidden" name="note_input" id="note_input" />
			<textarea name="summary" id="summary"></textarea>
			<input type="submit" value="Post" />
		</form>
	</div>
