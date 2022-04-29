<?php
include 'connection.php';
$tenphong = $_POST['tenphong'];
$sql = "UPDATE phong SET trangthai=0 WHERE tenphong=".$tenphong;
$query = mysqli_query($conn, $sql);
if($query===true){
    $sql = "UPDATE qlchothue SET NgayTraPhong=CURRENT_DATE() WHERE TenPhong=".$tenphong;
    $query = mysqli_query($conn, $sql);
    if($query===true){
        echo "<script language='javascript'>alert('Cập nhật thành công, nhấn OK để trở lại!');</script>";
        header( "refresh: 0.1; url=../admin/danhsachphong.php" );
    } else {
        echo "<script language='javascript'>alert('Không thể cập nhật trạng thái phòng, thử lại lần sau!');</script>";
        header( "refresh: 0.1; url=../admin/danhsachphong.php" );
    }
} else {
    echo "<script language='javascript'>alert('Không thể cập nhật trạng thái phòng, thử lại lần sau!');</script>";
    header( "refresh: 0.1; url=../admin/danhsachphong.php" );
}
?>