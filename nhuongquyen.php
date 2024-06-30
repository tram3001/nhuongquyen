<?php 

    $a=0;
    include_once"./header.php";
    
    // if(isset($_COOKIE[$cookie_value])) {
    //     echo "<script type='text/javascript'>alert('Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên lạc lại sau cho bạn!!');</script>";
    // } 
    // // $b=$_COOKIE['kq'];
    // $kq=$_GET['kq'];
    // if($kq=="1"){
    //     echo "<script type='text/javascript'>alert('Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên lạc lại sau cho bạn!!');</script>";
    // } 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
       .wrapper{
            position: fixed;
            right: 0;
            width: fit-content;
            height:auto;
            z-index: 2;
        }
        #btn_dk{
            width:200px;
            
            height:70px;
            background: linear-gradient(to left top,  #021A08 50%,  #0c3f19 50%);
            border-style: none;
            color:#fff;
            font-size: 23px;
            letter-spacing: 3px;
            font-family: 'Lato';
            font-weight: 600;
            outline: none;
            cursor: pointer;
            position: relative;
            padding: 0px;
            overflow: hidden;
            transition: all .5s;
            box-shadow: 0px 1px 2px rgba(0,0,0,.2);
        }
        #btn_dk span{
            position: absolute;
            display: block;
        }
        #btn_dk span:nth-child(1){
            height: 3px;
            width:200px;
            top:0px;
            left:-200px;
            background: linear-gradient(to right, rgba(0,0,0,0), #f6e58d);
            border-top-right-radius: 1px;
            border-bottom-right-radius: 1px;
            animation: span1 2s linear infinite;
            animation-delay: 1s;
        }

        @keyframes span1{
            0%{
                left:-200px
            }
            100%{
                left:200px;
            }
        }
        #btn_dk span:nth-child(2){
            height: 70px;
            width: 3px;
            top:-70px;
            right:0px;
            background: linear-gradient(to bottom, rgba(0,0,0,0), #f6e58d);
            border-bottom-left-radius: 1px;
            border-bottom-right-radius: 1px;
            animation: span2 2s linear infinite;
            animation-delay: 2s;
        }
        @keyframes span2{
            0%{
                top:-70px;
            }
            100%{
                top:70px;
            }
        }
        #btn_dk span:nth-child(3){
            height:3px;
            width:200px;
            right:-200px;
            bottom: 0px;
            background: linear-gradient(to left, rgba(0,0,0,0), #f6e58d);
            border-top-left-radius: 1px;
            border-bottom-left-radius: 1px;
            animation: span3 2s linear infinite;
            animation-delay: 3s;
        }
        @keyframes span3{
            0%{
                right:-200px;
            }
            100%{
                right: 200px;
            }
        }

        #btn_dk span:nth-child(4){
            height:70px;
            width:3px;
            bottom:-70px;
            left:0px;
            background: linear-gradient(to top, rgba(0,0,0,0), #f6e58d);
            border-top-right-radius: 1px;
            border-top-left-radius: 1px;
            animation: span4 2s linear infinite;
            animation-delay: 4s;
        }
        @keyframes span4{
            0%{
                bottom: -70px;
            }
            100%{
                bottom:70px;
            }
        }

        #btn_dk:hover{
            transition: all .5s;
            transform: rotate(-3deg) scale(1.1);
            box-shadow: 0px 3px 5px rgba(0,0,0,.4);
        }
        #btn_dk:hover span{
            animation-play-state: paused;
        }
        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 32px;
            height: 32px;
            overflow: hidden;
            top: 0;
            right: 0;
            background-color: #FFAA17;
            border-radius: 0 4px 0 32px;
        }
        
        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }
        .card1 {
            display: block;
            top: 0px;
            position: relative;
            z-index: 0;
            overflow: hidden;
            border: 1px solid #f2f8f9;

            &:hover {
                transition: all 0.2s ease-out;
                box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
                top: -4px;
                border: 1px solid #cccccc;
                background-color: white;
            }

            &:before {
                content: "";
                position: absolute;
                z-index: -1;
                top: -16px;
                right: -16px;
                background: #FFAA17;
                height: 32px;
                width: 32px;
                border-radius: 32px;
                transform: scale(2);
                transform-origin: 50% 50%;
                transition: transform 0.15s ease-out;
            }

            &:hover:before {
                transform: scale(2.15);
            }
            
        }

    </style>
  </head>
 
  <body>
  

    <div class="container">
        <!-- <div class="fixed">
            <a href="./dangky" class = "btn" style="font-family: font_strong; background-color:#021A08; color:#FFFFFF; font-size: 25px; margin-top: 10px; padding: 15px;">Đăng ký</a>
        </div> -->
        <div class="wrapper">
            <a href="./dangky"> <button id="btn_dk" >
                Đăng ký
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button></a>
            
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 mx-auto text-center" style="margin-top: 5px;">
                <div class="image-parent" >
                    <img style="width: 100%;" src="./img/img1.png" />
                </div>     
            </div>

            <div class="col-lg-6 col-md-8">
                <h5 style="font-family: font_strong; color: #FFAA17; margin-top: 60px;" >Về chúng tôi</h5>
                <p class="nq-maintext" style="margin-top: 10px; font-family: anton ; font-size: 58px; ">trung tâm ngoại ngữ ứng dụng</p>   

                <div class="nq-text mb-3" style="font-family: font_strong;">
                    Ngoại Ngữ Ứng Dụng được thành lập từ năm 2008, 
                    ‌lấy‌ ‌lĩnh‌ ‌vực‌ ‌đào‌ ‌tạo‌ ‌đa‌ ‌ngôn ‌ngữ‌ ‌làm‌ ‌gốc,‌ ‌nơi‌ mà‌ ‌con‌ ‌người‌ ‌tìm‌ ‌thấy‌ ‌‌cơ‌ ‌hội‌ ‌phát‌ ‌triển‌ ‌tốt‌ 
                    ‌hơn‌ ‌thông‌ ‌qua‌ ‌ngoại‌ ‌ngữ‌,‌ ‌tạo‌ ‌ra‌ ‌‌nguồn‌ ‌tài‌ ‌lực‌ ‌cho‌ ‌nền kinh tế Việt Nam phát triển mạnh mẽ hơn trong thời đại 4.0.
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="d-flex" style="font-size: 100px; margin-right: 20px; font-family: anton; color: #FFAA17;">
                            <div>
                                <img style="width: 100px; margin: 5px;" src="./img/quality.png" />
                            </div>  
                            <div id="transaction-count">15</div>
                            <div>+</div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-8">
                        <h4 style="color: #021A08; font-family: anton;">
                            năm kinh nghiệm quốc tế
                        </h4>

                        <div class="nq-text" style="font-family: font_strong">
                            Chuyên đào tạo quy trình xây dựng, vận hành, quản lý, kiểm soát chất lượng trung tâm ngoại ngữ.
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <h3 style="font-family: font-strong; color:#FFAA17; margin-top: 100px; font-weight:bold;" class="text-center">Thông tin</h3>
        <h2 class="nq-ptext mb-3 " >Nhượng Quyền Tại <br> Trung Tâm Ngoại Ngữ Ứng Dụng</h2>
        <div class="row  justify-content-center" >
            <div class="col-lg-4 col-md-6">
                <div class="card the" style="width:95%; height: 35rem; ">
                    <img class="card-img-top nq-card" src="./img/icon_thongtintt.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold" style="color: #021A08; font-family: font_strong; margin-top: 20px;">Trung Tâm <br> Ngoại Ngữ Ứng Dụng</h4>
                        <p class="card-text text-justify ;" style="font-family: font_strong;">Đã thiết kế nên hệ thống nhượng quyền đặc biệt nhằm đáp ứng nhu cầu của 
                            các tổ chức và cá nhân có mong muốn đầu tư mở trung tâm ngoại ngữ trong lĩnh vực giáo dục
                            với nhiều tiềm năng phát triển.</p>
                    </div>
                </div>   
            </div>

            <div class="col-lg-4 col-md-6 ">
                <div class="card the" style="width:95%; height: 35rem; margin-top: 25px; background-color: #10391C">
                    <img class="card-img-top nq-card" src="./img/icon_nguonthu.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold" style="color: #FFAA17 ;font-family: font_strong; margin-top: 20px;">Nguồn thu</h4>
                        <p class="card-text text-justify" style="color: #FFFFFF ;font-family: font_strong;"><b>Bên Cạnh Nguồn Thu Từ Trung Tâm Ngoại Ngữ. Một Số Nguồn Thu Bổ Sung Bao Gồm:</b> <br><br>
                            Dịch thuật: phiên dịch, biên dịch, cung cấp các văn bản pháp luật <br>
                            Đào tạo tại Doanh Nghiệp <br>
                            Lớp đào tạo Phát Triển Nguồn Nhân Lực.</p>
                    </div>
                </div>  
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card goinq " style=" width:95%; height: 35rem; margin-top: 50px;background-color: #FFAA17" >
                    <img class="card-img-top nq-card" src="./img/icon_goinhuongquyen.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold" style="font-family: font_strong; margin-top: 20px;">Gói nhượng quyền</h4>
                        <p class="card-text text-justify" style="font-family: font_strong;">Cung cấp đầy đủ thông tin về các khóa học.
                            Hỗ trợ kiểm tra, giám sát quá trình hoạt động của Trung tâm.</p>
                    </div>
                </div> 
            </div>
            
        </div>

        <h2 class="text-center text-uppercase justify-content-center qt" style="margin-top: 125px;">
            chất lượng - cơ hội - quan tâm
        </h2>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <img class="mx-auto d-block imgavatar" src="./img/avatar.png" />
            </div>
        </div>
       
        <div class="row ">
            <div class="card col-lg-5 col-md-8" style="margin-right:95px; border: 0px;">
                <div class="row ">
                    <div class="col-lg-3 col-md-4 text-center">
                        <div class="img">
                            <img class = "nq-card" src="./img/icon_chatluong.png"  alt="">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 tc-center-text">
                        <div class="text">
                            Giá trị kiến thức mà học viên sở hữu được là điều Trung Tâm Ngoại Ngữ Ứng Dụng luôn hướng đến.
                            Học viên có thể nói tốt, viết hay, ứng dụng giỏi được các kiến thức đã được truyền thụ vào thực tế.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-lg-5 col-md-8" style="margin-left:95px; margin-top:20px ; border: 0px;">
                <div class="row ">
                    <div class="col-lg-3 col-md-4 text-center">
                        <div class="img">
                            <img class = "nq-card" src="./img/icon_cohoi.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 tc-center-text">
                        <div class="text">
                            Làm sao để học viên không bỏ cuộc giữa chừng và có động lực hoàn thành mục tiêu học tập là cũng là điều
                            mà toàn thể nhân viên, giáo viên Ngoại Ngữ Ứng Dụng nỗ lực đồng hành cùng học viên.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-lg-5 col-md-8" style="margin-top:50px;border: 0px; margin-right:30px">
                <div class="row ">
                    <div class="col-lg-3 col-md-4 text-center">
                        <div class="img">
                            <img class = "nq-card" src="./img/icon_quantam.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 tc-center-text">
                        <div class="text">
                            Ngoại ngữ là cầu nối, nhịp dẫn gắn liền học viên đến gần các cơ hội phát triển bản thân.
                            Do đó Ngoại Ngữ Ứng Dụng không ngừng đẩy mạnh hợp tác với các đơn vị trong và ngoài nước
                            có uy tín để hỗ trợ cho học viên.
                        </div>
                    </div>
                </div>
            </div>

           

        </div>

        <h3 style="font-family: font-strong; color:#FFAA17; margin-top: 100px; font-weight:bold;" class="text-center">Tại sao</h3>
        <h2 class="nq-ptext mb-5">Tại sao lựa chọn đối tác là <br> Trung Tâm Ngoại Ngữ Ứng Dụng</h2>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch ">
                <div class="card mb-5 drop-card card1" style="width:85%">
                    <img class="card-img-top nq-card" src="./img/icon_phinq.png" alt="Card image">
                    <div class="card-body">
                        <p class="nq-card-text" >Phí nhượng quyền tốt nhất</p>
                    </div>
                    <div class="go-corner" >
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card mb-5 card1" style="width:85%">
                <img class="card-img-top nq-card " src="./img/icon_sp.png" alt="Card image">
                    <div class="card-body">
                        <p class="nq-card-text">Sản phẩm dịch vụ khác biệt</p>
                    </div>
                    <div class="go-corner" >
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card mb-5 card1" style="width:85%">
                <img class="card-img-top nq-card " src="./img/icon_thoigian.png" alt="Card image">
                    <div class="card-body">
                        <p class="nq-card-text">Thời gian hoàn vốn nhanh</p>
                    </div>
                    <div class="go-corner" >
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card mb-5 card1" style="width:85%">
                <img class="card-img-top" style="width:fit-content; height:fit-content; margin:auto; margin-top:10px" src="./img/icon_hieusuat.png" alt="Card image">
                    <div class="card-body">
                        <p class="nq-card-text">Doanh thu tăng trưởng tốt</p>
                    </div>
                    <div class="go-corner" >
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card mb-5 card1" style="width:85%;">
                <img class="card-img-top" style="width:fit-content; height:fit-content; margin:auto; margin-top:10px" src="./img/icon_hd.png" alt="Card image">
                    <div class="card-body">
                        <p class="nq-card-text">Hệ thống vận hành <br> hiệu quả</p>
                    </div>
                    <div class="go-corner" >
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function animateNumber(finalNumber, delay, startNumber = 0, callback) {
            let currentNumber = startNumber
            const interval = window.setInterval(updateNumber, delay)
            function updateNumber() {
                if (currentNumber >= finalNumber) {
                clearInterval(interval)
                } else {
                currentNumber++
                callback(currentNumber)
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            let nam=new Date().getFullYear()-1998;
            animateNumber(nam, 50, 0, function (number) {
                const formattedNumber = number.toLocaleString()
                document.getElementById('transaction-count').innerText = formattedNumber
            })
        })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    include_once"./footer.php"
?>