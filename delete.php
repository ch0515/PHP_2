<?php
include('./db_conn.php');

//1. 사용자가 입력한 비밀번호
$_pass = $_POST['password'];

//2. 진짜 비밀번호 --select
$_id = $_POST['b'];
$query = "select * from bbs where id=$_id";
$result=mysqli_query($conn, $query);//2차원 배열
$re = mysqli_fetch_row($result);
if($_pass==$re[3]){
    $query="delete from bbs where id=$_id";
    mysqli_query($conn,$query);
    echo "삭제완료";
}else{
    echo "<script>alert('비밀번호 오류');history.go(-1);</script>";
}
?>