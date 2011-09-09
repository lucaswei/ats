<?php
	//require_once('./login.php');
	session_start();
	print_r($_SESSION);
?>
	<link href="include/css/slidemenu.css" rel="stylesheet" />
	<script src="include/javascript/slidemenu.js" type="text/javascript"></script>
	<table width='100%' border='0' cellspacing='2'>
	<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	<td rowspan='3'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
	<form action='include/login.php' method='post'>
	<td>&nbsp account : <input type='text' name='account' /><td><tr>
	<td>password: <input type='password' name='password' /></td><tr>
	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type='submit' value='login' /><tr>
	</form>
	</table>
<?php
if($user!=null)
{
	//$account=$_COOKIE['account'];
	$level=2;
}

if($level==2)
{
?>
	<div id="horizon_menu">
		<ol>
			<?php
				$sql = "SELECT * FROM course WHERE teacher='$account'";
				$result = mysql_query($sql) or die('MySQL query error');
				$i=0;
				while($row = mysql_fetch_array($result))
				{
					$name[$i]=$row['name'];
					$i++;
				}
			?>
			<li><span><a href="#">Index</a></span></li>
			<li><span>Post</span>
				<ul class="collapsed">
				<?php
					for($j=0;$j<$i;$j++)
					{
						echo "<li><a href='#'>$name[$j]</a></li>";
					}
				?>
				</ul>
			</li>
			<li><span>Article</span>
				<ul class="collapsed">
				<?php
					for($j=0;$j<$i;$j++)
					{
						echo "<li><a href='#'>$name[$j]</a></li>";
					}
				?>
				</ul>
			</li>
			<li><span>Announce</span>
				<ul class="collapsed">
					<!--<li><span><a href='#'>Course</a></span>
						<ul class="collapsed">
						<?php
							for($j=0;$j<$i;$j++)
							{
								echo "<li><a href='#'>$name[$j]</a></li>";
							}
						?>
						</ul>
					</li>-->
					<li><a href='#'>Course</a></li>
					<li><a href='#'>System</a></li>
				</ul>
			</li>
			<li><span><a href="#">Personal</a></span></li>
		</ol>
	</div>
<?php
}
?>
<?php
if($level==3)
{
?>
	<div id="horizon_menu">
		<ol>
			<?php
				$sql = "SELECT course FROM user WHERE account='$account'";
				$result = mysql_query($sql) or die('MySQL query error');
				$i=0;
				while($row = mysql_fetch_array($result))
				{
					$name[$i]=$row['name'];
					$i++;
				}
			?>
			<li><span><a href="#">Index</a></span></li>
			<li><span>Post</span>
				<ul class="collapsed">
					<li><a href='#'>Post</a></li>
					<li><a href='#'>Comment</a></li>
				</ul>
			</li>
			<li><span>Article</span>
				<ul class="collapsed">
					<li><a href='#'>Posted</a></li>
					<li><a href='#'>Commented</a></li>
				</ul>
			</li>
			<li><span>Announce</span>
				<ul class="collapsed">
					<!--<li><span><a href='#'>Course</a></span>
						<ul class="collapsed">
						<?php
							for($j=0;$j<$i;$j++)
							{
								echo "<li><a href='#'>$name[$j]</a></li>";
							}
						?>
						</ul>
					</li>-->
					<li><a href='#'>Course</a></li>
					<li><a href='#'>System</a></li>
				</ul>
			</li>
			<li><span><a href="#">Personal</a></span></li>
		</ol>
	</div>
<?php
}
?>
<?php
if($level!=1&&$level!=2&&$level!=3)
{
?>
	<div id="horizon_menu">
		<ol>
			<li><span><a href="#">Index</a></span></li>
			<li><span><a href="#">Post</a></span></li>
			<li><span><a href="#">Article</a></span></li>
			<li><span><a href="#">Announce</a></span></li>
			<li><span><a href="#">Personal</a></span></li>
		</ol>
	</div>
<?php
}
?>
<script type="text/javascript">
	var menu=new slideMenu('horizon_menu');
	menu.handler='onmouseover';
	menu.init();
</script>
