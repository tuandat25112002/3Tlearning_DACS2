@extends('../layout')
@section('slide')
@include('pages.slide')
@endsection
@section('introduce')
@include('pages.introduce')
@endsection
@section('content')
<div class="container-fluid">
    <div class="container danhmuc_monhoc border-primary" style="margin-top: 30px;" >
            <div class="row text-center text-primary">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href=""><h3><i class="fa-solid fa-calculator"></i></h3>
                 Toán Học</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3><i class="fa-solid fa-book-open"></i></h3>
                 Ngữ Văn</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3><i class="fa-solid fa-language"></i></h3>
                 Anh Văn</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3 style="font-weight: bold;">E=m.c<sup>2</sup></h3>
                 Vật Lý</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3><i class="fa-solid fa-vial"></i></h3>
                 Hóa Học</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3><i class="fa-solid fa-dna"></i></h3>
                 Sinh Học</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3><i class="fa-solid fa-earth-africa"></i></h3>
                 Địa Lý</a>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <a href=""><h3><i class="fa-solid fa-hourglass-end"></i></h3>
                 Lịch Sử</a>
             </div>

            </div>


        </div>
</div>
{{-- MAIN --}}

   <main style="margin-top: 30px;">

            <div class="container">
                 {{-- Khóa học --}}
             <h3  style="border-left: 4px solid ;" class="p-2 border-danger"><b>CÁC KHÓA HỌC MỚI <small class="bg-danger text-light" style="padding: 3px;border-radius: 5px;">NEW</small></b></h3>
             <a href="{{URL::to('/khoahoc')}}" class="btn btn-link">Xem tất cả các khóa học</a>

        <div class="row">
              <div class="owl-carousel owl-theme col-lg-12" >
             @foreach($khoahocmoi as $key => $new)
        <div class="item" style="position: relative;">
         <a href="{{URL::to('khoa-hoc/'.$new->slug_sanpham.'='.$new->sanpham_id)}}"><span class="new bg-danger text-light p-1 text-center   " style="position: absolute;z-index: 90;width: 45px"><b>NEW</b></span>

            @if($new->discount>0)
                 <span class="text-light bg-success p-1 text-center " style="position: absolute;z-index: 90;top: 0px; right:  0px;width: 50px">- {{$new->discount}}%</span>
            @endif
            <div class="card hovercard" >
                <div class="cardheader">
               {{--      <img src="https://moon.vn/baigiangvideo/Image/2068.jpg" style="width: 100%;"> --}}
               <img style="height: 100%" src="{{asset('public/upload/sanpham/'.$new->hinhanh)}}" style="width: 100%;">
                </div>
                <div class="avatar" style="">
                    <img alt="" src="{{asset('public/upload/giaovien/'.$new->GiaoVien->avatar)}}">
                </div>
                <div class="info" style="margin-top: 0px;">
                    <div class="title">
                        <a  href="{{URL::to('khoa-hoc/'.$new->slug_sanpham.'='.$new->sanpham_id)}}">{{$new->tensanpham}}</a>
                    </div>
                    <div class="desc">Giáo Viên: {{$new->GiaoVien->hodem}} {{$new->GiaoVien->ten}}</div>
                    <div class="desc">Môn học: {{$new->Danhmuc->tendanhmuc}}</div>
                    <div class="desc justify-content-center text-center d-flex" style="margin:auto; ">
                        <div class=" text-dark p-1">  Học phí:
                    @if($new->price==0)
                         <span class="h6"><b>FREE</b></span>

                    @else
                      @if($new->discount==0)
                    <span class="h6 money-format">{{$new->price}}</span> VND
                        @else
                        <del style="color: #999"><span class=" money-format" >{{$new->price}}</span>VND</del>
                        <span class="h6 money-format">{{($new->price)*(1-($new->discount/100))}}</span> VND
                        @endif
                    @endif
                        <script type="text/javascript">
                    $('.money-format').simpleMoneyFormat();
                    </script>
                    </div>
                    </div>
                </div>
                <div class="bottom">
                   <a href="{{URL::to('khoa-hoc/'.$new->slug_sanpham.'='.$new->sanpham_id)}}" class="btn btn-primary">Đăng ký ngay</a>
                </div>
            </div>
            </a>

        </div>
         @endforeach



    </div>
        </div>
     <hr>
      <h3 style="border-left: 4px solid ;" class="p-2 border-warning"><b>KHÓA HỌC PHỔ BIẾN <small class="bg-warning text-light" style="padding: 3px;border-radius: 5px;">HOT</small></b></h3>
            <a href="{{URL::to('/khoahoc')}}" class="btn btn-link">Xem tất cả các khóa học</a>
                <div class="row">
    <div class="owl-carousel owl-theme col-lg-12" >




             @foreach($khoahochot as $key => $hot)

        <div class="item" style="position: relative;">
         <a href="{{URL::to('khoa-hoc/'.$hot->slug_sanpham.'='.$hot->sanpham_id)}}"><span class="hot bg-warning text-light p-1 text-center   " style="position: absolute;z-index: 90;width: 45px"><b>TOP {{$key + 1}}</b></span>

           <span class="text-light bg-success p-1 text-center " style="position: absolute;z-index: 90;top: 0px; right:  0px;width: 50px;">{{$hot->luotxem}} <br><i class="fa-solid fa-eye"></i></span>
            <div class="card hovercard" >
                <div class="cardheader">

               <img style="height: 100%" src="{{asset('public/upload/sanpham/'.$hot->hinhanh)}}" style="width: 100%;">
                </div>
                <div class="avatar" style="">
                    <img alt="" src="{{asset('public/upload/giaovien/'.$hot->GiaoVien->avatar)}}">
                </div>
                <div class="info" style="margin-top: 0px;">
                    <div class="title" style="text-overflow:ellipsis;  white-space: nowrap; overflow: hidden;">
                        <a  href="{{URL::to('khoa-hoc/'.$hot->slug_sanpham.'='.$hot->sanpham_id)}}">{{$hot->tensanpham}}</a>
                    </div>
                    <div class="desc">Giáo Viên: {{$hot->GiaoVien->hodem}} {{$hot->GiaoVien->ten}}</div>
                    <div class="desc">Môn học: {{$hot->Danhmuc->tendanhmuc}}</div>
                    <div class="desc justify-content-center text-center d-flex" style="margin:auto; ">
                        <div class=" text-dark p-1">  Học phí:
                    @if($hot->price==0)
                         <span class="h6"><b>FREE</b></span>

                    @else
                      @if($hot->discount==0)
                    <span class="h6 money-format">{{$hot->price}}</span> VND
                        @else
                        <del style="color: #999"><span class=" money-format" >{{$hot->price}}</span>VND</del>
                        <span class="h6 money-format">{{($hot->price)*(1-($hot->discount/100))}}</span> VND
                        @endif
                    @endif
                        <script type="text/javascript">
                    $('.money-format').simpleMoneyFormat();
                    </script>
                    </div>
                    </div>

                </div>
                <div class="bottom">
                   <a href="{{URL::to('khoa-hoc/'.$hot->slug_sanpham.'='.$hot->sanpham_id)}}" class="btn btn-primary">Đăng ký ngay</a>
                </div>
            </div>
            </a>

        </div>

         @endforeach



    </div>
    </div>
            <hr>


<h3  style="border-left: 4px solid ;" class="p-2 border-success"><b>KHÓA HỌC CÁC LỚP</b> <small class="bg-warning text-light" style="padding: 3px;border-radius: 5px;">10</small> <small class="bg-success text-light" style="padding: 3px;border-radius: 5px;">11</small> <small class="bg-danger text-light" style="padding: 3px;border-radius: 5px;">12</small></h3>

<div class="row" style="padding: 10px;">

<div class="tab col-lg-3" style="padding: 0px;">
    @foreach($lophoc as $lop)
  <button class="tablinks" onclick="openCity(event, '{{$lop->idlop}}')" id="defaultOpen">Lớp {{$lop->tenlop}}</button>
    @endforeach
  {{-- <button class="tablinks" onclick="openCity(event, '11')">Lớp 11</button>
  <button class="tablinks" onclick="openCity(event, '12')">Lớp 12</button> --}}
  <p style="padding: 20px 15px;font-size: 18px;"><a class=" text-dark" href="{{URL::to('/khoahoc')}}">Xem tất cả</a></p>
</div>
 @foreach($lophoc as $lop)
<div id="{{$lop->idlop}}" class="tabcontent col-lg-9">
   <div class="row">
    <?php $count=0 ?>
  @foreach($khoahocs as $khoahoc)

    @if($khoahoc->idlop==$lop->idlop && $count<6)

    <div class="col-md-4">
         <div class="card hovercard">
            <div class="cardheader">
              <img alt="{{$khoahoc->slug_sanpham}}" src="{{asset('public/upload/sanpham/'.$khoahoc->hinhanh)}}" style="width: 100%;height: 100%;">
            </div>
            <div class="avatar" style="">
              <img alt="{{$khoahoc->Giaovien->hodem}} {{$khoahoc->Giaovien->ten}}" src="{{asset('public/upload/giaovien/'.$khoahoc->Giaovien->avatar)}}">
            </div>
            <div class="info" style="margin-top: 0px;">
              <div class="title" style=" text-overflow: ellipsis;  white-space: nowrap; overflow: hidden;">
                <a  href="{{URL::to('khoa-hoc/'.$khoahoc->slug_sanpham.'='.$khoahoc->sanpham_id)}}">{{$khoahoc->tensanpham}}</a>
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
                {{-- <del style="color: #999"><span class=" money-format" >{{$khoahoc->price}}</span>VND</del> --}}
                <span class="h6 money-format">{{($khoahoc->price)*(1-($khoahoc->discount/100))}}</span> VND
                @endif
                @endif
                <script type="text/javascript">
                  $('.money-format').simpleMoneyFormat();
                </script>
              </div>
            </div>
            <div class="bottom">
              <a href="{{URL::to('khoa-hoc/'.$khoahoc->slug_sanpham.'='.$khoahoc->sanpham_id)}}" class="btn btn-primary">Đăng ký ngay</a>
            </div>
          </div>
            </div>
             <?php $count=$count+1?>
            @endif


        @endforeach
    </div>
    <p style="text-align: right;font-size: 20px;" class="text-primary text"><a style="text-decoration: none;" href="">Xem thêm...</a></p>
</div>
@endforeach


</div>
<hr>


 <div class="container ">
    <div class="row ">
        <div class="col-12 text-center pt-3">
            <h3><b>CÁC KHOÁ HỌC THI THPT-QG</b></h3>
             <p ><i>"Bắt đầu sớm sẽ có được thành công sớm, bắt đầu muộn sẽ có được thành công muộn. Không bắt đầu đừng mong có thành công..."</i></p>
            <center><h5><a href="{{URL::to('/khoahoc')}}" class="text-primary text text-decoration-none">Xem tất cả các khóa học</a></h5></center>

        </div>


 <div class="owl-carousel owl-theme col-md-12" >




             @foreach($khoahocthi as $key => $thi)

        <div class="item" style="position: relative;">
         <a href="{{URL::to('khoa-hoc/'.$thi->slug_sanpham.'='.$thi->sanpham_id)}}"><span class="new bg-primary text-light p-1 text-center   " style="position: absolute;z-index: 90;width: 70px"><b>THPTQG</b></span>

            @if($thi->discount>0)
            <span class="text-light bg-success p-1 text-center " style="position: absolute;z-index: 90;top: 0px; right:  0px;width: 50px">- {{$thi->discount}}%</span>
            @endif
            <div class="card hovercard" >
                <div class="cardheader">
               {{--      <img src="https://moon.vn/baigiangvideo/Image/2068.jpg" style="width: 100%;"> --}}
               <img style="height: 100%" src="{{asset('public/upload/sanpham/'.$thi->hinhanh)}}" style="width: 100%;">
                </div>
                <div class="avatar" style="">
                    <img alt="" src="{{asset('public/upload/giaovien/'.$thi->GiaoVien->avatar)}}">
                </div>
                <div class="info" style="margin-top: 0px;">
                    <div class="title" style="text-overflow:ellipsis;  white-space: nowrap; overflow: hidden;">
                        <a  href="{{URL::to('khoa-hoc/'.$thi->slug_sanpham.'='.$thi->sanpham_id)}}">{{$thi->tensanpham}}</a>
                    </div>
                    <div class="desc">Giáo Viên: {{$thi->GiaoVien->hodem}} {{$thi->GiaoVien->ten}}</div>
                    <div class="desc">Môn học: {{$thi->Danhmuc->tendanhmuc}}</div>
                    <div class="desc justify-content-center text-center d-flex" style="margin:auto; ">
                        <div class=" text-dark p-1">  Học phí:
                    @if($thi->price==0)
                         <span class="h6"><b>FREE</b></span>

                    @else
                      @if($thi->discount==0)
                    <span class="h6 money-format">{{$thi->price}}</span> VND
                        @else
                        <del style="color: #999"><span class=" money-format" >{{$thi->price}}</span>VND</del>
                        <span class="h6 money-format">{{($thi->price)*(1-($thi->discount/100))}}</span> VND
                        @endif
                    @endif
                        <script type="text/javascript">
                    $('.money-format').simpleMoneyFormat();
                    </script>
                    </div>
                    </div>
                </div>
                <div class="bottom">
                   <a href="{{URL::to('khoa-hoc/'.$thi->slug_sanpham.'='.$thi->sanpham_id)}}" class="btn btn-primary">Đăng ký ngay</a>
                </div>
            </div>
            </a>

        </div>

         @endforeach

    </div>

    </div>
 </div>
 </div>
 <div class="bgimg-2">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div class="container mt-5">
    <div class="row ">
        <div class="col-12 text-center pt-3">
            <h3>TIN TỨC GIÁO DỤC <small class="bg-primary text-light" style="padding: 3px;border-radius: 5px;">NEWS</small></h3>
            <p><i>"Thông qua việc đọc báo, chúng ta biết được rất nhiều thông tin bổ ích như: tình hình kinh tế - xã hội trong nước, quốc tế và của địa phương, giá cả các mặt hàng, tình hình lao động - việc làm, tình hình an ninh - trật tự,..."</i></p>

        </div>
    </div>
{{-- TIN TỨC --}}
    <!--Start code-->
    <div class="row">
        <div class="col-12 ">
            <center><h5><a href="" class="text-primary text text-decoration-none">Xem tất cả</a></h5></center>
            <!--SECTION START-->
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pt-2" style="padding-left:7px ; padding-right: 7px;">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <!--dots navigate-->
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            @for($i=1;$i<3;$i++)
                            <li data-target="#featured" data-slide-to="{{$i}}"></li>
                            @endfor
                          {{--   <li data-target="#featured" data-slide-to="3"></li> --}}
                        </ol>

                        <!--carousel inner-->
                        <div class="carousel-inner">
                            <!--Item slider-->
                            <div class="carousel-item active">
                                <div class="text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <img class="img-fluid w-100 h-100"
                                                     src="https://ketnoigiaoduc.vn/upload_images/images/cap-nhat-tin-tuc-tuyen-sinh-moi-nhat-voi-dich-vu-tuyen-sinh-truc-tuyen-1.jpg"
                                                     alt="Bootstrap news template">
                                            </a>
                                        </div>
                                        <div class="position-absolute  b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1 p-2">Bootstrap 4 template news portal magazine perfect for news site</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta p-2">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                                <span class="news-date">Oct 22, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Item slider-->
                            @for($i=0;$i<3;$i++)
                            <div class="carousel-item ">
                                <div class="text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <img class="img-fluid w-100"
                                                     src="https://ketnoigiaoduc.vn/upload_images/images/cap-nhat-tin-tuc-tuyen-sinh-moi-nhat-voi-dich-vu-tuyen-sinh-truc-tuyen-1.jpg"
                                                     alt="Bootstrap news template">
                                            </a>
                                        </div>
                                        <div class="position-absolute  b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1 p-2">Bootstrap 4 template news portal magazine perfect for news site</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta p-2">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                                <span class="news-date">Oct 22, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            <!--end item slider-->
                        </div>
                        <!--end carousel inner-->
                    </div>

                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End slider news-->

                <!--Start box news-->
                <div class="col-12 col-md-6">
                    <div class="row">
                        <!--news box-->
                        @for($i=0;$i<4;$i++)
                          <div class="col-6 p-2 ">
                            <div class="text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="https://ketnoigiaoduc.vn/upload_images/images/cap-nhat-tin-tuc-tuyen-sinh-moi-nhat-voi-dich-vu-tuyen-sinh-truc-tuyen-1.jpg"
                                                 alt="simple blog template bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Lifestyle</a>

                                        <!--title-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Should you see the Fantastic Beasts sequel?</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endfor
                        <!--end news box-->
                    </div>
                </div>
                <!--End box news-->
            </section>
            <!--END SECTION-->
        </div>
    </div>
    <!--end code-->


</div>
 <div class="container-fluid ">
    <div class="row ">
        <div class="col-12 text-center pt-3">
            <h3><b>ĐỘI NGŨ GIÁO VIÊN</b></h3>
             <p ><i>"Đội ngũ giáo viên tận tình, thấu hiểu học sinh..."</i></p>
            <center><h5><a href="{{URL::to('/khoahoc')}}" class="text-primary text text-decoration-none">Xem tất cả các giáo viên</a></h5></center>

        </div>

<div class="w-100 " style="background-image: url('{{asset('public/upload/bg-image/hinh-nen-vu-tru-tuyet-dep.jpg')}}');background-size: cover;background-repeat: no-repeat; background-attachment: fixed;">
 <div class="owl-carousel owl-theme container pt-4" >




             @foreach($giaoviens as $key => $giaovien)

        <div class="item pl-4 pr-4" style="position: relative;">
         <a href="{{URL::to('giao-vien/'.$giaovien->id)}}">

            <div class="card hovercard bg-light" style="border-radius:15px; background-image: url('{{asset('public/upload/bg-image/teacher_bg.png')}}');" >
                <div class="cardheader" style="height: 150px;">

                </div>
                <div class="avatar" style="">
                    <img alt="" src="{{asset('public/upload/giaovien/'.$giaovien->avatar)}}">
                </div>
                <div class="info pb-3 pt-4" style="margin-top: 0px;">
                    <div class="title ">
                        <a class="text-decoration-none" href="#">
                            {{$giaovien->gioitinh==0 ? "Thầy " : "Cô "}}
                            {{$giaovien->hodem. " " .$giaovien->ten}}
                        </a>
                    </div>
                    <div class="desc">Số điện thoại: {{$giaovien->sodienthoai}}</div>
                </div>
                <div class="bottom">

                </div>
            </div>
            </a>

        </div>

         @endforeach

         </div>
     </div>
    </div>
 </div>

        </main>
        <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,

    nav:true,
    center:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },

        380:{
            center:true,
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
        $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

    </script>
@endsection
