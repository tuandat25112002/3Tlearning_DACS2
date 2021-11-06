@extends('../layout')
{{-- @section('slide')
@include('pages.slide')
@endsection --}}
@section('content')
<style type="text/css">

</style>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('/home')}}">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('/khoahoc')}}">Khóa học</a></li>


  </ol>
</nav>
<div class="container mt-4 mb-4">
        @include('pages.element.sidebarkhoahoc')
    </div>
    <div class="col-md-9 ">
      @if(isset($khoahocduocchon))
      <div class="h3 mt-3">DANH SÁCH KHÓA HỌC</div>

      <div class="h4 mt-3 text-center">{{$monduocchon->tendanhmuc}}
      </div>
      <center>
        <hr style="width: 10%;border: 2px solid red;background-color: red;">
      </center>
      <div class="h5">Số khóa học: {{sizeof($khoahocduocchon)}} khóa học</div>
    <div class="row">
        @if(sizeof($khoahocduocchon)!=0)
        @if(sizeof($khoahocduocchon)>3)
        <div class="owl-carousel owl-theme col-lg-12" >
        @foreach($khoahocduocchon as $khoahoc)
        <div class="item">
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
        @endforeach
        </div>
           @else
            @foreach($khoahocduocchon as $khoahoc)

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

        @endforeach
           @endif
        @else
        <div class="w-100">
          <div class="text-center "><i class="fa-solid fa-face-sad-cry h3"></i></i></div>
          <div class="text-center"><i>Rất tiếc! Chúng tôi chưa cập nhật khóa học của {{$monduocchon->tendanhmuc}} ...</i></div>
        </div>
        @endif
        </div>
      @endif
      <div class="h3 mt-2">TẤT CẢ CÁC KHÓA HỌC</div>
      <div class="h4 p-2 mt-4 mb-4" style="border: 1px solid #ccc;border-left: 4px solid red;">Lớp 12</div>
<div>
  <div id="card_data12">


        @include('pages.pagination.khoahoc12')

  </div>

</div>
      <div class="h4 p-2 mt-4 mb-4" style="border: 1px solid #ccc;border-left: 4px solid red;">Lớp 11</div>

  <div id="card_data11">


        @include('pages.pagination.khoahoc11')

  </div>

    <div class="h4 p-2 mt-4 mb-4" style="border: 1px solid #ccc;border-left: 4px solid red;">Lớp 10</div>

  <div id="card_data10">


        @include('pages.pagination.khoahoc10')

  </div>


</div>
</div>
</div>
{{-- ajax pagination --}}

 <script type="text/javascript">
    $(document).ready(function(){
       $(document).on('click', '.page-item a', function(event) {
           event.preventDefault();
           var page = $(this).attr('href').split('khoahoc10=')[1];

           fetch_data10(page);

       });
       function fetch_data10(page){
            $.ajax({
                url:"{{URL::to('pagination/load_khoahoc10/')}}",
                data:"khoahoc10="+ page,
                success:function(data)
                {
                    $('#card_data10').html(data);
                }
            });

       }
    });
</script>
 <script type="text/javascript">
    $(document).ready(function(){
       $(document).on('click', '.page-item a', function(event) {
           event.preventDefault();
           var page = $(this).attr('href').split('khoahoc11=')[1];

           fetch_data11(page);

       });
       function fetch_data11(page){
            $.ajax({
                url:"{{URL::to('pagination/load_khoahoc11/')}}",
                data:"khoahoc11="+ page,
                success:function(data)
                {
                    $('#card_data11').html(data);
                }
            });

       }
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
       $(document).on('click', '.page-item a', function(event) {
           event.preventDefault();
           var page = $(this).attr('href').split('khoahoc12=')[1];

           fetch_data12(page);

       });
       function fetch_data12(page){
            $.ajax({
                url:"{{URL::to('pagination/load_khoahoc12/')}}",
                data:"khoahoc12="+ page,
                success:function(data)
                {
                    $('#card_data12').html(data);
                }
            });

       }
    });
</script>

{{-- end ajax pagination --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,

    nav:true,
    center:false,
    autoplay:true,
    autoplayTimeout:2000,
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
            items:2
        },
        1000:{
            items:3
        }
    }
});
        $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

    </script>
@endsection
