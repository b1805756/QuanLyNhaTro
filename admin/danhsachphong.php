<?php 
include '../php/connection.php';
//Cau truy van
$sql = "SELECT * FROM phong";
//Thuc hien truy van
$result = mysqli_query($conn,$sql);

echo '
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">
</head>

<script language="javascript" src="/js/Include.js"></script>


<body>

  <div class="container-fluid">
    <div class="row">
      <div class="colmenu">
        <div class="menu">
          <div w3-include-html="/include/includemenu.html"></div> 
        </div>



      </div>


            <div class="col">
              <div class="colDSP">
                <div class="container">
                  <div class="form-select" style="width: fit-content; padding: 0px 0px 0px 0px;">
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                          <option selected>Trạng thái phòng</option>
                          <option value="1">Trống</option>
                          <option value="2">Tất cả</option>                          
                        </select>
                  </div>
                  
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Số phòng</th>
                          <th scope="col">Giá phòng</th>
                          <th scope="col">Trạng thái</th>
                          <th scope="col">Mô tả</th>
                          <th scope="col">Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                      ';
                      if ($result) { //Kiem tra ket qua tra ve khac rong
                        // Hàm mysql_fetch_row() sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                        // Sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng
                        while ($row=mysqli_fetch_row($result)) {
                        
                          echo "<tr>";
                          echo "<td>" . $row[0] . "</td>";
                          echo "<td>" . $row[1] . "</td>";
                          echo "<td>" . $row[2] . "</td>";
                          echo "<td>" . $row[3] . "</td>";
                          echo "<td><input type='button' class='btn btn-outline-secondary' name='Sua' value='Sửa'>
                          <input type='button' class='btn btn-outline-primary' name='Xoa' value='Xóa'>
                          </td>";
                          
                          echo "</tr>";
                        }
                      }
                       echo '
                      </tbody>
                    </table>
              </div>
              </div>                        
                                
                
            </div>
            <script>
            includeHTML();
            </script>

</body>

</html>'
?>