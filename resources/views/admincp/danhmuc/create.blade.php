@extends('dashboard')

@section('admin_content')
{{-- @include('layouts.nav') --}}
{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <section id="main-content">
        <section class="wrapper ">

    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card">
                <div class="card-header">Thêm môn học</div>
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
                    {{-- form thêm môn học --}}
                    <form method="POST" action="{{route('danhmuc.store')}}">
                         @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên môn học:</label>
                            <input type="text" class="form-control" name="tendanhmuc" id="slug" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug();" aria-describedby="emailHelp" placeholder="Tên môn học...">

                          </div>
                              <div class="form-group">
                            <label for="exampleInputEmail1">Slug môn học:</label>
                            <input type="text" class="form-control" name="slug_danhmuc" id="convert_slug" value="{{old('slug_danhmuc')}}" aria-describedby="emailHelp" placeholder="Slug môn học...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả môn học:</label>
                            <input type="text" name="mota" class="form-control" id="exampleInputEmail1" value="{{old('mota')}}" aria-describedby="emailHelp" placeholder="Mô tả môn học...">

                          </div>
                               <div class="form-group">
                            <label for="exampleInputEmail1">Lớp:</label>
                              <select class="custom-select" name="id_lop">
                              @foreach($lophoc as $key => $value)
                              <option value="{{$value->idlop}}">{{$value->tenlop}}</option>
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
                 {{--    </div>
                </div> --}}
                </section>
            </section>
                @endsection
