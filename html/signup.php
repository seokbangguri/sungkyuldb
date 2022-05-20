<html>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

	$host = 'localhost';
	$user = 'seokbangguri';
	$pw = '1234';
	$dbName = 'damda';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$id = $_POST['id'];
	$id = addslashes($id);
    $pw = $_POST['pw'];
    $pw = addslashes($pw);
    $un = $_POST['un'];
    $un = addslashes($un);
    

	$sql = "insert into login (
			id,
			pw,
            un
	)";
	
	$sql = $sql. "values (
			'$id',
			'$pw',
            '$un'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("success inserting")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "signup.html";
</script>

</html>
