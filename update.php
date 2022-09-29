<?php
include('./db_conn.php');
//디비 접속
//select 쿼리 날려서
$w_idx = $_POST['a'];
$w_title = $_POST['title'];
$w_writer = $_POST['writer'];
$w_email = $_POST['email'];
$w_password = $_POST['password'];
$w_content = $_POST['content'];
$query = "select * from bbs where id=$w_idx"; //or "select password from bbs where id=$w_idx";
//mysqli_query()
$result = mysqli_query($conn, $query);
$re = mysqli_fetch_row($result);
//password가 들어있는 배열 방을 출력
// echo "password".$re[3];

//2. 사용자가 입력한 패스워드 출력
// echo "사용자 입력 password".$w_password;

//$re[3] 과 $_password가 같으면 수정
if($re[3] == $w_password){
    $query = "update bbs set title = '$w_title',writer = '$w_writer',email = '$w_email',content = '$w_content' 
          where id= $w_idx";

mysqli_query($conn,$query);
echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류'); history.go(-1);</script>";
}



?>