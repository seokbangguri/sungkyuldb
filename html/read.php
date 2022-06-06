<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>근현대사 미술관 담다</title>
    <link href="../style.css" rel="stylesheet" type="text/css">
    <meta name="description" content="근현대사 미술관 담다">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <script src="../prac1.js" defer></script>
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
                        <li id= "item"><a href="../html/noti.php">자유게시판</a></li>
                    <li id= "item"><a href="../html/culture.html">문화 프로그램</a></li>
                    <li id= "item"><a href="../html/service.html">갤러리 대관</a></li>
                </ul></li>
            <li id="top"><a class="menu" href="signin.php">로그인</a></li>
            <li id="top"><a class="menu" href="signup.html">회원가입</a></li>
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
        <a href="../html/signin.php">로그인</a>
        <a href="../html/signup.html">회원가입</a>
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
            <div class="sidetab">
                <h3>서비스</h3><br>
                <h5>
                    <a href="../html/culture.html">문화 프로그램</a><br><br>
                    <a href="../html/service.html">갤러리 공간 대여</a>
                </h5>
            </div>
                <div id="hi">
                <h2>자유게시판</h2>
                <h4>글을 작성하는 공간입니다.</h4>
                <?php
                        $con = mysqli_connect("localhost","seokbangguri","1234","damda");
                        
                        $bno = $_GET['idx'];
                		$sql = "select * from board where idx=$bno"; /* 받아온 idx값을 선택 */
                		$result = mysqli_query($con, $sql);
                        while($board = mysqli_fetch_assoc($result)) {
                	?>
                <!-- 글 불러오기 -->
                	<h3><?php echo "제목 : ".$board['title']; ?></h3>
                		<div id="user_info">
                			작성자 : <?php echo $board['name']; ?> <?php echo $board['date']; ?>
                		
                		</div>
                        <br><br><hr><br>
                		<div id="bo_content">
                			<?php echo nl2br("$board[content]"); ?>
                		</div>
                        <br><hr><br><br>
                	<!-- 목록, 수정, 삭제 -->
                	<div id="bo_ser">
                		<ul>
                			<li><a href="noti.php">[목록으로]</a></li>
                			<li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
                		</ul>
                	</div>
                    <?php } ?>
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