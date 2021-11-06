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
                <div class="card-header">Cập nhật bài Học</div>
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
                    <form method="POST" action="{{route('baihoc.update',[$baihoc->id_baihoc])}}">
                         @method('PUT')
                         @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên bài học:</label>
                            <input type="text" class="form-control" name="tieude" id="slug" value="{{$baihoc->tieude}}" onkeyup="ChangeToSlug();" aria-describedby="emailHelp" placeholder="Tiêu đề bài học...">

                          </div>
                              <div class="form-group">
                            <label for="exampleInputEmail1">Slug bài học:</label>
                            <input type="text" class="form-control" name="slug_baihoc" id="convert_slug" value="{{$baihoc->slug_baihoc}}" aria-describedby="emailHelp" placeholder="Slug bài học...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt bài học:</label>
                            <input type="text" name="tomtat" class="form-control" id="exampleInputEmail1" value="{{$baihoc->tomtat}}" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung bài học:</label>
                            <textarea class="form-control" id="noidung_baihoc" name="noidung" rows="5" resize="none">{{$baihoc->noidung}}</textarea>

                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Thuộc khóa học:</label>
                              <select class="custom-select" name="id_sanpham">
                             @foreach($sanpham as $key => $list)
                              <option {{$list->sanpham_id==$baihoc->id_sanpham ? 'selected' : ''}} value="{{$list->sanpham_id}}">{{$list->tensanpham}}</option>
                              @endforeach
                              </select>
                          </div>

                         <div class="form-group">
                          <label for="exampleInputEmail1">Trạng thái:</label>
                          <select class="custom-select" name="kichhoat">
                              @if($baihoc->kichhoat==0)
                              <option selected value="0">Kích hoạt</option>
                              <option value="1">Không kích hoạt</option>
                              @else
                              <option selected value="1">Không kích hoạt</option>
                              <option  value="0">Kích hoạt</option>
                              @endif
                          </select>
                         </div>
                          <button name="editbaihoc" class="btn btn-primary">Cập nhật thông tin</button>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
              </section>
          </section>
                @endsection
