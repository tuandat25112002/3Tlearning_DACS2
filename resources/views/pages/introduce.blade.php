<style type="text/css">
    .bg-foryou{
        background-color: white;
        max-height: 400px;
        height: 100%;
        border-radius: 10px;
        overflow-y: auto;
        overflow-x: hidden;
        box-shadow: 0 3px 10px rgb(196 66 62 / 10%);

    }
     .bg-foryou::-webkit-scrollbar {
          width: 10px;

        }

        /* Track */
      .bg-foryou::-webkit-scrollbar-track {
          background: #f1f1f1;
        }

        /* Handle */
      .bg-foryou::-webkit-scrollbar-thumb {
          background: #888;
            border-radius: 10px;
        }

        /* Handle on hover */
      .bg-foryou::-webkit-scrollbar-thumb:hover {
          background: #555;
    }
    .avatar-foryou{
        width: 20%;
    }
    .avatar-foryou img{
        width: 100%;
        border-radius: 10px;
    }
    .info-foryou{
        width: 75%;
        padding-left: 20px;
    }
    .vertical-center {
      margin: 0;
      position: absolute;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      display: flex;
      justify-content: center;

    }
    .title{

        text-overflow: ellipsis;  white-space: nowrap; overflow: hidden;
    }
</style>
<div class="container mt-4 mb-2">
    <div class="row">
    <div class="col-md-6">
        <div class="h3"><b><i class="fa-solid fa-eye"></i> Giới thiệu trang web</b></div>
        <iframe width="100%" height="400px" style="border-radius: 10px;" src="https://www.youtube.com/embed/tpErW3pc4g0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-6" >
        <div class="h3"><b><i class="fa-solid fa-face-grin-hearts"></i> Khóa học dành cho bạn</b></div>
        <div class="col-md-12 p-0 bg-foryou">
            @if($khoahocforme!=null)
            <ul class="list-foryou " style=" padding: 20px 20px 0px 20px;">
                @foreach($khoahocforme as $list)
                <li>
                    <div class="w-100 d-flex mt-1 mb-2">
                        <div class="avatar-foryou">
                            <img src="{{asset('public/upload/giaovien/'.$list->GiaoVien->avatar)}}">

                        </div>
                        <div class="info-foryou">
                           <div class="title "><b>Khóa học :</b> {{$list->tensanpham}}</div>
                           <b>Môn học:</b> {{$list->Danhmuc->tendanhmuc}} <br>
                           <b>Giáo viên:</b>{{$list->GiaoVien->hodem}} {{$list->GiaoVien->ten}}<br>
                           <a href={{URL::to('khoa-hoc/'.$list->slug_sanpham.'='.$list->sanpham_id)}}>Đăng ký ngay</a>
                        </div>
                    </div>
                </li>
               @endforeach

            </ul>
            @else
            <div class="vertical-center w-100 h5 text-danger"><b>Mục này chỉ dành cho tài khoản là Học sinh...</b></div>
            @endif
        </div>
    </div>
    </div>
</div>
