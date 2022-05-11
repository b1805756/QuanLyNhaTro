<?php
include '../php/check_ss_user.php';
?>
<html>
<meta charset="utf-8" />
<script language="javascript" src="../js/Include.js"></script>

<div w3-include-html="../include/IncludeHead.html"></div> 

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="colmenu">
        <div class="menu">
          <div w3-include-html="../include/IncludeMenuUser.html"></div> 
        </div>



      </div>
            <div class="col" style="margin-top: 15%; margin-left: 20%;">

                <div class="card-group">
                    <div class="card">

                        <div class="card-body" style="margin-left: 10%;">

                            <a href="../user/UserBill.php" class="btn btn-primary">

                                <img class="card-img-top" style="width: 300px; height: 300px;"
                                    src="../user/img/bill.png"
                                    alt="" >
                                <h5 class="card-title">Xem hóa đơn</h5>
                                


                            </a>
                        </div>

                    </div>
                    <div class="card">

                        <div class="card-body">

                            <a href="../user/danhsachphongUser.php" class="btn btn-primary">
                                <img class="card-img-top" style="width: 300px; height: 300px;"
                                    src="../user/img/danhsachphong.png"
                                    alt="">
                                <h5 class="card-title">Xem phòng trống</h5>
                            </a>
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