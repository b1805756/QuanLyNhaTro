<?php
session_start();
if(isset($_SESSION['username'])){
    if($_SESSION['username']=='admin'){
        header( "refresh: 0.1; url=./admin/" );
    } else {
        header( "refresh: 0.1; url=./user/" );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../QuanLyNhaTro/css/style2.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div id="wrapper">
        <form method="post" action="./php/login.php" id="form-login">
           
            <img src="./img/logo1.png" alt="" style="margin: 0 10%; width: 80%; height: 80%" >
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-group">
                 <i class="fas fa-eye"></i>
                <input type="password" class="form-input" name="password" placeholder="Mật khẩu" id ="passwd" required>
                <div id="eye">
                        <i id="showbtn" class="fas fa-eye" onclick="showPass()">
                            Hiện
                        </i>
                </div>
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit">
        </form>
    </div>
</body>
<script  type="text/javascript">
    var hide = true;
    function showPass(){
        if(hide){
            document.getElementById('passwd').type = 'text';
            document.getElementById('showbtn').innerHTML = 'Ẩn';
            hide = !hide;
        }
        else{
            document.getElementById('passwd').type = 'password';
            document.getElementById('showbtn').innerHTML = 'Hiện';
            hide = !hide;
        }
    }
</script>

</html>