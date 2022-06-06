<?php
	$con = mysqli_connect("localhost","seokbangguri","1234","damda");
	$bno = $_GET['idx'];
    $sql = "DELETE FROM board WHERE idx = $bno";
    mysqli_query($con, $sql);
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=noti.php" />