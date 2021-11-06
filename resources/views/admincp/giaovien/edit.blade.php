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
                <div class="card-header">Cập nhật Giáo Viên</div>
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
                    <form method="POST" action="{{route('giaovien.update',[$giaovien->id])}}" enctype="multipart/form-data">
                        @method('PUT')
                         @csrf
                          <div class="form-group row">
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Họ đệm:</label>
                            <input type="text" class="form-control" name="hodem" value="{{$giaovien->hodem}}"  aria-describedby="emailHelp" placeholder="Họ đệm...">
                            </div>
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="text" class="form-control" name="ten" value="{{$giaovien->ten}}" aria-describedby="emailHelp" placeholder="Tên giáo viên...">
                        </div>

                          </div>
                        <div class="form-group">

                            <label for="exampleInputEmail1">Ngày sinh:</label>
                            <input type="date" class="form-control" name="ngaysinh" value="{{$giaovien->ngaysinh}}" min="1960-01-01" max="2002-12-31"  >
                        </div>
                            <div class="form-group">
                          <label for="exampleInputEmail1">Giới tính:</label>
                          <select class="custom-select" name="gioitinh">
                              @if($giaovien->gioitinh==0)
                              <option selected value="0">Nam</option>
                              <option value="1">Nữ</option>
                              @else
                              <option selected value="1">Nữ</option>
                              <option  value="0">Nam</option>
                              @endif
                          </select>
                         </div>
                          <div class="form-group">

                            <label for="exampleInputEmail1" >Số CMND:</label>
                            <input type="text" readonly class="form-control" name="CMND" value="{{$giaovien->CMND}}"  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại:</label>
                            <input type="tel" pattern="[0]{1}[0-9]{9}" class="form-control" name="sodienthoai" value="{{$giaovien->sodienthoai}}"  >

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{$giaovien->email}}"  >

                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Giới thiệu:</label>
                            <textarea class="form-control" id="noidung_baihoc" name="gioithieu" rows="5" resize="none">{{$giaovien->gioithieu}}</textarea>

                          </div>

                    {{--       <div class="form-group">
                          <label for="exampleInputEmail1">Danh mục sản phẩm:</label>
                          <select class="custom-select" name="danhmuc">
                              @foreach($danhmuc as $key => $list)
                              <option value="{{$list->id}}">{{$list->tendanhmuc}}</option>
                              @endforeach
                          </select>
                         </div> --}}
                         <div class="form-group">
                          <label for="exampleInputEmail1">Avatar:</label>
                               <br>
                          <img width="auto" height="200px" id="image" style="border-radius: 10px"  src="{{asset('public/upload/giaovien/'.$giaovien->avatar)}}">
                          <br>
                          </div>
                            <div class="form-group">
                          <label>Tải hình ảnh lên:</label>
                          <input type="file" style="padding: 0;border: none;" class="form-control" id="fileInput" onchange="chooseFile(this)" name="avatar" value="{{asset($giaovien->avatar)}}">
                          </div>
                           <div class="form-group">
                          <label for="exampleInputEmail1">Trạng thái:</label>
                          <select class="custom-select" name="kichhoat">
                              @if($giaovien->kichhoat==0)
                              <option selected value="0">Kích hoạt</option>
                              <option value="1">Không kích hoạt</option>
                              @else{
                              <option selected value="1">Không kích hoạt</option>
                              <option value="0">Kích hoạt</option>
                              }
                              @endif
                          </select>
                         </div>
                          <button name="themgiaovien" class="btn btn-primary">Cập nhật</button>
                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
                @endsection
