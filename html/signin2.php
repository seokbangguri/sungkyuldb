<?php


  $id = $_POST[ 'username' ];
  $pw = $_POST[ 'password' ];
  if ( !is_null( $username ) ) {
    
    $jb_conn = mysqli_connect( 'localhost', 'seokbangguri', '1234', 'damda' );
    $jb_sql = "SELECT password FROM login WHERE id = '" . $id . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'pw' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      if ( password_verify( $password, $encrypted_password ) ) {

        $sql = "insert into loginok (
			id
	    )";
	
	    $sql = $sql. "values (
	    		'$id'
	    )";

        header( 'Location: ../html/index.html' );
      } else {
        $wp = 1;
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>근현대사 미술관 담다</title>
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="../signup.css" rel="stylesheet" type="text/css">
    <meta name="description" content="근현대사 미술관 담다">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <script src="../prac1.js" defer></script>
    <script language="javascript">


    </script>

</head>
<body>
        <!--헤더-->
    <nav>
        <div id="naaav">
        <div class="logo">
            <a href="../html/index.html">
                근현대사미술관
            </a>
        </div>
        <ul>
            <li id="top"><a class="menu" href="../html/introduce.html">미술관 소개</a>
                <ul id="dropdown">
                    <li id= "item"><a href="../html/introduce.html">이사장 인사말</a></li>
                    <li id= "item"><a href="../html/introduce2.html">관장 인사말</a></li>
                    <li id= "item"><a href="../html/organization.html">조직도</a></li>
                    <li id= "item"><a href="../html/purpose.html">연혁</a></li>
                    <li id= "item"><a href="../html/purpose2.html">설립목적</a></li>
                </ul>
            </li>
            <li id="top"><a class="menu" href="../html/info.html">이용안내</a>
                <ul id="dropdown">
                    <li id= "item"><a href="../html/info.html">관람안내</a></li>
                    <li id= "item"><a href="../html/route.html">찾아오시는 길</a></li>
                </ul></li>
            <li id="top"><a class="menu" href="../html/culture.html">서비스</a>
                <ul id="dropdown">
                    <li id= "item"><a href="../html/culture.html">문화 프로그램</a></li>
                    <li id= "item"><a href="../html/service.html">갤러리 대관</a></li>
                </ul></li>
            <li id="top"><a class="menu" href="../html/e-index.html">English</a></li>
        </ul>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../html/introduce.html" id="mea">담다</a>
            <a href="../html/introduce.html" id="minmenu">이사장 인사말</a>
            <a href="../html/introduce2.html" id="minmenu">관장 인사말</a>
            <a href="../html/purpose.html" id="minmenu">연혁</a>
            <a href="../html/purpose2.html" id="minmenu">설립목적</a>
            <a href="../html/organization.html" id="minmenu">조직도</a>
            <a href="../html/info.html">이용안내</a>
            <a href="../html/info.html" id="minmenu">관람안내</a>
            <a href="../html/route.html" id="minmenu">오시는 길</a>
            <a href="../html/culture.html">서비스</a>
            <a href="../html/culture.html" id="minmenu">프로그램</a>
            <a href="../html/service.html" id="minmenu">갤러리 대관</a>
            <a href="../html/e-index.html">English</a>
    </div>
      
      <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">
        <div class="hamburger" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </span>
    </nav>
        <!--메인 컨텐츠-->
        <div class="content">
            <div class="welcome">
            <div class="sidetab" id="introside">
                <h3>서비스</h3><br>
                <h5>
                    <a href="../html/introduce.html">미술관 소개</a><br><br>
                    <a href="../html/info.html">이용안내</a><br><br>
                    <a href="../html/culture.html">서비스</a><br><br>
                </h5>
            </div>
                <div id="hi">
                
                    <form method="post" action="signin2.php" method="post">

                        <h1>Sign In</h1>
                        <p>담다 홈페이지 로그인</p>
                        <hr>
                      
                        <div class="container">
                          <label for="username"><b>아이디</b></label>
                          <input type="text" placeholder="Enter Username" name="username" required>
                      
                          <label for="pasword"><b>비밀번호</b></label>
                          <input type="password" placeholder="Enter Password" name="password" required>
                      
                          <button type="submit">Login</button>
                          <?php
                            
                            if ( $wu == 1 ) {
                            echo "<p>사용자이름이 존재하지 않습니다.</p>";
                            }
                            if ( $wp == 1 ) {
                              echo "<p>비밀번호가 틀렸습니다.</p>";
                            }
                          ?>
                        </div>
                      
                      </form>
                </div>
            </div>
        </div>
        <!--저작권 파트-->
        <footer>
            <div class="footer-content">
                <p>
                    근현대사 미술관 담다
                    <a href="https://band.us/n/a6a94f63g8Xa3"><img src="../images/band.png" alt="band" width="20" height="20"></a>
                    <a href="https://www.facebook.com/%EA%B7%BC%ED%98%84%EB%8C%80%EC%82%AC%EB%AF%B8%EC%88%A0%EA%B4%80%EB%8B%B4%EB%8B%A4-332929684309604"><img src="../images/facebook.png" alt="facebook" width="20" height="20"></a>
                </p>
            </div>
            <div class="footer-bottom">
                <p>ⓒ 2022.홍석진. All rights reserved.</p>
            </div>
        </footer>
</body>
</html>