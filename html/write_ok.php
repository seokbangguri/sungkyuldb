<?php

$con = mysqli_connect("localhost","seokbangguri","1234","damda");

$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

$sql = "insert into board (
    name,pw,title,content,date
)";
$sql = $sql. "values(
    '$username',
    '$userpw',
    '$title',
    '$content',
    '$date'
)";

if($con->query($sql)){
    echo '<script>alert("success inserting")</script>';
}
else{
    echo '<script>alert("fail to insert sql")</script>';
}
mysqli_close($mysqli);

?>
 <script>
     location.href = "noti.php";
</script>