<?php
  require_once "./database.php";
?>

<?php

$error = '';
$name = '';
$phone = '';
$email = '';
$des = '';
$detail = '';
if (isset($_POST['name']) && isset($_POST['sdt']) && isset($_POST['mail']) && isset($_POST['diadiem']) && isset($_POST['mota'])) {
    $name = $_POST['name'];
    $phone= $_POST['sdt'];
    $email = $_POST['mail'];
    $des = $_POST['diadiem'];
    $detail = $_POST['mota'];

    if (empty($name)) {
        $error = 'Hãy nhập họ tên';
    } else if (empty($phone)) {
        $error = 'Hãy nhập số điện thoại';
    } else if (empty($email)) {
        $error = 'Hãy nhập email';
    } else if (empty($des)) {
      $error = 'Hãy nhập địa điểm';
    } else {
        add_dangky($name, $phone, $email, $des, $detail,0);
        header('Location: ./nhuongquyen');
       
    }
}
?>

<html>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/singup.css">
    <style>
      a:hover{
        color: #FFAA17;
      }
    </style>

</head>
<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1 style="color: #FFAA17; font-family: anton;">ĐĂNG KÝ THÔNG TIN</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                        <div class="formbg-outer">
                            <div class="formbg">
                                <div class="formbg-inner padding-horizontal--48">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="./img/img1.png" width="90%">
                                        </div>
                                        <div class="col-lg-6">
                                            <form id="stripe-login" method="post" action=" ">
                                                    <div class="field padding-bottom--24">
                                                        <label for="name"  class="dk-text">Họ và tên</label>
                                                        <input type="text" name="name" id="name">
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="sdt" class="dk-text">Số điện thoại:</label>
                                                                <input class="form-control" type="text"  name = "sdt" id = "sdt">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="mail" class="dk-text">Email:</label>
                                                                <input class="form-control" type="email" name="mail" id="mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="diadiem" class="dk-text">Địa điểm:</label>
                                                            <input class = "form-control"  type="text" name ="diadiem" id = "diadiem">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="dk-text">Mô tả quý công ty hoặc bản thân:</label>
                                                            <textarea class="form-control" name="mota" id="mota" cols="20" rows="10" style="height:100px"></textarea>
                                                        </div>
                                                        <?php
                                                          if (!empty($error)) {
                                                              echo "<div class='alert alert-danger'>$error</div>";
                                                          } 
                                                        ?>
                                                        <div class="field padding-bottom--24">
                                                            <input type="submit" name="submit" value="Đăng ký">
                                                        </div>
                                                        <div class="row flex-justifyContent--center" >
                                                          <img src="./img/sakura.png" style="width:10%; margin-right:10px">
                                                          <div class="field">
                                                            <a class="ssolink" style="margin-top:10px">Hope you have a good day</a>
                                                          </div>
                                                          <img src="./img/sakura.png" style="width:10%; margin-left:10px">
                                                        </div> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                        <div class="footer-link padding-top--10">
                            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                              <span><a href="https://practical.edu.vn/"  style="font-family:font_strong; color:#021A08;">TRANG CHỦ</a></span>
                              <span><a href="./nhuongquyen"  style="font-family:font_strong;color:#021A08;">NHƯỢNG QUYỀN</a></span>
                            </div>
                            <span style="font-size: 15px; margin-bottom: 20px; opacity:0.8; font-family:font_strong">© Copyright 2023 VietDai</span>
                        </div>
        </div>
          
        </div>
      </div>
    </div>
  </div>

</body>

</html>
