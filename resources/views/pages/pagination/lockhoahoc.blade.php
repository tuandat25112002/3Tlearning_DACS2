<script src="{{asset('js/simple.money.format.js')}}"></script>
 <div class="row">
 @foreach($khoahocduocloc as $list)
     {{--    @if($list->id_danhmuc==$monduocchon->id) --}}
        <div class="col-md-4">
          <div class="card hovercard">
            <div class="cardheader">
              <img alt="{{$list->slug_sanpham}}" src="{{asset('public/upload/sanpham/'.$list->hinhanh)}}" style="width: 100%;height: 100%;">
            </div>
            <div class="avatar" style="">
              <img alt="{{$list->Giaovien->hodem}} {{$list->Giaovien->ten}}" src="{{asset('public/upload/giaovien/'.$list->Giaovien->avatar)}}">
            </div>
            <div class="info" style="margin-top: 0px;">
              <div class="title" style=" text-overflow: ellipsis;  white-space: nowrap; overflow: hidden;">
                <a  href="{{URL::to('khoa-hoc/'.$list->slug_sanpham.'='.$list->sanpham_id)}}">{{$list->tensanpham}}</a>
              </div>
              <div class="desc">Giáo Viên: {{$list->Giaovien->hodem}} {{$list->Giaovien->ten}}</div>
              <div class="desc">Môn học: {{$list->Danhmuc->tendanhmuc}}</div>
              <div class=" text-dark p-1"> Học phí:
                @if($list->price==0)
                <span class="h6"><b>FREE</b></span>

                @else
                @if($list->discount==0)
                <span class="h6 money-format">{{$list->price}}</span> VND
                @else
                {{-- <del style="color: #999"><span class=" money-format" >{{$list->price}}</span>VND</del> --}}
                <span class="h6 money-format">{{($list->price)*(1-($list->discount/100))}}</span> VND
                @endif
                @endif
                <script type="text/javascript">
                  $('.money-format').simpleMoneyFormat();
                </script>
              </div>
            </div>
            <div class="bottom">
              <a href="{{URL::to('khoa-hoc/'.$list->slug_sanpham.'='.$list->sanpham_id)}}" class="btn btn-primary">Đăng ký ngay</a>
            </div>
          </div>
        </div>
   {{--      @endif --}}
        @endforeach

        {{-- <div class="w-100">
                <div class="pr-3 float-right" >
                                    <span>{{ $khoahocduocchon->render()}}</span>
      </div>
    </div>
    --}}
  {{--   <div class="w-100">
        <div class="float-right p-2">
        {{$khoahocduocloc->links()}}
        </div>
    </div> --}}
</div>
