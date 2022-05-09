<?php
session_start();
if(isset($_SESSION['username'])&&$_SESSION['username']=='admin'){

} else {
    header( "refresh: 0.1;url=../" );
}
?>