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
                <div class="card-header">Thêm khóa học</div>
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
                    <form method="POST" action="{{route('sanpham.store')}}" enctype="multipart/form-data">
                         @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên khóa học:</label>
                            <input type="text" class="form-control" name="tensanpham" id="slug" value="{{old('tensanpham')}}" onkeyup="ChangeToSlug();" aria-describedby="emailHelp" placeholder="Tên khóa học...">

                          </div>
                              <div class="form-group">
                            <label for="exampleInputEmail1">Slug khóa học:</label>
                            <input type="text" class="form-control" name="slug_sanpham" id="convert_slug" value="{{old('slug_sanpham')}}" aria-describedby="emailHelp" placeholder="Slug khóa học...">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Giá khóa học:</label>
                            <input type="text" class="form-control money"  name="price" value="{{old('price')}}"  aria-describedby="emailHelp" placeholder="Giá khóa học...">

                          </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá (%):</label>
                            <input type="text" class="form-control" name="discount" value="{{old('discount')}}"  aria-describedby="emailHelp" placeholder="Giảm giá khóa học...">

                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1" >Mô tả khóa học:</label>
                            <textarea class="form-control" id="noidung_baihoc" name="motasanpham" rows="5" resize="none">{{old('motasanpham')}}</textarea>

                          </div>
                          <div class="form-group">
                          <label for="exampleInputEmail1">Danh mục khóa học:</label>
                          <select class="custom-select" name="danhmuc">
                              @foreach($danhmuc as $key => $list)
                              <option value="{{$list->id}}">{{$list->tendanhmuc}}</option>
                              @endforeach
                          </select>
                         </div>
                               <div class="form-group">
                          <label for="exampleInputEmail1">Thêm vào mục:</label>
                          <select class="custom-select" name="idnoibat">
                              @foreach($noibats as $noi)
                              <option value="{{$noi->id}}">{{$noi->tennoibat}}</option>
                              @endforeach
                          </select>
                         </div>
                         <div class="form-group">
                                <label for="exampleInputEmail1">Giáo viên giảng dạy:</label>
                                  <select class="custom-select" name="id_giaovien">
                                  @foreach($giaovien as $gv => $value)
                                  <option value="{{$value->id}}">
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
                          <label for="exampleInputEmail1">Hình ảnh khóa học:</label>
                              <input type="file" class="form-control" name="hinhanh">
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
                </div>
            </section>
        </section>
                @endsection
