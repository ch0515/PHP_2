<?php

if(!isset($_COOKIE['userid']) || !isset($_COOKIE['userpass'])){
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}
$_userid = $_COOKIE['userid'];
$_passwd = $_COOKIE['userpass'];

echo $_userid."님 반갑습니다";

echo "<meta http-equiv='refresh' content='5; url=write.html'>";

?>
<a href="logout.php">로그아웃</a>