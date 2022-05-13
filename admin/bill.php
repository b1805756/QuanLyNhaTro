<?php 

include '../php/connection.php';
echo '
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
<title>QUẢN LÝ NHÀ TRỌ </title>
    <script language="javascript">
        var hoten = new Array();
        var gia = new Array();
        var cccd = new Array();
        ';
        
        $sql = "select giaphong, tenphong from phong";
        $result = mysqli_query($conn, $sql);
        $i = 0;
        if($result){
            while($row=mysqli_fetch_row($result)){
                echo '
                    gia['.$row[1].'] = '.$row[0].';
                ';
                $i++;
            }
        }

        $sql = "SELECT ql.hoten, p.tenphong, ql.cccd FROM phong p, (SELECT * FROM qlchothue WHERE NgayTraPhong IS NULL) ql WHERE p.tenphong = ql.tenphong";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_row($result)){
                echo '
                    hoten['.$row[1].'] = "'.$row[0].'";
                    cccd['.$row[1].'] = "'.$row[2].'";
                ';
            }
        }
echo '
    </script>
    <script language="javascript" src="../js/Include.js"></script>
</head>




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
                    <div class="container" style="margin_left:100px">
                        <form action="../php/themhoadon.php" class="form-hoadon" style="margin-left: inherit;" method="GET">
                            <div class="inputspan">                              
                                <lable>Phòng</lable>
                                <select name="inputTP" id="inputTenPhong" onmouseenter="hienThiTen();" onchange="hienThiTen();">
                                ';
                                $sql = "SELECT tenphong from phong where trangthai=1";
                                $result = mysqli_query($conn, $sql);
                                if($result){
                                    while($row=mysqli_fetch_row($result)){
                                        echo "
                                        <option value='".$row[0]."'>".$row[0]."</option>;
                                        ";
                                    }
                                }
echo 
                            '
                            </select>
                            </div>
    
                            <div class="inputspan">
                                <span class="label label-info">CCCD</span>
                                <input type="text" name="inputCCCD" id="inputCCCD" readonly required>
                            </div>
                            <div class="inputspan">
                                <span class="label label-info">Người đại diện thuê</span>
                                <input type="text" name="inputHoTen" id="inputHoTen" readonly required>
                            </div>
    
                            <div class="inputspan">
                                <span class="label label-info">Giá phòng</span>
                                <input type="text" name="inputGiaPhong" id="inputGiaPhong" readonly required>
                            </div>
    
                            <div class="inputspan">
                                <span class="label label-info">Chỉ số điện</span>                              
                                <input type="text" name="inputCSD" id="inputCSD" onkeyup="check();" required> 
                                </div>
                            
                            <div class="inputspan">
                                <span class="label label-info">Chỉ số nước</span>
                                <input type="text" name="inputCSN" id="inputCSN" onkeyup="check();" required>
                            </div>
                            <div class="inputspan">
                                <span class="label label-info">Chi phí khác</span>
                                <input type="text" name="inputPhiKhac" id="inputPhiKhac" onkeyup="check();">
                            </div>
                            <br>                  
                            <div class="buttonConfirm">
                                <button type="button" class="btn btn-outline-secondary" id="reset_btn" onclick="reset();">Nhập lại</button>
                                <button type="submit" class="btn btn-outline-primary" id="submit_btn">Cập nhật</button>
                            </div><br><br>
                      
                        </form>

                        <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Mã HD</th>
                            <th scope="col">Số phòng</th>
                            <th scope="col">CCCD</th>
                            <th scope="col">Người đại diện thuê</th>
                            <th scope="col">Giá phòng</th>
                            <th scope="col">Chỉ số điện</th>
                            <th scope="col">Chỉ số nước</th>
                            <th scope="col">Chi phí khác</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                        </thead>';
                        $sql = "SELECT hd.mahd, hd.tenphong, ql.CCCD, ql.HoTen, p.giaphong, hd.csdien, hd.csnuoc, hd.chiphikhac, hd.thanhtien FROM hoadon hd, (SELECT * FROM qlchothue /*WHERE NgayTraPhong IS NULL*/) ql, phong p where (hd.tenphong=ql.TenPhong) AND (hd.tenphong=p.tenphong);";
                        $result = mysqli_query($conn,$sql);
                        if($result) { //Kiem tra ket qua tra ve khac rong
                            while($row=mysqli_fetch_row($result)){
                                echo '
                                <tbody>
                                    <td>'.$row[0].'</td>
                                    <td>'.$row[1].'</td>
                                    <td>'.$row[2].'</td>
                                    <td>'.$row[3].'</td>
                                    <td>'.$row[4].'</td>
                                    <td>'.$row[5].'</td>
                                    <td>'.$row[6].'</td>
                                    <td>'.$row[7].'</td>
                                    <td>'.$row[8].'</td>
                                </tbody>';
                            }
                        }
echo                '</table>

                    </div>             
                </div>
            </div>
        </div>
        <script language="javascript">
        const regex_number = new RegExp(/^[0-9]{1,12}$/);
        var validation = false;
        function reset(){
            document.getElementById("inputCCCD").value = "";
            document.getElementById("inputHoTen").value = "";
            document.getElementById("inputGiaPhong").value = "";
            document.getElementById("inputCSD").value = "";
            document.getElementById("inputCSN").value = "";
            document.getElementById("inputPhiKhac").value = "";

        }
        function check(){
            var ipCSD = document.getElementById("inputCSD").value;
            var ipCSN = document.getElementById("inputCSN").value;
            var ipPhiKhac = document.getElementById("inputPhiKhac").value;
            if(regex_number.test(ipCSD)&&regex_number.test(ipCSN)&&regex_number.test(ipPhiKhac)){
                document.getElementById("submit_btn").disabled = false;
            }
            else {
                document.getElementById("submit_btn").disabled = true;
            }
        }


        function hienThiTen(){
            let tenPhong = document.getElementById("inputTenPhong");
            let result = tenPhong.options[tenPhong.selectedIndex].value;
            document.getElementById("inputCCCD").value = cccd[result];
            document.getElementById("inputHoTen").value = hoten[result];
            document.getElementById("inputGiaPhong").value = gia[result];
            console.log(document.getElementById("lb_inputCSD").value);
        }
        </script>
        <script>
        includeHTML();
        </script>
</body>
</html>'
?>