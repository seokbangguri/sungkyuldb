<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

	$host = 'localhost';
	$user = 'seokbangguri';
	$pw = '1234';
	$dbName = 'damda';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$id = $_POST['email'];
	$id = addslashes($id);
    $password = $_POST['pw'];
	$password = addslashes($password);
    $un = $_POST['name'];
	$un = addslashes($un);
	$pn = $_POST['pn'];
	$pn = addslashes($pn);
    $address = $_POST['address'];
	$address = addslashes($address);
    $nation = $_POST['nation'];
	$nation = addslashes($nation);
	$school = $_POST['school'];
	$school = addslashes($school);
    
    $check="SELECT * from login WHERE member_email ='$id'";
    $result=$mysqli->query($check);
    if($result->num_rows==1)
    {
        echo "중복된 id입니다.";
        echo "<a href=signup.html>back page</a>";
        exit();
    }
	else{
		$sql = "insert into member (
				member_email,
				member_pw_1,
    	        member_name,
				member_phone,
				member_address,
				member_nation,
				member_school
		)";
		
		$sql = $sql. "values (
				'$id',
				'$password',
    	        '$un',
				'$pn',
				'$address',
				'$nation',
				'$school'
		)";
	}

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
