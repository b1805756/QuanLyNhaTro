<?php
include 'connection.php';
$tenphong = $_POST['inputTenPhong'];
$giaphong = $_POST['inputGiaPhong'];
$mota = $_POST['inputMoTa'];
$trangthai = 0;

//Cau truy van
$sql = "INSERT INTO phong VALUES ('".$tenphong."','".$giaphong."','".$mota."','".$trangthai."')";
$query = mysqli_query($conn, $sql);
if($query===TRUE){
    echo "<script language='javascript'>alert('Thêm thành công, nhấn OK để trở lại!');</script>";
    header( "refresh: 0.1;url=../admin/taophong.html" );
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>