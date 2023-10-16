@extends('welcome');
@section('content')
<div class="bo-cuc">
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
      <!--TIÊU ĐỀ NHỎ-->
      <div class="small-title">
        <div class="small-title-divide"></div>
        <div class="small-title-group">
          <h3 class="small-title-heading">CHI TIẾT SẢN PHẨM</h3>
          <p class="small-title-content">Satisfy You - Happy Us</p>
        </div>
        <div class="small-title-divide"></div>
      </div>
      <!--THÂN TRANG-->
      <div class="container">
        <div class="product-body">
          <div class="body-left">
            <img
              id="anhao"
              src="{{asset('/frontend/image/sp1.webp')}}"
              alt=""
              width="455"
              height="455"
            />
          </div>
          <div class="body-mid">
            <span id="idao" style="display: none">1</span>
            <h3 class="product-title" id="tenao">
              DISSOLVE 3D T-SHIRT/DARK BROW
            </h3>
            <span class="product-sku">SKU: DIS-10-1</span>
            <div class="product-review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="product-newprice" id="giaao">49.000đ</span>
            <span class="product-oldprice">420.000đ</span>
            <br />
            <h4>Kích thước</h4>
            <br />
            <span class="product-size">M</span>
            <span class="product-size">L</span>
            <span class="product-size">XL</span>
            <br />
            <br />
            <div>
              <span>Số lượng</span>
              <button
                onclick="giam()"
                type="button"
                class="product-increase-btn"
              >
                -
              </button>
              <input
                class="product-quantity"
                id="soluong"
                type="text"
                title="0"
                disabled
                value="1"
              />
              <button
                onclick="tang()"
                type="button"
                class="product-decrease-btn"
              >
                +
              </button>
            </div>
            <div style="margin-top: 20px">
              <a
                onclick="themgio({
                id: document.getElementById('idao'),
                ten: document.getElementById('tenao'),
                gia: document.getElementById('giaao'),
                anh: document.getElementById('anhao')
              })"
                class="product-add-to-cart"
                href="#"
                >Thêm vào giỏ</a
              >
              <a class="product-buy-now" href="#">Mua ngay</a>
            </div>
          </div>
          <div class="body-right">
            <h3>MÔ TẢ SẢN PHẨM</h3>
            <ul>
              <li>DISSOLVE 3D T-SHIRT</li>
              <li>HOẠ TIẾT: IN LỤA U.S.A INK</li>
              <li>
                COLOR: BLACK / WHITE / DARK GREEN / DARK BROW / DARK GREY / DARK
                RED
              </li>
              <li>SIZE: M / L / XL</li>
              <li>MATERIAL: PREMIUM COTTON.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endsection