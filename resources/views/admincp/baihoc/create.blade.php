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
                <div class="card-header">Thêm Bài Học</div>
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
                    <form method="POST" action="{{route('baihoc.store')}}">
                         @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên bài học:</label>
                            <input type="text" class="form-control" name="tieude" id="slug" value="{{old('tieude')}}" onkeyup="ChangeToSlug();" aria-describedby="emailHelp" placeholder="Tiêu đề bài học...">

                          </div>
                              <div class="form-group">
                            <label for="exampleInputEmail1">Slug bài học:</label>
                            <input type="text" class="form-control" name="slug_baihoc" id="convert_slug" value="{{old('slug_baihoc')}}" aria-describedby="emailHelp" placeholder="Slug bài học...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt bài học:</label>
                            <input type="text" name="tomtat" class="form-control" id="exampleInputEmail1" value="{{old('tomtat')}}" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung bài học:</label>
                            <textarea class="form-control" id="noidung_baihoc" name="noidung" rows="5" resize="none">{{old('noidung')}}</textarea>

                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Thuộc khóa học:</label>
                              <select class="custom-select" name="id_sanpham">
                              @foreach($sanpham as $key => $value)
                              <option value="{{$value->sanpham_id}}">{{$value->tensanpham}}</option>
                              @endforeach
                              </select>
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
                          <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
                @endsection
