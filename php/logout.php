<?php
session_start();
if(isset($_SESSION['username'])&& $_SESSION['username'] != NULL){
    unset($_SESSION['username']);
    echo "<script language='javascript'>alert('Đăng xuất thành công!');</script>";
    header( "refresh: 0.1;url=../" );
} else {
    header( "refresh: 0.1;url=../" );
}
?>