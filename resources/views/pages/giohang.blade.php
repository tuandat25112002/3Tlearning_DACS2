<?php
$tongtien=0;
?>
@extends('../layout')
@section('content')
<style type="text/css">
div.tenkhoahoc {
    max-width: 220px;

    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

del {
    color: #999;
}

@media only screen and (max-device-width: 768px) {
    .row-step li {
        padding: 5px 20px;
    }

    td.image {
        width: 150px;
    }

    td.image img {
        width: 150px;
        border-radius: 10px;
    }
}
</style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{asset('home')}}">Trang Chủ</a></li>
        <li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
    </ol>
</nav>
<div class="container mt-4 mb-4">
    <div class="container pt-4 pb-3 mb-5">
        <div class="col-md-12 ">
            <ul class="row-step d-flex">
                <li class="active"><span>GIỎ HÀNG</span><span class="checkout-triangle-right"></span></li>
                <li class="step-2"><span class="checkout-triangle-left"></span>THANH TOÁN<span
                        class="checkout-triangle-right"></span></li>
                <li class="step-3"><span class="checkout-triangle-left"></span>HOÀN TẤT</li>
            </ul>
        </div>
    </div>
    <div class="w-100">
        <div class="row">
            <div class="col-md-8">
                <div class="header-cart mt-3">
                    <h4><i class="fa-solid fa-cart-shopping"></i> {{sizeof($carts)}} Khóa học</h4>
                </div>
                <div class="body-cart mt-3">
                    <div class="table-responsive">
                        <table class="table table-borderless" style="width: 100%;">
                            <thead>

                                <tr class="tr-head " style="background-color: white;border: none;">
                                    <th scope="col" class="checkbox-td"><input type="checkbox" name=""></th>
                                    <th scope="col" class="infor-details" colspan="2">Khóa học</th>
                                    <th class="infor-details" scope="col">Học phí</th>

                                    <th class="infor-details" scope="col" class="text-center">Thao tác</th>
                                </tr>

                            </thead>
                            <tbody>
                                @if(sizeof($carts)==0)
                                <tr>
                                    <td class="text-center pt-3 pb-3" colspan="7">
                                        Không có khóa học nào trong giỏ hàng
                                        <br><a href="{{URL::to('/khoahoc')}}">Xem tất cả các khóa học</a>
                                    </td>
                                </tr>
                                @else
                                @foreach($carts as $cart)
                                <?php
                                    $tongtien=$tongtien+($cart->price)*(1-$cart->discount*0.01);
                                    ?>
                                <tr>
                                    <td colspan="7" class="pt-2 pb-2"></td>
                                </tr>
                                <tr style="background-color: white;">
                                    <th style="justify-items: center;" class="checkbox-td" scope="row"><input
                                            type="checkbox" name="" value="{{$cart->id}}"></th>

                                    <td class="image"><img src="{{asset('public/upload/sanpham/'.$cart->hinhanh)}}">
                                    </td>
                                    <td class=" pt-3 pl-0 infor-details">
                                        <div class=" tenkhoahoc"><a class="h6 text-decoration-none"
                                                href="{{URL::to('khoa-hoc/'.$cart->slug_sanpham.'='.$cart->sanpham_id)}}">{{$cart->tensanpham}}</a>
                                        </div>
                                        <b>Giáo viên: </b>{{$cart->gioitinh==0?"Thầy ": "Cô "}} <a
                                            class="text-decoration-none" href="">{{$cart->hodem}} {{$cart->ten}}</a>
                                        <br><span><b>Môn học: </b> {{$cart->tendanhmuc}}</span>
                                        <br><b>Lớp: </b>{{$cart->tenlop}}
                                    </td>
                                    <td>
                                        @if($cart->discount>0)
                                        <del><span class="money-format">{{$cart->price}}</span>VND</del>
                                        @endif
                                        <span
                                            class="money-format">{{($cart->price)*(1-$cart->discount*0.01)}}</span>VND

                                    </td>


                                    <td class="text-center"><a onclick="return confirm('Bạn muốn xóa khóa học này ra khỏi giỏ hàng ?')" class="text-danger" href="{{URL::to('cart-delete/'.$cart->id)}}"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- left-col --}}
            <div class="col-md-4">
                <div class="p-2 ">

                    <div class=" border bg-white mb-4">
                        <div class="p-0 bg-primary text-center text-light pt-3 pb-2 w-100">
                            <h4>Tổng tiền</h4>
                        </div>
                        <div class="tongtien-body p-3">
                            <p><span class="h6 pr-2">Số lượng: </span> <span class="h6">{{sizeof($carts)}} khóa
                                    học</span></p>
                            <p><span class="h6 pr-2">Tổng thanh toán: </span> <span class="h5"><span
                                        class="money-format">{{$tongtien}}</span> VND</span></p>
                            <p><span>Mã giảm giá:</span><input type="text" class="form-control"
                                    placeholder="Mã giảm giá..." name=""></p>
                            <button class="w-100 btn btn-primary">THANH TOÁN</button>
                        </div>

                    </div>
                    <button class="collap"><span class="h4">Gợi ý</span></button>
                    <div class="content">
                        <div class="pt-2">
                            <p><a href="{{URL::to('/khoahoc')}}">Tất cả các khóa học</a></p>
                            <p><a href="/khoahoc">Các khóa học đã Đăng ký</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container mt-4 mb-5">
    <h3>Các khóa học dành cho bạn</h3>
    @if($khoahocforme !=null)
    <div class="row">
        <div class="owl-carousel owl-theme col-lg-12">

            @foreach($khoahocforme as $khoahoc)
            <div class="item">
                <div class="card hovercard">
                    <div class="cardheader">
                        <img alt="{{$khoahoc->slug_sanpham}}"
                            src="{{asset('public/upload/sanpham/'.$khoahoc->hinhanh)}}"
                            style="width: 100%;height: 100%;">
                    </div>
                    <div class="avatar" style="">
                        <img alt="{{$khoahoc->Giaovien->hodem}} {{$khoahoc->Giaovien->ten}}"
                            src="{{asset('public/upload/giaovien/'.$khoahoc->Giaovien->avatar)}}">
                    </div>
                    <div class="info" style="margin-top: 0px;">
                        <div class="title" style=" text-overflow: ellipsis;  white-space: nowrap; overflow: hidden;">
                            <a
                                href="{{URL::to('khoa-hoc/'.$khoahoc->slug_sanpham.'='.$khoahoc->sanpham_id)}}">{{$khoahoc->tensanpham}}</a>
                        </div>
                        <div class="desc">Giáo Viên: {{$khoahoc->Giaovien->hodem}} {{$khoahoc->Giaovien->ten}}</div>
                        <div class="desc">Môn học: {{$khoahoc->Danhmuc->tendanhmuc}}</div>
                        <div class=" text-dark p-1"> Học phí:
                            @if($khoahoc->price==0)
                            <span class="h6"><b>FREE</b></span>

                            @else
                            @if($khoahoc->discount==0)
                            <span class="h6 money-format">{{$khoahoc->price}}</span> VND
                            @else
                            {{-- <del style="color: #999"><span class=" money-format" >{{$khoahoc->price}}</span>VND</del>
                            --}}
                            <span class="h6 money-format">{{($khoahoc->price)*(1-($khoahoc->discount/100))}}</span> VND
                            @endif
                            @endif

                        </div>
                    </div>
                    <div class="bottom">
                        <a href="{{URL::to('khoa-hoc/'.$khoahoc->slug_sanpham.'='.$khoahoc->sanpham_id)}}"
                            class="btn btn-primary">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @else
    <center>
        <h5 class="text-danger mt-3 mb-3">Mục này chỉ dành cho tài khoản là <b>Học Sinh</b></h5>
    </center>
    @endif
</div>
<script type="text/javascript">
$('.money-format').simpleMoneyFormat();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,

    nav: true,
    center: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },

        380: {
            center: true,
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
$('.play').on('click', function() {
    owl.trigger('play.owl.autoplay', [1000])
})
$('.stop').on('click', function() {
    owl.trigger('stop.owl.autoplay')
})
</script>

<script>
var coll = document.getElementsByClassName("collap");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}
</script>
@endsection
