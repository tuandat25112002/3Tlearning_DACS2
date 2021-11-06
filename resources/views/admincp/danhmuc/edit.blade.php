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
                <div class="card-header">Cập nhật Danh Mục</div>
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
                    <form method="POST" action="{{route('danhmuc.update',[$danhmuc->id])}}">
                        @method('PUT')
                         @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục:</label>
                            <input type="text" class="form-control" onkeyup="ChangeToSlug();" name="tendanhmuc" id="slug" value="{{$danhmuc->tendanhmuc}}"  placeholder="Tên danh mục...">

                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Slug danh mục:</label>
                            <input type="text" class="form-control" name="slug_danhmuc" id="convert_slug" value="{{$danhmuc->slug_danhmuc}}"  placeholder="Slug danh mục...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả danh mục:</label>
                            <input type="text" name="mota" class="form-control" id="exampleInputEmail1" value="{{$danhmuc->mota}}"  placeholder="Mô tả danh mục...">

                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Lớp:</label>
                              <select class="custom-select" name="id_lop">
                              @foreach($lophoc as $key => $value)
                              <option {{$value->idlop==$danhmuc->id_lop ? 'selected' : ''}} value="{{$value->idlop}}">{{$value->tenlop}}</option>
                              @endforeach
                              </select>
                          </div>
                         <div class="form-group">
                          <label for="exampleInputEmail1">Trạng thái:</label>
                          <select class="custom-select" name="kichhoat">
                              @if($danhmuc->kichhoat==0)
                              <option selected value="0">Kích hoạt</option>
                              <option value="1">Không kích hoạt</option>
                              @else{
                              <option selected value="1">Không kích hoạt</option>
                              <option value="0">Kích hoạt</option>
                              }
                              @endif
                          </select>
                         </div>
                          <button type="submit" name="themdanhmuc" class="btn btn-primary">Sửa danh mục</button>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
                @endsection
