<?php
include('./db_conn.php');

//1. 사용자가 입력한 비밀번호
$_pass = $_POST['password'];

//2. 진짜 비밀번호 --select
$_id = $_POST['b'];
$query = "select * from bbs where id=$_id";
$result=mysqli_query($conn, $query);//2차원 배열
$re = mysqli_fetch_row($result);
if($re[3]===$_pass){
    //string 비교시 equals() 함수 사용 자바에서도 동일
    $query="delete from bbs where id=$_id";
    mysqli_query($conn,$query);
    echo "삭제완료";

}else{
    echo "<script>alert('비밀번호 오류');history.go(-1);</script>";
}
?>
<meta http-equiv="refresh" content="0; url=http://localhost/bbs">