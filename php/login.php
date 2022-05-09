<?php
include 'connection.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM taikhoan WHERE CCCD='".$username."' AND MatKhau='".$password."'";
$result = mysqli_query($conn, $sql);
if($row=mysqli_fetch_row($result)){
    $_SESSION['username'] = $username;
    $role = $row[3];
    if ($role==1){
        echo "<script language='javascript'>alert('Đăng nhập thành công, xin chào ADMIN!');</script>";
        header( "refresh: 0.1; url=../admin/" );
    }
    else {
        echo "<script language='javascript'>alert('Đăng nhập thành công!');</script>";
        header( "refresh: 0.1; url=../user/" );
    }
}
else {
    echo "<script language='javascript'>alert('Sai tên đăng nhập hoặc mật khẩu!');</script>";
    header( "refresh: 0.1; url=../" );
}

?>