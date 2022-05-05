<?php
include 'connection.php';

$giadien = 0;
$gianuoc = 0;
$tenphong = $_GET['inputTP'];
$hoten = $_GET['inputHoTen'];
$giaphong = $_GET['inputGiaPhong'];
$csd = $_GET['inputCSD'];
$csn = $_GET['inputCSN'];
$phikhac = $_GET['inputPhiKhac'];
//Cau SQL
$sql = "SELECT giadien, gianuoc from dongia where tenphong=".$tenphong;

$result = mysqli_query($conn, $sql);
//Lay gia dien va gia nuoc
if($result){
    while ($row=mysqli_fetch_row($result)){
        $giadien = (int) $row[0];
        $gianuoc = (int) $row[1];
    }
}
//Tinh tong tien can thanh toan
$thanhtien = $csd*$giadien + $csn*$gianuoc + (int) $phikhac + $giaphong;

//Cau SQL
$sql = "INSERT INTO hoadon VALUES (NULL, '".$tenphong."', '".$csd."', '".$csn."', '".$phikhac."', '".$thanhtien."')";
$query = mysqli_query($conn, $sql);
if($query===TRUE){
    echo "<script language='javascript'>alert('Thêm thành công, nhấn OK để trở lại!');</script>";
    header( "refresh: 0.1; url=../admin/bill.php" );
}
?>