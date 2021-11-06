
  <div class="row" >
    <div class="col-md-3 p-0 pr-2">
      <div class="col-md-12 p-3" style="border: 1px solid #ccc;border-radius: 10px;">
        <div class="header-danhmuc">
          <div class="h4 border-bottom pb-1"><b>Danh mục khóa học</b></div>
        </div>


        <ul class="list-unstyled ps-0">
          <li class="p-2"><a class="text-decoration-none" href="{{URL::to('/khoahoc')}}">Xem tất cả các khóa học</a></li>
          <li class="p-2"><a class="text-decoration-none" href="">Các khóa học miễn phí</a></li>

          @foreach($lophoc as $lop)
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse{{$lop->idlop}}" aria-expanded="{{isset($lopduocchon) && $lopduocchon->idlop==$lop->idlop ? 'true' : 'false'}}">Lớp {{$lop->tenlop}}
            </button>
            <div class="collapse {{isset($lopduocchon) && $lopduocchon->idlop==$lop->idlop ? 'show' : ''}}" id="home-collapse{{$lop->idlop}}">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                @foreach($monhoc as $mon)
                @if($mon->id_lop==$lop->idlop)
                <li class=""><a href="{{URL::to('mon-hoc/'.$mon->slug_danhmuc."=".$mon->id)}}" class="link-dark rounded">{{$mon->tendanhmuc}}</a></li>
                @endif
                @endforeach
              </ul>
            </div>
          </li>
          @endforeach


        </ul>
        <div class="header-danhmuc mt-2">
          <div class="h4 border-bottom pb-1"><b>Lọc khóa học</b></div>
        </div>

        <form method="get" action="{{URL::to('/lockhoahoc')}}">
            @method('PUT')
       {{--      @csrf --}}
        <div class="h5 pb-1 pt-1">Học phí (VNĐ):</div>
        <ul class="list-unstyled ps-0">
          <li class="">
            <div class="">
              <div class="col-sm-12">
                <label for="customRange">Min: </label><br>
                <input type="text" style="border-radius:50px;" class="form-control money-format" min="{{$min}}" id="minprice" max="{{$maxprice->price}}" step="50000" value="{{$min}}" required name="minprice">
              </div>
              <div class="col-sm-12">
                <label for="customRange">Max: </label>
                <input type="text" style="border-radius:50px;" class="form-control money-format" id="maxprice" min="0" max="{{$maxprice->price}}" step="50000" required value="{{$max}}" name="maxprice">
              </div>
            </div>
          </li>
        </ul>
        <div class="w-100 p-3">
        <button type="submit" class="btn btn-primary p-2" style="border-radius: 10px;">Lọc khóa học</button>
      </div>
        </form>
        <div class="header-danhmuc mt-2">
          <div class="h4 border p-2 text-light bg-dark">Các tag nổi bật</div>
        </div>
      </div>
