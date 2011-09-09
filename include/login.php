<?php
session_start();
?>
<?php	
	require_once(".sqlinfo.php");	

	$account = $_POST['account'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM user where account ='$account'";
	$result = mysql_query($sql) or die('MySQL query error');
	$row = mysql_fetch_row($result);
	
	if($account!=null && $password!=null && $row[1]==$account && $row[2]==$password)
	{
		$_SESSION['user']=$account;
		$_SESSION['user_id']=$row[0];
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
	/*else if($account!=null && $password!=null && $row[1]==$account && $row[2]!=$password)
	{
		echo 'you may forget your password';
		//echo '<meta http-equiv=REFRESH CONTENT=1;url=function.html>';
	}*/
	else
	{
		echo "Wrong password";
	}	
?>
