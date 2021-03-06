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
                <div id="fee">
                    <h1>자유게시판</h1>
                      <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
                <table class="list-table">
                <thead>
                  <tr>
                      <th width="60">번호</th>
                        <th width="500">제목</th>
                        <th width="120">글쓴이</th>
                        <th width="100">작성일</th>
                    </tr>
                </thead>
                <?php
                    $con = mysqli_connect("localhost","seokbangguri","1234","damda");
                    $c1_d = $_POST["c1"];
                    $sql = "SELECT * FROM board order by idx desc limit 0,10";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                        //echo $row['idx']."   ";
                        //echo "<a href='simple.html'>". $row['title']."</a>   ";
                        //echo $row['name'];
                
                        //print "<br><a href='simple.html'>메인 화면으로</a>";
                        //
                        //print "<tbody>"
                        //print "<tr>"
                        //echo "<td width="70">".$row['idx']."</td>";
                        //echo "<td width="500"><a href="aaa">".$board['title']."</a></td>";
                        //echo "<td width="120">".$row['name']."</td>";
                        //echo "<td width="100">".$row['date']."</td>";
                        ?>
                        <tbody>
                          <tr>
                            <td width="70"><?php echo $row['idx']; ?></td>
                            <td width="500"><a href="read.php?idx=<?php echo $row['idx'];?>"><?php echo $row['title'];?></a></td>
                            <td width="120"><?php echo $row['name']?></td>
                            <td width="100"><?php echo $row['date']?></td>
                          </tr>
                        </tbody>
                        <?php } ?>
                </table>
                <div id="write_btn">
                  <a href="write.php"><button>글쓰기</button></a>
                </div>
                </div>
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