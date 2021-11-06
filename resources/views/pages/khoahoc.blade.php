
@extends('../layout')

 @section('content')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");

  });
});
</script>
 <script src="{{asset('js/simple.money.format.js')}}"></script>
<style>
#panel, #flip {
  padding: 5px;


}

/*#panel {
  padding: 50px;
  display: none;
}*/
</style>
{{-- MAIN --}}
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{asset('/khoahoc')}}">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="#">Khóa học</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$khoahoc->tensanpham}}</li>
  </ol>
</nav>
<div class="container " style="padding: 0px;overflow: hidden;">

    <div class="row" >
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{asset('public/upload/sanpham/'.$khoahoc->hinhanh)}}" style="width: 100%;">
                </div>
                <div class="col-md-5">
                    <style type="text/css">
                        .infokhoahoc{
                            list-style: none;
                        }
                        .infokhoahoc li{
                            line-height: 40px;
                        }
                    </style>
                    <ul class="infokhoahoc">
                        <form method="POST" action="{{URL::to('/cart')}}">
                        @csrf
                        <li><h3><b>KHÓA HỌC</b> <br>{{$khoahoc->tensanpham}}</h3></li>
                        <li>Môn học: {{$khoahoc->Danhmuc->tendanhmuc}}</li>
                        <li>Lớp: {{$khoahoc->Danhmuc->id_lop}}</li>
                        <li>Giáo viên: <a href="">{{$khoahoc->GiaoVien->hodem}} {{$khoahoc->GiaoVien->ten}}</a></li>
                        <li>Học phí:
                          @if($khoahoc->price==0)
                          <span class="h5">Khóa học Miễn Phí</span>


                         @else
                            @if($khoahoc->discount==0)
                            <span class="h5 money-details" >{{$khoahoc->price}}</span> VND
                            @else
                         <del style="color: #999"><span class="h6 money-details" >{{$khoahoc->price}}</span> VND</del>
                         <span class="h5 money-details">{{($khoahoc->price)*(1-($khoahoc->discount/100))}}</span> VND
                           @endif
                        @endif
                          <script type="text/javascript">
                         $('.money-details').simpleMoneyFormat();
                         </script>
                        </li>
                        <li>Số bài giảng: {{count($baihocs)}} bài giảng</li>
                        <li>Lượt xem khóa học: {{$khoahoc->luotxem}} <i class="fa-solid fa-eye"></i></li>
                        <li class="mb-3 pt-3">
                            <input type="hidden" name="id_khoahoc" value="{{$khoahoc->sanpham_id}}">
                            @if($khoahoc->price>0)
                            <button class="btn btn-primary">Đăng ký ngay</button>
                            @else
                            <a class="btn btn-primary" href="{{URL::to('/dangkythanhcong')}}">Đăng ký ngay</a>
                            @endif
                            <a href="" class="btn btn-danger">+ Yêu thích <i class="fa-solid fa-heart"></i></a></li>
                         </form>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <p><h4>TỔNG QUÁT KHÓA HỌC</h4></p>
                <div id="panel">
                <?php
                    echo $khoahoc->motasanpham;
                ?>
                </div>
                <button id="flip" onclick="myFunction(this)" class="btn btn-primary">Thu gọn / Mở rộng</button>
                <hr>
                <h4>DANH SÁCH BÀI HỌC</h4>
                <ul class="mucluckhoahoc" >

                    @if(Session::get('taikhoan')!=null)
                        @foreach($baihoc as $key => $bai)
                            <li><a href="{{URL::to('/bai-hoc/'.$bai->slug_baihoc.'='.$bai->id_baihoc)}}">{{$key+1}}. {{$bai->tieude}}</a></li>
                        @endforeach
                    @else
                    @foreach($baihoc as $key => $bai)
                        <li><a onclick ="return confirm('Hãy đăng nhập để thực hiện thao tác này!');" href="{{URL::to('/login')}}">{{$key+1}}. {{$bai->tieude}}</a></li>
                    @endforeach
                    @endif
                    <li><a href="">...</a></li>
                    <li ><a class="text text-danger text-decoration-none" >Hãy Đăng Ký để xem các bài khác của Khóa học !</a></li>
                </ul>

                <button class="button" href=""><span><a href="">Đăng ký khóa học</a></span></button>
                <hr>
                <form>
                <div class="form-group">
                            <label for="exampleInputEmail1"><h4>ĐÁNH GIÁ:</h4></label>
                            @for($i=1;$i<=5;$i++)
                            <div class="p-3" style="display: inline-flex;">
                                <input type="radio" name="start">
                                @for($j=1;$j<=$i;$j++)
                                <i class="fa-solid fa-star" style="color: orange;"></i>
                                @endfor
                            </div>
                            @endfor
                            <textarea class="form-control" id="noidung_baihoc" name="noidung" rows="4" resize="none" placeholder="Bình luận..."></textarea>

                </div>
               {{--  <a href="">Xem bình luân</a> --}}
               <button class="btn btn-primary">Gửi đánh giá</button>
               </form>
            </div>

        </div>
        <div class="col-md-3">
            <h3 class="p-2" style="border-left: 4px solid red;"> Khóa học phổ biến</h3>
            <hr>
            <h3 class="p-2" style="border-left: 4px solid green;"> Tin tức</h3>
            <hr>
            <h3 class="p-2" style="border-left: 4px solid blue"> Video giới thiệu</h3>
            <hr>
            <div class="container-fluid p-0">
               <div class="bg-dark p-2 text-light"><h3>Tag</h3></div>

            </div>
        </div>
    </div>

      <div class="col-lg-12">
            <p><h4>KHÓA HỌC LIÊN QUAN</h4></p>
            <div class="row">
                @for($i=0;$i<4;$i++)
               <div class="col-md-3 {{-- col-sm-6 --}}">
                     <div class="card hovercard" >
                <div class="cardheader">
                    <img src="https://moon.vn/baigiangvideo/Image/2068.jpg" style="width: 100%;">
                </div>
                <div class="avatar" style="">
                    <img alt="" src="https://scontent.fdad3-1.fna.fbcdn.net/v/t1.6435-9/161583477_371297240954844_8146333762460305424_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Yd6vCXwJvFsAX8oUY4B&_nc_ht=scontent.fdad3-1.fna&oh=7d0f65a5ad0d9258a0a270ad8929f121&oe=6177FABF">
                </div>
                <div class="info" style="margin-top: 0px;">
                    <div class="title">
                        <a target="_blank" href="https://scripteden.com/">Khóa Tiền giải đề THPT Quốc Gia</a>
                    </div>
                    <div class="desc">Giáo Viên: Cô Trang Anh</div>
                    <div class="desc">Môn học: Tiếng Anh</div>
                    <div class="desc">Lớp: 12</div>
                </div>
                <div class="bottom">
                   <a href="" class="btn btn-primary">Đăng ký ngay</a>
                </div>
            </div>
               </div>
               @endfor
            </div>
            </div>
</div>

@endsection

