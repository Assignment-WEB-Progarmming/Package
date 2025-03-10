<?php
require_once('db/dbhelper.php');
require_once('utils/utilities.php');
if (isset($_COOKIE['idUser'])) {
  $user = executeResult('select * from db_user where id = ' . $_COOKIE['idUser'] . '');
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>House Self</title>
  <link href="house-self/custom/images/logo-lightbackground.png" rel="icon" type="image/x-icon" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="house-self/custom/css/style.css">

  <!--Font family was used-->
  <link href="//db.onlinewebfonts.com/c/ba69ea70a1f187353aa8dc0ff159cce9?family=Bellfort" rel="stylesheet" type="text/css" />
  <link href="//db.onlinewebfonts.com/c/f74aa8714b210bf4e9b898056b9fb509?family=Rigatoni+Sans+Thin" rel="stylesheet" type="text/css" />
  <link href="//db.onlinewebfonts.com/c/9e972508ce574c6c42f90006a9b7e18b?family=Dealer+Strikes+Straight" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">

  <link href="//db.onlinewebfonts.com/c/b4ccc98add6cc60de17dbb589dca2164?family=Juventus+Fans+Bold" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="house-self/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="house-self/bootstrap/js/bootstrap.min.js"></script>

  <script src="house-self/custom/js/products.js"></script>
  <script src="Herios/js/scripts.js"></script>

</head>

<body onload="checkCookie('idUser')">
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="image-fluid" src="house-self/custom/images/logotrim.png" alt="" style="width: 90px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent-7">
          <ul class="navbar-nav nav">
            <li class="nav-item text-uppercase active">
              <a class="nav-link" href="#">Về chúng tôi <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" id="sp_notLogin">
              <a class="nav-link" href="house-self/product_page.php">SẢN PHẨM </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="house-self/news.html">TIN TỨC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Herios/reserve.html">ĐỐI TÁC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Herios/login.php">LIÊN HỆ</a>
            </li>
            <li class="nav-item" id="notLogin">
              <a href="house-self/login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ĐĂNG NHẬP</a>
            </li>
            <li class="nav-item" id="yesLogin">
              <?php echo 'Xin chào '.$user[0]['hoTen'].'' ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img class="image-fluid" src="/Herios/images/Homepage/VN.png" alt="" style="width: 20px;">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->


    <!-- Full Page Intro -->
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="house-self/custom/images/homepage/sale1.png" alt="Los Angeles">
        </div>
        <div class="carousel-item">
          <img src="house-self/custom/images/homepage/sale2.png" alt="Chicago">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!-- Full Page Intro -->
  </header>

  <!-- Main navigation -->
  <!--Main Layout-->
  <main>

    <!--Reservation-->

    <div class="container homepage-title">
      <a class="text-left title">VỀ CHÚNG TÔI</a>
    </div>

    <div class="container-fluid view box-content" style="background-image: url(house-self/custom/images/background1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="row">
        <h6 class="col-lg-10" style="color:#ffffff;font-family: 'Lora',serif; text-align: center; margin-top: 1cm; margin-left: 3cm; margin-right: 3cm; font-size: 2vw;">
          Được thành lập với mục đích đem đến trải nghiệm tuyệt với nhất trong chính căn nhà của mình. "House Self" mong muốn bạn tận hưởng những phút giây thật sự thoải mái ngay chính trong ngồi nhà của mình như những gì bạn thật sự mong muốn.
        </h6>
      </div>
    </div>

    <div class="container homepage-title">
      <a class="text-left title">TIN TỨC</a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card" style="width: 19rem; padding:5px;">
            <img class="card-img-top" src="house-self/custom/images/Bespoke-Sectionals-at-Inexpensive-Cost.webp" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Đặt trước giá rẻ với House Self</h5>
              <p class="card-text">Phần là một loại ghế sofa đa năng đã trở nên phổ biến trong thập kỷ qua. Vì thiết kế nội thất hiện đại là tất cả về chức năng, điều quan trọng là phải tìm ra những phần phù hợp để làm cho cuộc sống ở nhà dễ dàng hơn. Do đó, một số loại mặt cắt đã xuất hiện như một cách để cung cấp […]</p>
              <a href="#" class="btn btn-primary">Đi đến bài viết</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 19rem;padding:5px;">
            <img class="card-img-top" src="house-self/custom/images/carlo.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">CARLO FORRCOLINI - GIÁM ĐỐC THIẾT KẾ TÀI NĂNG</h5>
              <p class="card-text">PCOZY độc quyền phân phối các mẫu sofa được thiết kế bởi Carlo Forrrcolini theo phong cách Đương đại Contemporary mang thương hiệu IDP Italia. Carlo Forrcolini là một nhà thiết kế đặc biệt nổi tiếng trong ngành thiết kế nội thất của thế giới với nhiều triễn lãm quốc tế tại Madrid, Los Angeles,</p>
              <a href="#" class="btn btn-primary">Đi đến bài viết</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 19rem; padding:5px;">
            <img class="card-img-top" src="house-self/custom/images/bg-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">NỘI THẤT VINTAGE – SỰ LỰA CHỌN CỦA HOÀI NIỆM</h5>
              <p class="card-text">Phần là một loại ghế sofa đa năng đã trở nên phổ biến trong thập kỷ qua. Vì thiết kế nội thất hiện đại là tất cả về chức năng, điều quan trọng là phải tìm ra những phần phù hợp để làm cho cuộc sống ở nhà dễ dàng hơn. Do đó, một số loại mặt cắt đã xuất hiện như một cách để cung cấp […]</p>
              <a href="#" class="btn btn-primary">Đi đến bài viết</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--TItle intro about us-->
    <div class="container1" style="padding-top: 2cm;margin-top: 2cm;">
      <div class="row">
        <div class="col-lg-6" style="padding-top:2cm">
          <h1 style="color: #fff; font-size: 100px;font-family: 'Juventus Fans Bold';">SẢN PHẨM</h1>
          <p style="color:#fff;font-size:15px;line-height: 15px;">Đa dạng về thể loại và chất lượng trong từng sản phẩm giúp bạn có thể dễ dạng lựa chọn những đồ dùng trong căn nhà của mình</p>
          <button type="button">
            Khám phá
          </button>
        </div>
        <div class="col-lg-6">
          <div class="card1" id="card01">
            <h5>Bàn-Ghế</h5>
            <p style="color: black; font-size: 12px;">Bộ bàn ghế bằng gỗ nguyên khối luôn giữ cho cho bề mặt được bóng sáng</p>
          </div>
          <div class="card1" id="card02">
            <h5>Đèn</h5>
            <p style="color: black; font-size: 12px;">Bộ đèn được thiết kế tinh giản, với độ sáng dễ chịu, mang đến không gian ấm cúng</p>
          </div>
          <div class="card1" id="card03">
            <h5>Giường ngủ</h5>
            <p style="color: black; font-size: 12px;">Giúp bạn có những phút giây thư giãn sau một ngày làm việc </p>
          </div>
          <div class="card1" id="card04">
            <h5>Đồ trang trí</h5>
            <p style="color: black; font-size: 12px;">Phong cách vintage mang lại cảm giác ấm cùng </p>
          </div>
        </div>
      </div>
    </div>




    <!--Title intro page about us-->






  </main>
  <!--Main Layout-->

  <!-- Footer -->
  <footer class="page-footer font-small blue-grey lighten-5 style-footer" style="padding-top: 2cm;">

    <div style="background-color:#0a0808c9 ;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0" style="color: #ffffff; font-size: large; font-family: 'quicksand';">Liên lạc qua các kênh truyền thông của chúng tôi</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>

            <!-- Twitter -->
            <a class="tw-ic">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
              </svg>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
              </svg>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
              </svg>
            </a>

            <!--Instagram-->
            <a class="ins-ic">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5 style-footer" style="font-family: 'quicksand';">

      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <img src="/house-self/custom/images/logo-nobrand.png" alt="">


        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Sản phẩm</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Bàn - Ghế</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Đèn</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Tranh treo tường </a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Sản phẩm khác</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Liên kết nhanh</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Tài khoản</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Tuyển dụng</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Tin tức</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Giúp đỡ</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Liên hệ</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p style="font-size:15px;color:black;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
            27, 205, Tân Phú, Q9
          </p>
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
            hello@herios.com
          </p>
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
            +84 387 641 207
          </p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
      <a class="dark-grey-text" href="https://mdbootstrap.com/"> houself.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>

</html>