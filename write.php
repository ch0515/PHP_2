<?php
//사용자가 입력한 값을 가지고 와서 변수 대입
$r_title=$_POST['title'];
$r_writer=$_POST['writer'];
$r_password=$_POST['password'];
$r_email=$_POST['email'];
$r_content=$_POST['content'];

$date=date('Y-m-d');


//mysql 접속
include('./db_conn.php');
//쿼리 날리기
$query = "insert into bbs(title, writer, password, email, content, regDate) value('$r_title','$r_writer','$r_password','$r_email','$r_content','$date')";
mysqli_query($conn, $query);
echo "<script>alert('데이터가 추가되었습니다.');</script>";

//종료
mysqli_close($conn);

?>