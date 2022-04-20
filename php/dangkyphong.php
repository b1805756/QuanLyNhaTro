<?php
include 'connection.php';
$hoten = $_POST['inputHoTen'];
$cccd = $_POST['inputCMND'];
$ngaysinh = $_POST['inputNgaySinh'];
$quequan = $_POST['inputQueQuan'];
$sodienthoai = $_POST['inputSDT'];
$gioitinh = $_POST['GioiTinh'];
$tenphong = $_POST['inputTenPhong'];
$ngaychothue = $_POST['inputNgayChoThue'];

echo $hoten."<br>".$cccd."<br>".$ngaysinh."<br>".$quequan."<br>".$sodienthoai."<br>".$gioitinh."<br>".$tenphong."<br>".$ngaychothue;

$sql = "INSERT INTO qlchothue VALUES ('".$cccd."', '".$hoten."', '".$gioitinh."', '".$ngaysinh."', '".$quequan."', '".$sodienthoai."', ".$tenphong.", '".$ngaychothue."')";

$query = mysqli_query($conn, $sql);

if($query === true){
    echo "<script language='javascript'>alert('Thêm thành công, nhấn OK để trở lại!');</script>";
    header( "refresh: 0.1;url=../admin/dangkiphong.html" );
}
else {
    echo "<script language='javascript'>alert('Có lỗi xảy ra, thử lại lần sau!');</script>";
    header( "refresh: 0.1;url=../admin/dangkiphong.html" );
}
?>