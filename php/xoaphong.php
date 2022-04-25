<?php
include '../php/connection.php';
$tenphong = $_POST['tenphong'];
$sql = "DELETE FROM phong WHERE tenphong='".$tenphong."'";
$query = mysqli_query($conn, $sql);
if($query===TRUE){
    echo "<script language='javascript'>alert('Thêm thành công, nhấn OK để trở lại!');</script>";
    header( "refresh: 0.1;url=../admin/danhsachphong.php" );
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>