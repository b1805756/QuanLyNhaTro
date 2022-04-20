<?php
include 'connection.php';

$giadien = 0;
$gianuoc = 0;
$tenphong = $_GET['inputTP'];
$hoten = $_GET['inputHoTen'];
$giaphong = $_GET['inputGiaPhong'];
$csd = $_GET['inputCSD'];
$csn = $_GET["inputCSN"];
//Cau SQL
$sql = "select * from dongia;";

$result = mysqli_query($conn, $sql);
//Lay gia dien va gia nuoc
if($result){
    while ($row=mysqli_fetch_row($result)){
        $giadien = $row[0];
        $gianuoc = $row[1];
    }
}
//Tinh tong tien can thanh toan
$thanhtien = $csd*$giadien + $csn*$gianuoc + $giaphong;

//Cau SQL
$sql = "INSERT INTO hoadon VALUES (null,'".$hoten."', '".$tenphong."', ".$csd.", ".$csn.", ".$thanhtien.")";
$query = mysqli_query($conn, $sql);
if($query===TRUE){
    echo "<script language='javascript'>alert('Thêm thành công, nhấn OK để trở lại!');</script>";
    header( "refresh: 0.1;url=../admin/bill.php" );
}
?>