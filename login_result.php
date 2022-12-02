<?php
//uid, upass의 값을 가져오기

include('./db_conn.php');

$_userid = $_POST['userid'];
$_userpass = $_POST['userpass'];

$query = "select * from bbs where uid='$_userid' && upassword='$_userpass'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if($count==0){
    echo "<script>alert('비밀번호, 아이디 입력 오류');history.go(-1);</script>";
}else{
    setcookie('userid', $userid, time()+3600);
    echo "1";
    setcookie('userpass', $userpass, time()+3600);
    echo "2";
    echo "<meta http-equiv='refresh' content= '0;url=write.html'>";
}
?>