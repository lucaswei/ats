<?php 
	session_start();	
	
	require_once('./.sqlinfo.php');
	
	$account = $_POST['account'];
	$password = $_POST['password'];
	
	$sql = "select * from user where account='$account'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	
	if($account!=null && $password!=null && $row[1]==$account && $row[2]==$password)
	{
		$_SESSION['account']=$account;
		setcookie("account",$account);
		setcookie("password","true");
		//header("Location:function.html");
		mysql_free_result($result);
		
		if($row[3]==1)
		{
			//print_r($_COOKIE);
			$level=1;
			echo '<meta http-equiv=REFRESH CONTENT=1;url=header2.php>';
			//echo '<meta http-equiv=REFRESH CONTENT=1;url=admin.html>';
		}
		else if($row[3]==2)
		{
			//print_r($_COOKIE);
			$level=2;
			echo '<meta http-equiv=REFRESH CONTENT=1;url=header2.php>';
			//echo '<meta http-equiv=REFRESH CONTENT=1;url=teacher.html>';
		}
		else
		{
			//print_r($_COOKIE);
			$level=3;
			echo '<meta http-equiv=REFRESH CONTENT=1;url=header2.php>';
			//echo '<meta http-equiv=REFRESH CONTENT=1;url=student.html>';
		}
		//echo 'login success';
	}
	else if($account!=null && $password!=null && $row[1]==$account && $row[2]!=$password)
	{
		echo 'you may forget your password';
		//echo '<meta http-equiv=REFRESH CONTENT=1;url=function.html>';
	}
	else
	{
		//echo 'login failed';
		 echo '<meta http-equiv=REFRESH CONTENT=1;url=header.php>';
	}
	
?>