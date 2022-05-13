<?php
include '../php/connection.php';
$mahd = $_POST['mahd'];
$sql = "DELETE FROM hoadon WHERE mahd='".$mahd."'";
$query = mysqli_query($conn, $sql);
if($query===TRUE){
    echo "<script language='javascript'>alert('Xoá thành công, nhấn OK để trở lại!');</script>";
    header( "refresh: 0.1;url=../admin/XemBill.php" );
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>