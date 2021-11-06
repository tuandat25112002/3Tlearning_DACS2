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
                <div class="card-header">Sửa Tài liệu</div>
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
                    <form method="POST" action="{{route('tailieu.update',[$tailieu->id])}}" enctype="multipart/form-data">
                         @method('put')
                         @csrf
                          <div class="form-group">

                            <label for="exampleInputEmail1">Tên file:</label>
                            <input type="text" class="form-control" name="tenfile" value="{{$tailieu->tenfile}}"   placeholder="Tên file...">




                          </div>
                           <div class="form-group">
                          <label for="exampleInputEmail1">File tài liệu:</label>
                              <input type="file" value="{{asset('public/upload/tailieu/'.$tailieu->tenfile)}}" class="form-control" name="file">
                          </div>
                        <div class="form-group">

                            <label for="exampleInputEmail1">Ngày đăng tải:</label>
                             <?php  date_default_timezone_set('Asia/Ho_Chi_Minh');?>
                            <input type="date" name="ngaycapnhat" class="form-control" readonly value="<?php echo date('Y-m-d');?>">
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Thuộc bài học:</label>
                              <select class="custom-select" name="id_baihoc">

                              @foreach($baihocs as $key => $value)
                              @if($value->id_baihoc==$tailieu->id_baihoc)
                              <option selected value="{{$value->id_baihoc}}">{{$value->tieude}}</option>
                              @else
                              <option value="{{$value->id_baihoc}}">{{$value->tieude}}</option>
                              @endif
                              @endforeach
                              </select>
                          </div>






                          <button name="themgiaovien" class="btn btn-primary">Cập nhật</button>
                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
                @endsection

