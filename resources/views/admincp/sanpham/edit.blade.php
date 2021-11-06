
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    function chooseFile(fileInput){
        if(fileInput.files && fileInput.files[0]){
            var reader = new FileReader();
            reader.onload=function(e){
                $('#image').attr('src',e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);
        }

    }
    </script>
</head>

@extends('dashboard')

@section('admin_content')
{{-- @include('layouts.nav') --}}
{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <section id="main-content">
        <section class="wrapper ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm sản phẩm</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- form thêm danh mục --}}
                    <form method="POST" action="{{route('sanpham.update',[$sanpham->sanpham_id])}}" enctype="multipart/form-data">
                         @method('PUT')
                         @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm:</label>
                            <input type="text" class="form-control" name="tensanpham" id="slug" value="{{$sanpham->tensanpham}}" onkeyup="ChangeToSlug();" aria-describedby="emailHelp" placeholder="Tên sản phẩm...">

                          </div>
                              <div class="form-group">
                            <label for="exampleInputEmail1">Slug sản phẩm:</label>
                            <input type="text" class="form-control" name="slug_sanpham" id="convert_slug" value="{{$sanpham->slug_sanpham}}" aria-describedby="emailHelp" placeholder="Slug sản phẩm...">

                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Giá khóa học (VND):</label>
                            <input type="text" class="form-control money"class="" name="price" value="{{$sanpham->price}}"  aria-describedby="emailHelp" placeholder="Giá khóa học...">

                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá (%):</label>
                            <input type="text" class="form-control" name="discount" value="{{$sanpham->discount}}"  aria-describedby="emailHelp" placeholder="Giảm giá khóa học...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sản phẩm:</label>
                            <textarea class="form-control" id="noidung_baihoc" name="motasanpham" rows="5" resize="none">{{$sanpham->motasanpham}}</textarea>

                          </div>
                          <div class="form-group">
                          <label for="exampleInputEmail1">Danh mục sản phẩm:</label>
                          <select class="custom-select" name="danhmuc">
                              @foreach($danhmuc as $key => $list)
                              <option {{$list->id==$sanpham->id_danhmuc ? 'selected' : ''}} value="{{$list->id}}">{{$list->tendanhmuc}}</option>
                              @endforeach
                          </select>
                         </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Lượt xem:</label>
                            <input type="text" readonly class="form-control money"class="" name="luotxem" value="{{$sanpham->luotxem}}"  aria-describedby="emailHelp" placeholder="Giá khóa học...">

                          </div>
                         <div class="form-group">
                          <label for="exampleInputEmail1">Lựa chọn nổi bật:</label>
                          <select class="custom-select" name="idnoibat">
                              @foreach($noibats as $noi)
                              @if($sanpham->idnoibat == $noi->id)
                              <option selected value="{{$noi->id}}">{{$noi->tennoibat}}</option>
                              @else
                              <option value="{{$noi->id}}">{{$noi->tennoibat}}</option>
                              @endif
                              @endforeach
                          </select>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Giáo viên giảng dạy:</label>
                              <select class="custom-select" name="id_giaovien">
                              @foreach($giaovien as $key => $value)
                                <option {{$value->id==$sanpham->id_giaovien ? 'selected' : ''}} value="{{$value->id}}">

                                    @if($value->gioitinh ==0)
                                    Thầy
                                    @else
                                    Cô
                                    @endif
                                   {{$value->hodem}} {{$value->ten}}</option>
                              @endforeach
                              </select>
                          </div>
                         <div class="form-group">
                          <label for="exampleInputEmail1">Hình ảnh sản phẩm:</label>
                          <br>
                          <img width="auto" height="200px" id="image" style="border-radius: 10px"  src="{{asset('public/upload/sanpham/'.$sanpham->hinhanh)}}">
                          <br>
                         </div>
                           <div class="form-group">
                          <label>Tải hình ảnh lên:</label>
                          <input type="file" style="padding: 0;border: none;" class="form-control" id="fileInput" onchange="chooseFile(this)" name="hinhanh">
                          </div>
                         <div class="form-group">
                          <label for="exampleInputEmail1">Trạng thái:</label>
                           <select class="custom-select" name="kichhoat">
                              @if($sanpham->kichhoat==0)
                              <option selected value="0">Kích hoạt</option>
                              <option value="1">Không kích hoạt</option>
                              @else{
                              <option selected value="1">Không kích hoạt</option>
                              <option value="0">Kích hoạt</option>
                              }
                              @endif
                          </select>
                         </div>
                          <button name="suasanpham" class="btn btn-primary">Sửa</button>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
                @endsection
