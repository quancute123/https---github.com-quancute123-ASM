@extends('welcome');
@section('content');
<div class= bao-phu>
      <!--THANH ĐIỀU HƯỚNG-->
      <nav class="navbar">
        <ul>
          <li>
            <a href="#">HOME</a>
          </li>
          <li>
            <a href="#">SHOP&nbsp;<i class="fal fa-angle-down"></i></a>
          </li>
          <li>
            <a href="#">BLOG</a>
          </li>
          <li>
            <a href="#">CONTACT</a>
          </li>
          <li>
            <a href="#">ABOUT</a>
          </li>
          <li>
            <a href="#">SONSHOP GROUP</a>
          </li>
          <li>
            <a href="#">SONSHOP INSTAGRAM</a>
          </li>
        </ul>
      </nav>
      <!--ẢNH SLIDER-->
      <img class="slider" src="{{asset('frontend/image/banner1.jpg')}}" alt="Slider" /> 
      <img class="slider" src="{{asset('frontend/image/logo.webp')}}" alt="Slider" />
      <script>
       var slideIndex = 0;
        carousel();
        function carousel() {
          var i;
          var x = document.getElementsByClassName("slider");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > x.length) {slideIndex = 1}
          x[slideIndex-1].style.display = "block";
          setTimeout(carousel, 2000); 
        }
      </script>
      <div class="small-container">
        <!--CHÍNH SÁCH-->
        <div class="policy">
          <div class="policy-item">
            <i class="fas fa-shipping-fast"></i>
            <div class="policy-heading">GIAO HÀNG TOÀN QUỐC</div>
            <p class="policy-content">
              Thời gian giao hàng linh động từ 3 - 4 - 5 ngày tùy khu vực, đôi
              khi sẽ nhanh hơn hoặc chậm hơn. Mong Quý Khách hàng thông cảm và
              cố gắng đợi hàng giúp shop.
            </p>
          </div>
          <div class="policy-item">
            <i class="fal fa-sync-alt"></i>
            <div class="policy-heading">CHÍNH SÁCH ĐỔI TRẢ HÀNG</div>
            <p class="policy-content">
              Sản phẩm được phép đổi hàng trong vòng 36h nếu phát sinh lỗi từ
              nhà sản xuất (Yêu cầu: hình ảnh phần bị lỗi rõ nét, chi tiết và
              đầy đủ).
            </p>
          </div>
          <div class="policy-item">
            <i class="fal fa-usd-circle"></i>
            <div class="policy-heading">
              GIAO HÀNG NHẬN TIỀN VÀ KIỂM KÊ ĐƠN HÀNG
            </div>
            <p class="policy-content">
              Được phép kiểm hàng trước khi thanh toán. Lưu ý: Trường hợp Quý
              Khách hàng đã nhận hàng về nhà, vui lòng quay video unbox đơn hàng
              trong tình trạng nguyên vẹn để có căn cứ xác thực đơn hàng gặp
              phải vấn đề, trường hợp không có video shop không thể hỗ trợ.
            </p>
          </div>
          <div class="policy-item">
            <i class="fal fa-phone-volume"></i>
            <div class="policy-heading">
              ĐẶT HÀNG ONLINE VÀ KIỂM TRA ĐƠN HÀNG VUI LÒNG LIÊN HỆ
            </div>
            <p class="policy-content">Hotline: 037 335 7405.</p>
          </div>
        </div>

        <!--TIÊU ĐỀ NHỎ-->
        <div class="small-title">
          <div class="small-title-divide"></div>
          <div class="small-title-group">
            <h3 class="small-title-heading">ARRIVALS</h3>
            <p class="small-title-content">Satisfy You - Happy Us</p>
          </div>
          <div class="small-title-divide"></div>
        </div>

        <!--THỜI GIAN KHUYẾN MÃI-->
        <div class="discount-time">
          <div class="dicount-group">
            <span class="discount-number">23</span>
            <span class="discount-unit">ngày</span>
          </div>
          <div class="dicount-group">
            <span class="discount-number">23</span>
            <span class="discount-unit">giờ</span>
          </div>
          <div class="dicount-group">
            <span class="discount-number">23</span>
            <span class="discount-unit">phút</span>
          </div>
          <div class="dicount-group">
            <span class="discount-number">59</span>
            <span class="discount-unit">giây</span>
          </div>
        </div>

        <!-- DANH SÁCH SẢN PHẨM -->
        <div class="product-list">
          <a class="card" href="{{route('chitiet_sanpham')}}">
            <img class="image" src="{{asset('frontend/image/sp1.webp')}}" alt="Product" />
            <div class="body">
              <h2 class="name">DISSOLVE 3D T-SHIRT/DARK BROW</h2>
              <p class="vendor">SƠNSHOP</p>
              <div class="review">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">
                <span class="price-new">49,000đ</span>
                <span class="price-old">420,000đ</span>
              </div>
            </div>
          </a>

          <a class="card" href="chitietsp.html">
            <img class="image" src="{{asset('frontend/image/sp2.webp')}}" alt="Product" />
            <div class="body">
              <h2 class="name">SIMPLE SHORT/BLACK</h2>
              <p class="vendor">SƠNSHOP</p>
              <div class="review">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">
                <span class="price-new">49,000đ</span>
                <span class="price-old">420,000đ</span>
              </div>
            </div>
          </a>

          <a class="card" href="chitietsp.html">
            <img class="image" src="{{asset('frontend/image/sp3.webp')}}" alt="Product" />
            <div class="body">
              <h2 class="name">SIMPLE PAINS/BLACK</h2>
              <p class="vendor">SƠNSHOP</p>
              <div class="review">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">
                <span class="price-new">49,000đ</span>
                <span class="price-old">420,000đ</span>
              </div>
            </div>
          </a>

          <a class="card" href="chitietsp.html">
            <img class="image" src="{{asset('frontend/image/sp4.webp')}}" alt="Product" />
            <div class="body">
              <h2 class="name">SIMPLE WEATER/BLUE</h2>
              <p class="vendor">SƠNSHOP</p>
              <div class="review">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">
                <span class="price-new">49,000đ</span>
                <span class="price-old">420,000đ</span>
              </div>
            </div>
          </a>
        </div>
        <!--TIÊU ĐỀ NHỎ-->
        <div class="small-title">
            <div class="small-title-divide"></div>
            <div class="small-title-group">
              <h3 class="small-title-heading">SELLINGS</h3>
              <p class="small-title-content">Satisfy You - Happy Us</p>
            </div>
            <div class="small-title-divide"></div>
          </div>
  
       <!-- DANH SÁCH SẢN PHẨM -->
       <div class="product-list">
        <a class="card" href="chitietsp.html">
          <img class="image" src="{{asset('frontend/image/sp1.webp')}}" alt="Product" />
          <div class="body">
            <h2 class="name">DISSOLVE 3D T-SHIRT/DARK BROW</h2>
            <p class="vendor">SƠNSHOP</p>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="price">
              <span class="price-new">49,000đ</span>
              <span class="price-old">420,000đ</span>
            </div>
          </div>
        </a>

        <a class="card" href="chitietsp.html">
          <img class="image" src="{{asset('frontend/image/sp2.webp')}}" alt="Product" />
          <div class="body">
            <h2 class="name">SIMPLE SHORT/BLACK</h2>
            <p class="vendor">SƠNSHOP</p>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="price">
              <span class="price-new">49,000đ</span>
              <span class="price-old">420,000đ</span>
            </div>
          </div>
        </a>

        <a class="card" href="chitietsp.html">
          <img class="image" src="{{asset('frontend/image/sp3.webp')}}" alt="Product" />
          <div class="body">
            <h2 class="name">SIMPLE PAINS/BLACK</h2>
            <p class="vendor">SƠNSHOP</p>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="price">
              <span class="price-new">49,000đ</span>
              <span class="price-old">420,000đ</span>
            </div>
          </div>
        </a>

        <a class="card" href="chitietsp.html">
          <img class="image" src="{{asset('frontend/image/sp4.webp')}}" alt="Product" />
          <div class="body">
            <h2 class="name">SIMPLE WEATER/BLUE</h2>
            <p class="vendor">SƠNSHOP</p>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="price">
              <span class="price-new">49,000đ</span>
              <span class="price-old">420,000đ</span>
            </div>
          </div>
        </a>
      </div>
    </div>
    </div>
    @endsection;