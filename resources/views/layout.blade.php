  <?php
 $taikhoan = Session::get('taikhoan');
 $info = Session::get('info');
 $carts = Session::get('carts');
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3T Learning - trang web học tập online dành cho học sinh Cấp 3 hàng đầu Việt Nam</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
        <link href="{{ asset('css/inputsearch.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer-home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbarmain.css') }}" rel="stylesheet">
        <link href="{{ asset('css/gototop.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/cards.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/developer.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/new.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/tab.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/stylesidebar.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/buttonanimate.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/switchlanguage.css') }}" rel="stylesheet">
        <link  href="{{ asset('css/minicart.css') }}" rel="stylesheet">

         <script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="{{asset('js/simple.money.format.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
  <style type="text/css">
        /*demo*/

        /**/
                    html {
                      scroll-behavior: smooth;
                    }
                 .bgimg-2{
                  position: relative;
                  opacity: 0.65;
                  background-attachment: fixed;
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;

                }
                .bgimg-2 {
                  background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-simple-classroom-book-advertising-background-backgroundsimpleblackboardstarbookstationeryalarm-clockdesk-image_73968.jpg");
                  min-height: 250px;
                }

                .container.item span.new{
                    background-color: red;
                }
                .bar1, .bar2, .bar3 {
                      width: 35px;
                      height: 5px;
                      background-color: whitesmoke;
                      margin: 6px 0;
                      transition: 0.4s;
                    }

                    .change .bar1 {
                      -webkit-transform: rotate(-45deg) translate(-9px, 6px);
                      transform: rotate(-45deg) translate(-9px, 6px);
                    }

                    .change .bar2 {opacity: 0;}

                    .change .bar3 {
                      -webkit-transform: rotate(45deg) translate(-8px, -8px);
                      transform: rotate(45deg) translate(-8px, -8px);
                    }

                /* Turn off parallax scrolling for tablets and phones */
                @media only screen and (max-device-width: 768px) {
                 ul li.responsive-none{
                    display: none;
                  }


                  .bgimg-2{
                    background-attachment: scroll;
                  }
                  .col-md-4 .hovercard .avatar{
             /*    margin-top: 60px;*/
                }
                .col-md-3 .hovercard .avatar{
             /*    margin-top: 60px;*/
                }
                 .item .card .avatar{
                 margin-top: -20px;


                }

                .col-sm-6{
                    width: 50%;
                }
            }
                @media only screen and (max-device-width: 500px) {
                div.col-md-4 .card.hovercard .cardheader{
                      height: auto;
                }
                 .header__navbar-item-has-notify:hover .header__notify {
                      display: none;

                    }
            }
          .owl-carousel .owl-nav button.owl-prev
              {
                    position: absolute;
                    left: 0px;
                    font-size: 30px;
                    top: 45%;
                    transform: translateY(-50%);
                    color: #fff !important;
                    background-color: #999 !important;
                     padding: 0px 20px !important;
                     border-radius: 50%;
                    transition: 0.8s;
                     /*box-shadow: 0 0 7px 0.8px rgb(0 0 0 / 50%);
*/

              }
                 .owl-carousel .owl-nav button.owl-next
              {
                    position: absolute;
                    right: 0px;
                    font-size: 30px;
                    top: 45%;
                    border-radius: 50%;
                    transform: translateY(-50%);

                        color: #fff !important;
                     background: none !important;
              background-color: #999 !important;
                     padding: 0px 20px !important;
                        transition: 0.8s;
              }
              .owl-carousel .owl-nav button.owl-prev:hover{
                    background: none;
                       box-shadow: 0 0 7px 0.8px rgb(0 0 0 / 50%);
              }
              .owl-carousel .owl-nav button.owl-next:hover{
                    box-shadow: 0 0 7px 0.8px rgb(0 0 0 / 50%);
              }

                  @media only screen and (max-width: 380px) {

                         .item .card .avatar{
                         margin-top: 10px;


                }
                 .card.hovercard .cardheader{
                      height: auto;
                }
                .col-md-3  .hovercard .avatar{
                 margin-top: 10px;
                }
                 .col-md-4 .hovercard .avatar{
                 margin-top: 10px;
                }
                  }

                  .avatar_drop{
                    width: 70px;height:70px;float: left;border-radius: 50%;border: 1px solid black;
                  }
                  .count-tb{
                    font-size: 10px;background-color: red;color: white;padding: 0px 4px;border-radius: 50%;position: absolute;top: 5px;right:5px
                  }
      </style>
 <script type="text/javascript">
         $('#myCarousel').carousel({
            interval: 3000,
         })
    </script>
    </head>

    <body>
{{-- <div class="w-100"> --}}
    <div class="container-fluid navbar text-light" style="background-color: #0a0979;">
       <div class="container-fluid">
            <ul class="d-flex">
                <li class="pl-0">0964114749</li>
                <li class="pl-2 pr-2">|</li>
                <li>3Tel@gmail.com</li>

                    <li class="pl-2 pr-2">|</li>

                <li class="dropdown">
                    <a class="dropdown-toggle text-light text-decoration-none" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i style="font-size: 20px;" class="fa-solid fa-language"></i>
                    </a>
                    <ul class="dropdown-menu p-2" style="min-width: 50px; z-index: 10000;max-height: 70px;" aria-labelledby="navbarDropdown" >
                        <li><a href="" class="text-primary">ENG</a></li>
                        <li><a href="" class="text-danger">VIE</a></li>

                    </ul>
                </li>

            </ul>
            <ul class="float-right d-flex">

                <li class="responsive-none "><b>3T-LEARNING TRANG WEB HỌC TẬP HÀNG ĐẦU VIỆT NAM</b></li>
            </ul>
       </div>
    </div>
{{-- </div> --}}
<nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark " >
  <a class="navbar-brand" href="{{asset('/home')}}"><i style="font-size: 35px;" class="fa-solid fa-book-open-reader"> 3T</i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <div onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </button>

  <div  class="collapse navbar-collapse" id="navbarTogglerDemo02" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{asset('/home')}}">Trang Chủ <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Khóa học
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown" >
            <div class="row khoahoc">
           @foreach($lophoc as $lop)

         <div class="col-lg-4">
          <b><a class="dropdown-item title_menu" href="#">Lớp {{$lop->tenlop}}</a></b>
          <div class="dropdown-divider"></div>
    {{--       <?php ?> --}}
                <?php foreach($monhoc as $mon) {
                    if($mon->id_lop == $lop->idlop){
                ?>
                    <a class="dropdown-item" href="{{URL::to('mon-hoc/'.$mon->slug_danhmuc."=".$mon->id)}}">{{$mon->tendanhmuc}}</a>
                    <?php } ?>
                <?php } ?>
        </div>
            @endforeach

        </div> </div>
      </li>
      @if(isset($taikhoan))
          @if($taikhoan->phanquyen==0)
           <li class="nav-item">
            <a class="nav-link" href="#">Giảng dạy</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="#">Giáo viên</a>
          </li>
          @endif

      @endif

      <li class="nav-item">
        <a class="nav-link" href="#">Diễn đàn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Tin Tức</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
     {{--  <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> --}}
      <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <button type="submit" class="search_icon"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </form>



        <div class="header__navbar-item-has-notify" style="position: relative;">
        <a href="{{URL::to('/cart')}}" class="btn text-light " style="margin-left: 10px;font-size: 20px;position: relative;border-style: none;">
            <i class="fa-solid fa-cart-shopping"></i><span class="count-tb">{{!isset($carts)? "0": sizeof($carts)}}</span>

        </a>
           <div class="header__notify">
                  <header class="header-minicart">
                    <div class="h4 text-center p-2">Giỏ hàng</div>
                  </header>
                   @if($carts!=null)
                   @if(sizeof($carts))
                  <body>
                    <div class="body-minicart">

                        @foreach($carts as $cart )
                        <div class="d-flex w-100 pl-2 pt-1">
                            <div class="image-cart">
                                <img src="{{asset('public/upload/giaovien/'.$cart->avatar)}}">
                            </div>
                            <div class="info-minicart pl-2">
                                <div class="title-minicart">Khóa học: <a href="">{{$cart->tensanpham}}</a></div>
                                Học phí: <span class="money-format">{{$cart->price*(1-$cart->discount*0.01)}}</span> VND
                                <br>{{$cart->gioitinh==0?"Thầy ":"Cô "}} <a href="">{{$cart->hodem}} {{$cart->ten}}</a>
                            </div>
                            <script type="text/javascript">
                            $('.money-format').simpleMoneyFormat();
                            </script>
                        </div>
                        @endforeach

                    </div>
                  </body>

                  <footer class=" text-center header__notify-footer">
                    <div class="p-2">
                    <a href="{{URL::to('/cart')}}" class="btn w-100 mt-2">Xem giỏ hàng </a>
                     <a href="" class="btn btn-primary mt-2 w-100">Thanh toán tất cả </a>
                    </div>
                  </footer>
                   @else
                    <div class="w-100 pb-3">
                        <center><span style="font-size: 13px;">Không có khóa học nào trong giỏ hàng</span></center>
                    </div>
                   @endif
                   @else
                   <div class="w-100 pb-3">
                        <center><span style="font-size: 13px;">Không có khóa học nào trong giỏ hàng</span></center>
                    </div>
                    @endif
                </div>
        </div>
         <a href="" class="btn text-light " style="margin-left: 10px;font-size: 20px;position: relative;border-style: none;">
            <i class="fa-solid fa-bell"></i><span class="count-tb">1</span>
        </a>
        <div class="dropdown">
        @if(!isset($taikhoan))
        <a onclick="DropdownClick()" class="text-light btn my-2 my-lg-0 dropbtn">Tài khoản</a>
        @else
        @if($info->avatar!=null)
            @if($taikhoan->phanquyen==0)
             <a onclick="DropdownClick()" class="text-light btn my-2 my-lg-0 dropbtn"><img src="{{asset('public/upload/giaovien/'.$info->avatar)}}" style="width: 30px;height:  30px;border-radius: 50%;" onclick="DropdownClick()"> {{$taikhoan->ten}} </a>
            @else
            <a onclick="DropdownClick()" class="text-light btn my-2 my-lg-0 dropbtn"><img src="{{asset('public/upload/hocsinh/defaultavatar.jpg')}}" style="width: 30px;height:  30px;border-radius: 50%;" onclick="DropdownClick()"> {{$taikhoan->ten}} </a>
            @endif
        @else
        <a onclick="DropdownClick()" class="text-light btn my-2 my-lg-0 dropbtn"><img src="{{asset('public/upload/hocsinh/defaultavatar.jpg')}}" style="width: 30px;height:  30px;border-radius: 50%;" onclick="DropdownClick()"> {{$taikhoan->ten}} </a>
        @endif
        @endif

    <div id="myDropdown" class="dropdown-content">
        <?php

            if(isset($taikhoan)){
        ?>
        <div class="row" style="margin-left: 0px;padding-left: 5px;padding-top: 5px;">
          <div style="width: 30%;">
          @if($info->avatar!=null)
           @if($taikhoan->phanquyen==0)
         <img src="{{asset('public/upload/giaovien/'.$info->avatar)}}" class="avatar_drop">
            @else
            <img src="{{asset('public/upload/hocsinh/defaultavatar.jpg')}}" class="avatar_drop">
            @endif
         @else
         <img src="{{asset('public/upload/hocsinh/defaultavatar.jpg')}}" class="avatar_drop">
         @endif
         </div>
         <div style="width: 65%;float: left;font-size: 15px;padding:5px 15px">
            <a href="" class="text text-dark" style="text-decoration: none;"><b>{{$taikhoan->hodem. ' ' .$taikhoan->ten;}}</b></a>
            <br>
            <i>

                    <?php if($taikhoan->phanquyen==1){ ?>
                    Học sinh
                    <?php } else {?>

                    @if($info->kichhoat==0)
                   <a href="#" data-toggle="tooltip" data-placement="right" title="Giáo viên chính thức" class="text text-dark"  style="font-size: 15px;text-decoration: none;"> Giáo viên <i class="fa-solid fa-circle-check text-primary"></i> </a>
                    @else
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Chưa xác nhận giảng dạy" class="text text-dark"  style="font-size: 15px;text-decoration: none;">Giáo viên <i class="fa-solid fa-circle-exclamation text-danger"></i> </a>
                    @endif
                    <?php }?>

            </i></div>
        </div>

        <a class="trangcanhanh" href="#">Thông tin cá nhân</a>

        @if($taikhoan->phanquyen==0)
        <a class="trangcanhanh" href="#">Quản lý khóa học</a>
        <a class="trangcanhanh" href="#">Liên hệ Admin</a>
        @else
        <a class="trangcanhanh" href="#">Khóa học đã đăng ký</a>
        <a class="trangcanhanh" href="#">Lịch học</a>
        @endif
        <a class="trangcanhanh" href="#">Bảo mật</a>
        <a class="trangcanhanh text-danger text" href="{{URL::to('/logout-user')}}">Đăng xuất</a>
       <?php }
       else{
    ?>

        <a class="trangcanhanh" href="{{URL::to('/register')}}">Đăng ký </a>
        <a class="trangcanhanh" href="{{URL::to('/login')}}">Đăng nhập</a>
        <?php }?>
      </div>
        </div>

  </div>

</nav>
        {{-- Slide --}}
        @yield('slide')
        {{--  --}}
         {{-- Giới thiệu web --}}
        @yield('introduce')
        {{--  --}}
        @yield('content')
<div class="container-fluid" style="padding: 0px;">
    <div class="row">
        <div class="">

        </div>
    </div>
</div>
{{-- END HEADER --}}
{{-- MAIN --}}


<!-- Footer -->

    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">

                    <h5><i style="font-size: 50px;" class="fa-solid fa-book-open-reader text-light"> 3T</i> E-Learning</h5>
                    <ul class="text-light">
                        <p><li><i class="fa-solid fa-house"></i> Địa chỉ: 470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam</li></p>
                        <p><li><i class="fa-solid fa-phone"></i> Số điện thoại: 0964114749</li></p>
                        <p><li>Facebook: <a href="https://www.facebook.com/profile.php?id=100069996974116">https://www.facebook.com/profile.php?id=100069996974116</a></li></p>


                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Chăm sóc khách hàng</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href=""><i class="fa fa-angle-double-right"></i>Hỗ trợ thanh toán</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right"></i>Trợ giúp?</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right"></i>Liên hệ</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right"></i>Tư vấn</a></li>

                    </ul>
                    <h5 class="mt-3">Phương thức thanh toán</h5>
                    <img src="{{asset('public/upload/bank-logo-2.png')}}" style="width: 100%;">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Liên kết</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Trang chủ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Khóa học</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Diễn đàn</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Blog</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Tin tức</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <center><h4 class="text-light">Mạng xã hội:</h4></center>
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <hr>
            </div>
         {{--    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                    <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                </div>
                <hr>
            </div> --}}
        </div>
    </section>
    <!-- ./Footer -->
    <!-- go to top -->
     <a href="#" class="scrollUpButton"><i class="fa-solid fa-angles-up"></i></a>
  <!-- end go to top -->

 <script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script type="text/javascript">
     $(document).ready(function(){
  $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.scrollUpButton').fadeIn();
      } else {
          $('.scrollUpButton').fadeOut();
      }
  });
  $('.scrollUpButton').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 0);
      return false;
  });
 });
</script>
{{-- Sizebar js --}}
<script type="text/javascript" src="{{asset('js/sidebarbootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sidebar.js')}}"></script>
{{--  --}}
<script type="text/javascript">
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function DropdownClick() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#noidung_baihoc' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    </body>
</html>
    {{--  --}}
