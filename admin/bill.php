<?php 

include '../php/connection.php';
echo '
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        $sql = "SELECT ql.hoten, p.tenphong, ql.cccd FROM phong p, qlchothue ql WHERE p.tenphong IN (SELECT tenphong FROM qlchothue) AND p.tenphong = ql.tenphong";
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
</head>

<script language="javascript" src="../js/Include.js"></script>


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
                        <form action="../php/themhoadon.php" class="form-hoadon" method="GET">
                            <div class="inputspan">                              
                                <lable>Phòng</lable>
                                <select style="width:300px" name="inputTP" id="inputTenPhong" onchange="hienThiTen();">
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
                                <input type="text" name="inputCCCD" id="inputCCCD" readonly>
                            </div>
                            <div class="inputspan">
                                <span class="label label-info">Người đại diện thuê</span>
                                <input type="text" name="inputHoTen" id="inputHoTen" readonly>
                            </div>
    
                            <div class="inputspan">
                                <span class="label label-info">Giá phòng</span>
                                <input type="text" name="inputGiaPhong" id="inputGiaPhong" readonly>
                            </div>
    
                            <div class="inputspan">
                                <span class="label label-info">Chỉ số điện</span>                              
                                <input type="text" name="inputCSD" id="inputCSD">
                                </div>
                            
                            <div class="inputspan">
                                <span class="label label-info">Chỉ số nước</span>
                                <input type="text" name="inputCSN" id="inputCSN">
                            </div>
                            <div class="inputspan">
                                <span class="label label-info">Chi phí khác</span>
                                <input type="text" name="inputPhiKhac" id="inputPhiKhac">
                            </div>
                            <br>                  
                            <div class="buttonConfirm">
                                <button type="button" class="btn btn-outline-secondary">Nhập lại</button>
                                <button type="submit" class="btn btn-outline-primary">Cập nhật</button>
                            </div><br><br>
                      
                        </form>

                        <table class="table table-hover">
                        <thead>
                        <tr>
                          <th scope="col">Số phòng</th>
                          <th scope="col">CCCD</th>
                          <th scope="col">Mô tả</th>
                          <th scope="col">Người đại diện thuê</th>
                          <th scope="col">Giá phòng</th>
                          <th scope="col">Chỉ số điện</th>
                          <th scope="col">Chỉ số nước</th>
                          <th scope="col">Chi phí khác</th>
                        </tr>
                      </thead>
                      <tbody>
                      <td> test suong suong </td>
                      <td> test suong suong </td>
                      </tbody>
                    </table>

                    </div>             
                </div>
            </div>
        </div>
        <script language="javascript">
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