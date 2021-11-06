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
                <div class="card-header">Thêm Giáo Viên</div>
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
                    <form method="POST" action="{{route('giaovien.store')}}" enctype="multipart/form-data">
                         @csrf
                          <div class="form-group row">
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Họ đệm:</label>
                            <input type="text" class="form-control" name="hodem" value="{{old('hodem')}}"  aria-describedby="emailHelp" placeholder="Họ đệm...">
                            </div>
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="text" class="form-control" name="ten" value="{{old('ten')}}" aria-describedby="emailHelp" placeholder="Tên giáo viên...">
                        </div>

                          </div>
                        <div class="form-group">

                            <label for="exampleInputEmail1">Ngày sinh:</label>
                            <input type="date" class="form-control" name="ngaysinh" value="{{old('ngaysinh')}}" min="1960-01-01" max="2002-12-31"  >
                        </div>
                            <div class="form-group">
                          <label for="exampleInputEmail1">Giới tính:</label>
                          <select class="custom-select" name="gioitinh">
                              @if(old('gioitinh')==0)
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
                            <input type="text" class="form-control" name="CMND" value="{{old('CMND')}}"  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại:</label>
                            <input type="tel" pattern="[0]{1}[0-9]{9}" class="form-control" name="sodienthoai" value="{{old('sodienthoai')}}"  >

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}"  >

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Giới thiệu:</label>
                            <textarea class="form-control" id="noidung_baihoc" name="gioithieu" rows="5" resize="none">{{old('gioithieu')}}</textarea>

                          </div>

              
                         <div class="form-group">
                          <label for="exampleInputEmail1">Avatar:</label>
                              <input type="file" value="{{old('avatar')}}" class="form-control" name="avatar">
                          </div>
                           <div class="form-group">
                          <label for="exampleInputEmail1">Trạng thái:</label>
                          <select class="custom-select" name="kichhoat">
                              @if(old('kichhoat')==0)
                              <option selected value="0">Kích hoạt</option>
                              <option value="1">Không kích hoạt</option>
                              @else
                              <option selected value="1">Không kích hoạt</option>
                              <option  value="0">Kích hoạt</option>
                              @endif
                          </select>
                         </div>
                          <button name="themgiaovien" class="btn btn-primary">Thêm</button>
                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
                @endsection
