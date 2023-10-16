<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('frontend/styte.css')}}" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css"
    />
  </head>
  <body onload="myfunction()">
    <div class="container">
      <!--ĐẦU TRANG-->
      <header>
        <a href="#" class="header-left">
          <i class="fal fa-phone"></i>
          <span>0373357405.</span>
        </a>
        <a href="index.html">
          <img src="{{asset('./frontend/image/LOGO.jpg')}}" alt="Logo" />
        </a>
        <div class="header-right">
          <a href="#" title="Search">
            <i class="fal fa-search"></i>
          </a>
          <a href="dangnhap.html" title="Account">
            <i class="fal fa-user"></i>
          </a>
          <a class="cart" href="#" title="Cart">
            <i id="soluongao" class="fal fa-shopping-cart"><div id="giohang" class="badge">0</div></i>
          </a>
        </div>
      </header>
 @yield('content');
<!--CHÂN TRANG-->
<div class=footer>
<footer>
    <div class="container">
      <div class="small-container">
        <div class="footer-contact">
          <h3 class="heading">THÔNG TIN LIÊN HỆ:</h3>
          <div class="divide"></div>
          <span
            >891 Hương Lộ 2, Bình Trị Đông A, Bình Tân, TP. Hồ Chí Minh (AM:
            08H30 -> 11H45, PM: 13H30 -> 17H45) KH vui lòng đến đúng khung
            giờ mở cửa trên để mua hàng. Vergency chân thành cảm ơn!
          </span>
          <span>Phone:035 545 1956. </span>
          <span>Email:nguyensongaming@gmail.com </span>
        </div>

        <div class="footer-policy">
          <h3 class="heading">CHÍNH SÁCH HỖ TRỢ:</h3>
          <div class="divide"></div>
          <ul>
            <li><a href="#">Tìm kiếm</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Chính sách đổi trả</a></li>
            <li><a href="#">Chính sách bảo mật</a></li>
            <li><a href="#">Điều khoản dịch vụ</a></li>
          </ul>
        </div>

        <div class="footer-link">
          <h3 class="heading">THÔNG TIN LIÊN KẾT:</h3>
          <div class="divide"></div>
          <span>Hãy kết nối với chúng tôi. </span>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
  </footer>
  
</div>
<script>
  function demGioHang() {
    const giohang = JSON.parse(localStorage.getItem("giohang"));
    let sum = 0;
    for (let i of giohang) {
      sum += Number(i.soluong);
    }
    return sum;
  }
  function myfunction() {
    const soGioHang = document.getElementById("giohang");
    soGioHang.innerText = demGioHang();
  }
  const giohang = localStorage.getItem('giohang')
  if (!giohang) {
    localStorage.setItem('giohang', JSON.stringify([]))
  }
</script>
</body>
</html>
