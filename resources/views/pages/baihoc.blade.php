@extends('../layout')

 @section('content')
 <style type="text/css">
     li.activelist{
        background-color: #f8dcd3;
     }
     .headervideo{
        border: 1px solid #ccc;border-left: 3px solid blue;
     }
     .headerlist{
        border: 1px solid #ccc;border-left: 3px solid blue;
     }
     .bodylist{
        height: 539px;overflow-y: auto;border: 1px solid #ccc;overflow-x:hidden;margin-bottom: 30px;

     }
     .bodyleft{
        border: 1px solid #ccc;overflow-x:hidden;margin-bottom: 30px
     }
     .drap-text{
        overflow: hidden;text-overflow: ellipsis; white-space: nowrap;
     }
     @media only screen and (max-device-width: 760px) {
        .bodylist{
            height: 400px;
        }

     }
 </style>
     <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('./')}}">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="#">Khóa học</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::to('khoa-hoc/'.$khoahoc->slug_sanpham.'='.$khoahoc->sanpham_id)}}"">{{$khoahoc->tensanpham}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$baihoc->tieude}}</li>

  </ol>
</nav>
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-8" >
            <div class="container-fluid " >
                <div class="p-2 headervideo" >
                VIDEO BÀI GIẢNG
                </div>
            </div>
            <div class="col-md-12 mb-3 " >
                <?php echo $baihoc->noidung;?>
                <div class="row">
                <div class="container-fluid ">
                @if(isset($prebaihoc))
                <a href="{{URL::to('/bai-hoc/'.$prebaihoc->slug_baihoc.'='.$prebaihoc->id_baihoc)}}" class="btn-primary btn"> Bài học trước</a>
                @else
                <a href="{{URL::to('/bai-hoc/'.$lastbaihoc->slug_baihoc.'='.$lastbaihoc->id_baihoc)}}" class="btn btn-link">Xem bài cuối cùng...</a>
                @endif
                @if(isset($nextbaihoc))
                <a href="{{URL::to('/bai-hoc/'.$nextbaihoc->slug_baihoc.'='.$nextbaihoc->id_baihoc)}}" class="btn-primary btn float-right">Bài học sau</a>
                @else
                <a href="{{URL::to('/bai-hoc/'.$firstbaihoc->slug_baihoc.'='.$firstbaihoc->id_baihoc)}}" class="btn btn-link float-right">Xem bài đầu tiên...</a>
                @endif
                </div>
                </div>
            </div>

             <div class="container-fluid " >
                <div class="p-2 headervideo" >
                TÀI LIỆU HỌC
                </div>
                <div class="bodyleft p-3">
                    @if(sizeof($tailieus)==0)
                   * Chưa cập nhật tài liệu cho bài học này...
                    @else
                    @foreach($tailieus as $key=>$tailieu)
                    <p><a href="{{URL::to('/download',$tailieu->id)}}" class="text-decoration-none">{{$key+1}}. {{$tailieu->tenfile}} <i class="fa fa-download"></i></a></p>
                     @endforeach
                     @endif
                </div>
                <div>
                  <h3>Hỏi đáp ?</h3>
                   <textarea class="form-control" id="noidung_baihoc" name="noidung" rows="4" resize="none" placeholder="Gửi câu hỏi..." style="border-radius: 10px;"></textarea>
                                  <button class="btn btn-primary mt-2">Gửi câu hỏi</button>
                                  </div>
                  @for($i=1;$i<=2;$i++)
                  <div class="container-fluid">
                  <div class="media  row p-3 mt-2 mb-2 ">
                      <img src="{{asset('public/upload/HIH_DV2021 (465).jpg')}}" alt="John Doe" class="mr-3  rounded-circle" style="width:80px;height: 80px;">
                      <div class="media-body">
                        <h5>Dương Tuấn Đạt <small><i>Posted on February 19, 2016</i></small></h5>
                        Lorem ipsum...
                        <div class="d-flex">
                            <span><a href="">Like</a></span>
                            <span class="pl-5"><a href="">Trả lời</a></span>
                            <span class="pl-5"><a href="">Ẩn</a></span>
                        </div>
                        <div class="media p-3">
                          <img src="{{asset('public/upload/giaovien/'.$giaovien->avatar)}}" alt="Jane Doe" class="mr-3  rounded-circle" style="width:60px;">
                          <div class="media-body">
                            <h6>{{$giaovien->hodem}} {{$giaovien->ten}} <small><i>Posted on February 20 2016</i></small></h6>
                            Lorem ipsum...
                             <div class="d-flex">
                                <span><a href="">Like</a></span>
                                <span class="pl-3"><a href="">Trả lời</a></span>
                                <span class="pl-3"><a href="">Ẩn</a></span>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    </div>
                  @endfor
            </div>

        </div>
        <div class="col-md-4">
            <div class="w-100" >
                <div class="p-2 headerlist" >
                DANH SÁCH PHÁT
                </div>
            </div>
            <?php
            foreach($baihocs as $key=>$list){
                if($list->id_baihoc==$baihoc->id_baihoc){
                $thutu=$key+1;
                break;
                }
            }
            ?>
            <div class="bg-light bodylist" >
                <div class="w-100" >
                    <div class="w-100">
                        <ul class="w-100">
                            <li class="headerbodylist p-3">
                                <h5>Khóa học: {{$khoahoc->tensanpham}}</h5>
                                Bài giảng: {{$thutu}}/{{sizeof($baihocs)}}
                                <br>
                                <span>Đang phát: {{$baihoc->tieude}}</span>
                            </li>
                            @foreach($baihocs as $key=>$list)
                                @if($list->id_baihoc == $baihoc->id_baihoc)
                                <li class="activelist p-2">
                                    <div class="row ml-0">
                                    <div style="width: 30%;">
                                        <img class="w-100" src="{{asset('public/upload/sanpham/'.$khoahoc->hinhanh)}}">
                                    </div>
                                    <div style="width: 65%; " class=" drap-text pl-2">
                                    <a class="text-dark text-decoration-none" href="{{URL::to('/bai-hoc/'.$list->slug_baihoc.'='.$list->id_baihoc)}}">Bài {{$key+1}}: <b>{{$list->tieude}}</b></a>
                                    <br>
                                    Đang xem
                                    <br>
                                    Giáo viên: <a href="">{{$giaovien->hodem}} {{$giaovien->ten}}</a>
                                  </div>
                                     </div>
                                </li>

                                @else
                                <li class=" p-2">
                                  <div class="row ml-0 " >
                                    <div style="width: 30%;">
                                        <img class="w-100" src="{{asset('public/upload/sanpham/'.$khoahoc->hinhanh)}}">
                                    </div>
                                    <div style="width: 65%; overflow: hidden;text-overflow: ellipsis; white-space: nowrap;" class="pl-2">
                                    <a class="text-dark text-decoration-none" href="{{URL::to('/bai-hoc/'.$list->slug_baihoc.'='.$list->id_baihoc)}}">Bài {{$key+1}}: <b>{{$list->tieude}}</b></a>
                                    <br>
                                    <a href="{{URL::to('/bai-hoc/'.$list->slug_baihoc.'='.$list->id_baihoc)}}">Xem ngay</a>
                                    <br>
                                    Giáo viên: <a href="">{{$giaovien->hodem}} {{$giaovien->ten}}</a>
                                    </div>
                                   </div>
                                </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
               <div class="w-100">
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
    </div>
</div>
@endsection
