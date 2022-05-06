<?php
include 'connection.php';
$hoten = $_POST['inputHoTen'];
$cccd = $_POST['inputCMND'];
$ngaysinh = $_POST['inputNgaySinh'];
$quequan = $_POST['inputQueQuan'];
$sodienthoai = $_POST['inputSDT'];
$gioitinh = $_POST['GioiTinh'];
$tenphong = $_POST['inputTP'];
$ngaychothue = $_POST['inputNgayChoThue'];

$success = true;

// echo $hoten."<br>".$cccd."<br>".$ngaysinh."<br>".$quequan."<br>".$sodienthoai."<br>".$gioitinh."<br>".$tenphong."<br>".$ngaychothue;

$sql = "SELECT trangthai FROM phong WHERE tenphong='".$tenphong."' and trangthai='0'";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "<script language='javascript'>alert('Phòng ".$tenphong." đã được đăng ký!');</script>";
    header("refresh: 0.1;url=../admin/dangkiphong.html" );
}
else {
    $sql = "INSERT INTO qlchothue VALUES ('".$cccd."', '".$hoten."', '".$ngaysinh."', '".$quequan."', '".$sodienthoai."', '".$gioitinh."', '".$tenphong."', '".$ngaychothue."',null);";
    $query = mysqli_query($conn, $sql);
    
    if($query === true){
        header( "refresh: 0.1;url=../admin/dangkiphong.php" );
        $sql = "UPDATE phong SET trangthai = 1 WHERE tenphong='".$tenphong."'";
        $query = mysqli_query($conn, $sql);
        if($query === true){
            echo "<script language='javascript'>alert('Thêm thành công, nhấn OK để trở lại!');</script>";
        }
        else {
            echo "<script language='javascript'>alert('Có lỗi xảy ra, thử lại lần sau!');</script>";
        }
    }
    else {
        echo "<script language='javascript'>alert('Lỗi cập nhật trạng thái phòng, thử lại lần sau!');</script>";
        header( "refresh: 0.1;url=../admin/dangkiphong.php" );
    }

    $sql = "INSERT INTO taikhoan VALUES ('".$cccd."', 1,".$tenphong.",'')";
    $query = mysqli_query($conn, $sql);
    if($query === true){
        echo "<script language='javascript'>alert('Thêm thành công! Tài khoản là số CCCD, mật khẩu mặc định là '1'');</script>";
        header( "refresh: 0.1;url=../admin/dangkiphong.php" );
    }
    else {
        echo "<script language='javascript'>alert('Lỗi thêm tài khoản, thử lại lần sau!');</script>";
        header("refresh: 0.1;url=../admin/dangkiphong.php" );
    }
}
?>