<?php
include '../php/check_ss_admin.php';
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
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="bordermain">
                <a href="../admin/quanlyphong.html">
                  <img class="img-thumbnail" src="./img/quanlyphong.png" alt="">                
                </a> 
                <h5>Quản lý phòng</h5>
              </div>
            </div>
            
            <div class="col">
              <div class="bordermain">
                <a href="../admin/quanlyhoadon.html">
                  <img class="img-thumbnail" src="./img/bill.png" alt="">
                 
                </a>
                <h5> Quản lý hóa đơn</h5>
                

              </div>
            </div>
            



          </div>
        </div>       
    </div>
  </div>

  <script>
    includeHTML();
    </script>
</body>

</html>

