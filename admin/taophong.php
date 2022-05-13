<?php
include '../php/connection.php';
include '../php/check_ss_admin.php';
$i = 0;
$sql = "select tenphong from phong";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_row($result)){
    $tenphong[$i] = (int) $row[0];
    $i++;
}
?>
<html>
<meta charset="utf-8">
<script language="javascript" src="../js/Include.js"></script>
<div w3-include-html="../include/IncludeHead.html"></div> 

<body>

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
                        <form action="../php/taophong.php" class="form-hoadon" method="post">
                            <!--<div class="inputspan">
                                <span class="label label-info">Tên phòng</span>
                                <input type="text" name="inputTenPhong" id="inputTenPhong" required>
                            </div>-->
                            <div class="inputspan">
                                <span class="label label-info">Tên phòng</span>
                                <select name="inputTenPhong" id="inputTenPhong">
                                    <?php
                                        $i = 1;
                                        $dem = 1;
                                        for($i=1; $i<=100 && $dem<=10; $i++){
                                            if((int) in_array($i, $tenphong)==0){
                                                echo "<option value=".$i.">".$i."</option>";
                                                $dem++;
                                            } else {
                                                
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="inputspan">
                                <span class="label label-info">Mô tả</span>
                                <input type="text" name="inputMoTa" id="inputMoTa" >
                            </div>

                            <div class="inputspan">
                                <span class="label label-info">Giá phòng</span>
                                <input type="text" name="inputGiaPhong" id="inputGiaPhong" required onkeyup="checkInput_number();">
                                <br><p id="message_err" style="display: none; color: red;">Sai định dạng</p>
                            </div>

                            <div class="inputspan">
                                <span class="label label-info">Giá điện</span>
                                <input type="text" name="inputGiaDien" id="inputGiaDien" required onkeyup="checkInput_number();">
                                <br><p id="message_err1" style="display: none; color: red;">Sai định dạng</p>
                            </div>

                            <div class="inputspan">
                                <span class="label label-info">Giá nước</span>
                                <input type="text" name="inputGiaNuoc" id="inputGiaNuoc" required onkeyup="checkInput_number();">
                                <br><p id="message_err2" style="display: none; color: red;">Sai định dạng</p>
                            </div>
                            <div class="buttonConfirm"> 
                                <button type="button" class="btn btn-secondary" onclick="reset();">Nhập lại</button>                          
                                <button type="submit" class="btn btn-primary" id="btn_submit">Cập nhật</button>                      
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            includeHTML();
            function reset(){
                document.getElementById('inputTenPhong').value.reset;
                document.getElementById('inputMoTa').value.reset;
                document.getElementById('inputGiaPhong').value.reset;
                document.getElementById('inputGiaDien').value.reset;
                document.getElementById('inputGiaNuoc').value.reset;
            }

            function error1(){
                var check = false;
                let str = document.getElementById('inputGiaPhong').value;
                if(!format.test(str)){
                    alert(document.getElementById('message_err').style.display);
                    document.getElementById('message_err').style.display = 'block';
                } else {
                    document.getElementById('message_err').style.display ='none';
                    
                }

            }
            function checkInput_number(){
                var check = false;
                var format = new RegExp("^[1-9]{1}[0-9]{3,9}$");
                //Check gia phong
                let str = document.getElementById('inputGiaPhong').value;
                if(!format.test(str)){
                    check = false;
                    document.getElementById('message_err').style.display = 'block';
                } else {
                    check = true;
                    document.getElementById('message_err').style.display ='none';
                }
                //Check gia dien
                str = document.getElementById('inputGiaDien').value;
                if(!format.test(str)){
                    check = false;
                    document.getElementById('message_err1').style.display = 'block';
                } else {
                    check = true;
                    document.getElementById('message_err1').style.display = 'none';
                }
                //Check gia nuoc
                str = document.getElementById('inputGiaNuoc').value;
                if(!format.test(str)){
                    check = false;
                    document.getElementById('message_err2').style.display = 'block';
                } else {
                    check = true;
                    document.getElementById('message_err2').style.display = 'none';
                }
                document.getElementById('btn_submit').disabled = !check;
            }
        </script>
</body>

</html>