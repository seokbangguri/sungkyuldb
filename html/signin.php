<html>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php


  $un = $_POST[ 'username' ];
  $pw = $_POST[ 'password' ];
  if ( !is_null( $username ) ) {
    
    $jb_conn = mysqli_connect( 'localhost', 'seokbangguri', '1234', 'damda' );
    $jb_sql = "SELECT password FROM login WHERE username = '" . $un . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'pw' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      if ( password_verify( $password, $encrypted_password ) ) {
        header( 'Location: login-ok.php' );
      } else {
        $wp = 1;
      }
    }
  }
?>

<script>
	location.href = "signin2.php";
</script>

</html>