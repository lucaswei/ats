<?php
	session_start();
	require_once('.sqlinfo.php');
	$deleteType = $_GET['type'];
	$deleteId = $_GET['id'];
	if ($deleteType == "" || $deleteId == "") {
		echo "Error!";
	}
	$user = $_SESSION['user_id'];

	if ($deleteType == "artical") {
		removeArticals($deleteId);
		echo "success";
		$location = "Location:./artical_list.php";
		header($location);
	}else if ($deleteType == "comment") {
		deleteComment($deleteId);
		echo "success";
		$location = "Location:./artical.php?aid=";
		header($location);
	}
?>
<?php
	function removeArticals($id)
	{
		$user = $_SESSION['user_id'];
		
		$sql = "SELECT * FROM `artical` WHERE artical_id=$id";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		$author = $row['editor'];
		if ($user != $author) {
			echo "You don't have permition to delete it!";
			return;
		}
		if ($row['father_artical'] != $id) {
			deleteArtical($id);
		}else {
			$sql = "SELECT * FROM `artical` WHERE father_artical=$id";
			$result = mysql_query($sql);
			for ($i = 0; $i < mysql_num_rows($result); $i++) {
				$row = mysql_fetch_array($result);
				deleteArtical($row['artical_id']);
			}
		}
	}
	function deleteArtical($id){
		$sql = "DELETE FROM `artical` WHERE artical_id=$id";
		mysql_query;
		removeComments($id);
	}
	function removeComments($id){
		$sql = "SELECT * FORM `comments` WHERE father_artical=$id";
		$result = mysql_query($sql);
		for ($i = 0; $i < mysql_num_rows($result); $i++) {
			$row = mysql_fetch_array($result);
			deleteComments($row['comments_id']);
		}
	}
	function deleteComment($id){
		$sql = "DELETE FROM `comments` WHERE comments_id=$id";
		mysql_query($sql);
	}
?>

