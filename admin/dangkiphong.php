<?php include '../php/connection.php';
    $sql = "select count(tenphong) from phong where trangthai=0";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_row($result);
        if($row[0]==0){
            echo "<script language='javascript'>alert('Hết phòng trống, không thể đăng ký thêm!');</script>";
            echo "<script> history.go(-1)</script>";
        }
    }
?>
<html>
<meta charset="utf-8">
<script language="javascript" src="../js/Include.js"></script>
<div w3-include-html="../include/IncludeHead.html"></div> 
<body style="height: 1288px;">

    

        <div class="container-fluid">
          <div class="row">
            <div class="colmenu">
              <div class="menu">
                <div w3-include-html="../include/IncludeMenu.html"></div> 
              </div>
      
      
      
            </div>
            <div class="col">
                <div class="colhoadon">
                    <div class="container">

                        <form action="../php/dangkyphong.php" class="form-hoadon" method="post">
                            <p style="font-size: x-large;"> Thông tin người cho thuê </p>
                            
                            <div class="inputspan">
                                <span class="label label-info">Họ tên đầy đủ:</span>
                                <input type="text" name="inputHoTen" id="">

                            </div>

                            <div class="inputspan">
                                <span class="label label-info">CMND/CCCD</span>
                                <input type="text" name="inputCMND" id="">
                            </div>

                            <div class="inputspan">
                                <span class="label label-info">Ngày sinh</span>
                                <input type="date" name="inputNgaySinh" id="">
                            </div>



                            <div class="inputspan">
                                <span class="label label-info">Quê quán</span>
                                <input type="text" name="inputQueQuan" id="">
                            </div>

                            <div class="inputspan">
                                <span class="label label-info">Số điện thoại</span>
                                <input type="text" name="inputSDT" id="">
                            </div>

                            <div class="inputspan">
                                Giới tính
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="GioiTinh" id="GioiTinh1" value="Nam">
                                    <label class="form-check-label" for="GioiTinh1">
                                      Nam
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="GioiTinh" id="GioiTinh2" value="Nữ" checked>
                                    <label class="form-check-label" for="GioiTinh2">
                                      Nữ
                                    </label>
                                  </div>                               
                                </div>
                                <p style="font-size: x-large;"> Thông tin phòng cho thuê </p>
                            <div class="inputspan">
                                <span class="label label-info">Tên phòng</span>
                                <select name="inputTP" id="inputTenPhong">
                                <?php
                                $sql = "select tenphong from phong where trangthai=0";
                                $result = mysqli_query($conn, $sql);
                                if(!($result==null)){
                                    while($row=mysqli_fetch_row($result)){
                                        echo '<option value='.$row[0].'>'.$row[0].'</option>';
                                    }
                                }
                                ?>
                                </select>
                            </div>

                            <div class="inputspan">
                                <span class="label label-info">Ngày cho thuê</span>
                                <input type="date" name="inputNgayChoThue" id="">
                            </div>
                           

                            <br><br>                          
                            <div class="buttonConfirm">
                                <button type="button" class="btn btn-secondary">Nhập lại</button>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <br><br></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            includeHTML();
            </script>
</body>
</html>